<?php

namespace app\components\authclient\clients;

use app\models\UserAuth;
use app\models\User;
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
        $openid = ArrayHelper::getValue($attributes, 'openid');
        $username = ArrayHelper::getValue($attributes, 'username');
        $avatar_url = ArrayHelper::getValue($attributes, 'avatar_url');
        $client_key = ArrayHelper::getValue($attributes, 'client_key'); // $this->client->getId()

        /* @var UserAuth $auth */
        $auth = UserAuth::find()->where([
            'source' => $this->client->getId(),
            'source_id' => $openid,
        ])->one();

        if (Yii::$app->user->isGuest) {
            if ($auth) { // login 用户存在-未登录,进行登录操作
                /* @var User $user */
                $user = $auth->user;
                //$this->updateUserInfo($user);   // 更新用户信息
                Yii::$app->user->login($user, Yii::$app->params['user.rememberMeDuration']);
            } else { // signup 用户不存在 进行注册

                $userInfo['client_key'] = $client_key;
                $userInfo['openid'] = $openid;
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
                $auth = new UserAuth([
                    'user_id' => Yii::$app->user->id,
                    'source' => $this->client->getId(),
                    'source_id' => (string)$openid,
                ]);
                if ($auth->save()) {
                    /** @var User $user */
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
}