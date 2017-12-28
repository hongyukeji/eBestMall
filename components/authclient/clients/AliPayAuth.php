<?php

namespace app\components\authclient\clients;

use Yii;
use yii\authclient\OAuthToken;
use yii\helpers\Json;
use yii\web\HttpException;
use yii\authclient\OAuth2;

class AliPayAuth extends OAuth2
{
    public $authUrl = 'https://openauth.alipaydev.com/oauth2/publicAppAuthorize.htm';   // https://openauth.alipaydev.com/oauth2/publicAppAuthorize.htm

    public $tokenUrl = 'https://openauth.alipaydev.com/oauth2/appToAppAuth.htm';    // https://openauth.alipaydev.com/oauth2/appToAppAuth.htm

    public $apiBaseUrl = 'https://openauth.alipaydev.com/gateway.do';

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

        //dump($defaultParams);exit;

        return $this->composeUrl($this->authUrl, array_merge($defaultParams, $params));
    }

    public function fetchAccessToken($authCode, array $params = [])
    {
        if ($this->validateAuthState) {
            $authState = $this->getState('authState');
            if (!isset($_REQUEST['state']) || empty($authState) || strcmp($_REQUEST['state'], $authState) !== 0) {
                throw new HttpException(400, 'Invalid auth state parameter.');
            } else {
                $this->removeState('authState');
            }
        }

        $defaultParams = [
            'code' => $authCode,
            'grant_type' => 'authorization_code',
            'redirect_uri' => $this->getReturnUrl(),
        ];

        $request = $this->createRequest()
            ->setMethod('GET')
            ->setUrl($this->tokenUrl)
            ->setData(array_merge($defaultParams, $params));

        $this->applyClientCredentialsToRequest($request);

        $response = $this->sendRequest($request);

        $token = $this->createToken(['params' => $response]);
        $this->setAccessToken($token);

        return $token;
    }

    public function applyAccessTokenToRequest($request, $accessToken)
    {
        $data = $request->getData();
        $data['access_token'] = $accessToken->getToken();
        $request->setData($data);
    }

    public function refreshAccessToken(OAuthToken $token)
    {
        $params = [
            'grant_type' => 'refresh_token'
        ];
        $params = array_merge($token->getParams(), $params);

        $request = $this->createRequest()
            ->setMethod('GET')
            ->setUrl($this->tokenUrl)
            ->setData($params);

        $this->applyClientCredentialsToRequest($request);

        $response = $this->sendRequest($request);

        $token = $this->createToken(['params' => $response]);
        $this->setAccessToken($token);

        return $token;
    }

    protected function defaultReturnUrl()
    {
        $params = Yii::$app->getRequest()->getQueryParams();
        unset($params['code']);
        unset($params['state']);
        $params[0] = Yii::$app->controller->getRoute();

        return Yii::$app->getUrlManager()->createAbsoluteUrl($params);
    }
}