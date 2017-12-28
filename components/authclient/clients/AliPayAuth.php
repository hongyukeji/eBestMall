<?php

namespace app\components\authclient\clients;

use Yii;
use yii\authclient\OAuthToken;
use yii\helpers\Json;
use yii\web\HttpException;
use yii\authclient\OAuth2;
use yii\helpers\ArrayHelper;

class AliPayAuth extends OAuth2
{
    public $authUrl = 'https://openauth.alipaydev.com/oauth2/publicAppAuthorize.htm';   // https://openauth.alipaydev.com/oauth2/publicAppAuthorize.htm

    public $tokenUrl = 'https://openauth.alipaydev.com/oauth2/publicAppAuthorize.htm';    // https://openauth.alipaydev.com/oauth2/appToAppAuth.htm

    public $apiBaseUrl = 'https://openauth.alipaydev.com';    // https://openapi.alipaydev.com/gateway.do

    public $scope = 'auth_base';

    public function init()
    {
        parent::init();
        if ($this->scope === null) {
            $this->scope = 'auth_base';
        }
    }

    protected function initUserAttributes()
    {
        return $this->api('oauth2/publicAppAuthorize.htm', 'GET');
    }

    public function getUserAttributes()
    {
        $userInfo = [];

        $attributes = $this->initUserAttributes();

        $userInfo['client_key'] = $this->getId();
        $userInfo['openid'] = ArrayHelper::getValue($attributes, 'user_id');
        $userInfo['username'] = ArrayHelper::getValue($attributes, 'nick_name');
        $userInfo['avatar_url'] = ArrayHelper::getValue($attributes, 'avatar');

        return $userInfo;
    }

    public function buildAuthUrl(array $params = [])
    {
        $defaultParams = [
            'app_id' => $this->clientId,
            'clientId' => $this->clientId,
            'response_type' => 'code',
            'redirect_uri' => $this->getReturnUrl(),
            'xoauth_displayname' => Yii::$app->name,
        ];
        if (!empty($this->scope)) {
            $defaultParams['scope'] = $this->scope;
        }

        if ($this->validateAuthState) {
            $authState = $this->generateAuthState();
            $this->setState('authState', $authState);
            $defaultParams['state'] = $authState;
        }

        dump('buildAuthUrl');

        return $this->composeUrl($this->authUrl, array_merge($defaultParams, $params));
    }

    public function applyClientCredentialsToRequest($request)
    {
        $request->addData([
            'app_id' => $this->clientId,
            'sign' => $this->clientSecret,
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
        ]);
    }

}