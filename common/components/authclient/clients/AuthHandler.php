<?php

namespace common\components\authclient\clients;

use common\models\UserAuthModel;
use common\models\UserModel;
use Yii;
use yii\authclient\ClientInterface;
use yii\helpers\ArrayHelper;
use yii\base\DynamicModel;
use yii\helpers\Url;

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
        $source_id = ArrayHelper::getValue($attributes, 'source_id');
        $username = ArrayHelper::getValue($attributes, 'username');
        $avatar_url = ArrayHelper::getValue($attributes, 'avatar_url');
        $client_key = ArrayHelper::getValue($attributes, 'client_key'); // $this->client->getId()

        /* @var UserAuthModel $auth */
        $auth = UserAuthModel::find()->where([
            'source' => $this->client->getId(),
            'source_id' => $source_id,
        ])->one();

        if (Yii::$app->user->isGuest) {
            if ($auth) { // login 用户存在-未登录,进行登录操作
                /* @var UserModel $user */
                $user = $auth->user;
                //$this->updateUserInfo($user);   // 更新用户信息
                Yii::$app->user->login($user, Yii::$app->params['user.rememberMeDuration']);
            } else { // signup 用户不存在 进行注册

                $userInfo['client_key'] = $client_key;
                $userInfo['source_id'] = $source_id;
                $userInfo['username'] = $username;
                $userInfo['avatar_url'] = $avatar_url;

                // 将用户信息存入session缓存
                $session = Yii::$app->session;
                $session['userInfo'] = $userInfo;

                $url = Url::toRoute(['auth/bind']);
                header("Location:" . $url);
                exit;
            }
        } else { // user already logged in
            if (!$auth) { // add auth provider
                $auth = new UserAuthModel([
                    'user_id' => Yii::$app->user->id,
                    'source' => $this->client->getId(),
                    'source_id' => (string)$source_id,
                ]);
                if ($auth->save()) {
                    /** @var UserModel $user */
                    //$user = $auth->user;
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
     * @param UserModel $user
     */
    private function updateUserInfo(UserModel $user)
    {
        $attributes = $this->client->getUserAttributes();
        $nickname = ArrayHelper::getValue($attributes, 'login');
        if ($user->nickname === null && $nickname) {
            $user->nickname = $nickname;
            $user->save();
        }
    }
}