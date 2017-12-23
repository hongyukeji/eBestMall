<?php

namespace app\components\authclient\clients;

use app\models\UserAuth;
use app\models\User;
use Yii;
use yii\authclient\ClientInterface;
use yii\helpers\ArrayHelper;

/**
 * AuthHandler handles successful authentication via Yii auth component
 */
class AuthHandler
{
    /**
     * @var ClientInterface
     */
    private $client;

    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    public function handle()
    {
        $attributes = $this->client->getUserAttributes();
        //$email = ArrayHelper::getValue($attributes, 'email');
        //$id = ArrayHelper::getValue($attributes, 'id');
        $userinfo = $this->client->getUserInfo();
        $id = $this->client->getOpenid();
        $username = ArrayHelper::getValue($userinfo, 'nickname');
        $nickname = ArrayHelper::getValue($userinfo, 'nickname') ?: $username;
        $email = ArrayHelper::getValue($userinfo, 'email');

        /* @var UserAuth $auth */
        $auth = UserAuth::find()->where([
            'source' => $this->client->getId(),
            'source_id' => $id,
        ])->one();

        if (Yii::$app->user->isGuest) {
            if ($auth) { // login 用户存在-未登录,进行登录操作
                /* @var User $user */
                $user = $auth->user;
                //$this->updateUserInfo($user);   // 更新用户信息
                Yii::$app->user->login($user, Yii::$app->params['user.rememberMeDuration']);
            } else { // signup 用户不存在 进行注册

                // 处理 用户名 和 昵称
                $username = $this->checkUserName($username);
                $nickname = $this->checkNickName($nickname);

                if ($email !== null && User::find()->where(['email' => $email])->exists()) {
                    Yii::$app->getSession()->setFlash('error', [
                        Yii::t('app', "User with the same email as in {client} account already exists but isn't linked to it. Login using email first to link it.", ['client' => $this->client->getTitle()]),
                    ]);
                } else {
                    $password = Yii::$app->security->generateRandomString(6);
                    $user = new User([
                        'username' => $username,
                        'nickname' => $nickname ?: $username,
                        'password' => $password,
                    ]);
                    $user->generateAuthKey();
                    $user->generatePasswordResetToken();

                    $transaction = User::getDb()->beginTransaction();

                    if ($user->save()) {
                        $auth = new UserAuth([
                            'user_id' => $user->user_id,
                            'source' => $this->client->getId(),
                            'source_id' => (string)$id,
                        ]);
                        if ($auth->save()) {
                            $transaction->commit();
                            Yii::$app->user->login($user, Yii::$app->params['user.rememberMeDuration']);
                        } else {
                            Yii::$app->getSession()->setFlash('error', [
                                Yii::t('app', 'Unable to save {client} account: {errors}', [
                                    'client' => $this->client->getTitle(),
                                    'errors' => json_encode($auth->getErrors()),
                                ]),
                            ]);
                        }
                    } else {
                        Yii::$app->getSession()->setFlash('error', [
                            Yii::t('app', 'Unable to save user: {errors}', [
                                'client' => $this->client->getTitle(),
                                'errors' => json_encode($user->getErrors()),
                            ]),
                        ]);
                    }
                }
            }
        } else { // user already logged in
            if (!$auth) { // add auth provider
                $auth = new UserAuth([
                    'user_id' => Yii::$app->user->id,
                    'source' => $this->client->getId(),
                    'source_id' => (string)$attributes['id'],
                ]);
                if ($auth->save()) {
                    /** @var User $user */
                    $user = $auth->user;
                    //$this->updateUserInfo($user);   // 更新用户信息
                    Yii::$app->getSession()->setFlash('success', [
                        Yii::t('app', 'Linked {client} account.', [
                            'client' => $this->client->getTitle()
                        ]),
                    ]);
                } else {
                    Yii::$app->getSession()->setFlash('error', [
                        Yii::t('app', 'Unable to link {client} account: {errors}', [
                            'client' => $this->client->getTitle(),
                            'errors' => json_encode($auth->getErrors()),
                        ]),
                    ]);
                }
            } else { // there's existing auth
                Yii::$app->getSession()->setFlash('error', [
                    Yii::t('app',
                        'Unable to link {client} account. There is another user using it.',
                        ['client' => $this->client->getTitle()]),
                ]);
            }
        }
    }

    /**
     * @param User $user
     */
    private function updateUserInfo(User $user)
    {
        $attributes = $this->client->getUserAttributes();
        $nickname = ArrayHelper::getValue($attributes, 'login');
        if ($user->nickname === null && $nickname) {
            $user->nickname = $nickname;
            $user->save();
        }
    }

    private function checkUserName($username)
    {
        $strLength = $this->utf8_strlen($username);
        if ($username !== null && $strLength < 4) {
            $username = $this->updateName($username);
        }

        // 用户名等于空 直接赋值随机的用户名
        if ($username == null) {
            $username = $this->updateName($username);
        }

        // 用户名不等于空 且 数据库中能查询得到
        if ($username !== null && User::find()->where(['username' => $username])->exists()) {
            $username = $this->updateName($username);
        }

        return $username;
    }

    private function checkNickName($nickname)
    {
        // 昵称等于空 直接赋值随机的用户名
        if ($nickname == null) {
            $nickname = $this->updateName($nickname);
        }

        $strLength = $this->utf8_strlen($nickname);
        if ($nickname !== null && $strLength < 4) {
            $nickname = $this->updateName($nickname);
        }

        // 昵称不等于空 且 数据库中能查询得到
        if ($nickname !== null && User::find()->where(['nickname' => $nickname])->exists()) {
            $nickname = $this->updateName($nickname);
        }

        return $nickname;
    }

    /**
     * @param $name
     * @return bool|string
     * @throws \yii\base\Exception
     */
    private function updateName($name)
    {
        $prefix = $this->client->getId();
        $newName = substr($prefix . '_' . $name . '_' . Yii::$app->security->generateRandomString(6), 0, 32);
        return $newName;
    }

    function utf8_strlen($string = null)
    {
        // 将字符串分解为单元
        preg_match_all(" /./us", $string, $match);
        // 返回单元个数
        return count($match[0]);
    }
}