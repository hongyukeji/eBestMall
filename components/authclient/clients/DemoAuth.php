<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\components\authclient\clients;

use yii\authclient\OAuth2;
use yii\authclient\OAuthToken;

use yii\authclient\InvalidResponseException;
use yii\helpers\ArrayHelper;
use yii\httpclient\Request;
use yii\httpclient\Response;

/**
 * Demo allows authentication via Demo OAuth.
 *
 * In order to use Demo OAuth you must register your application at <http://connect.demo.com/>.
 *
 * Example application configuration:
 *
 * ```php
 * 'components' => [
 *     'authClientCollection' => [
 *         'class' => 'yii\authclient\Collection',
 *         'clients' => [
 *             'demo' => [
 *                 'class' => 'app\components\authclient\clients\QqAuth',
 *                 'clientId' => 'demo_client_id',
 *                 'clientSecret' => 'demo_client_secret',
 *             ],
 *         ],
 *     ]
 *     // ...
 * ]
 * ```
 *
 * @see http://connect.demo.com/
 *
 * @author Shadow <hongyukeji@126.com>
 * @since 1.0
 */
class DemoAuth extends OAuth2
{
    /**
     * @Step1：获取Authorization Code
     */
    public $authUrl = 'https://graph.demo.com/oauth2.0/authorize';

    /**
     * @Step2：通过Authorization Code获取Access Token
     */
    public $tokenUrl = 'https://graph.demo.com/oauth2.0/token';

    /**
     * {@inheritdoc}
     */
    public $apiBaseUrl = 'https://graph.demo.com';


    public $scope = 'get_user_info';

    public $attributeNames = [
        'nickname',
        'figureurl_demo_2',
    ];

    public $autoRefreshAccessToken = false;

    public $autoExchangeAccessToken = false;

    public $clientAuthCodeUrl = 'https://graph.demo.com/oauth/client_code';


    /**
     * {@inheritdoc}
     */
    /*public function init()
    {
        parent::init();
        if ($this->scope === null) {
            $this->scope = implode(',', [
                'get_user_info',
            ]);
        }
    }*/


    /**
     * @return array
     * @see http://wiki.connect.demo.com/%E8%8E%B7%E5%8F%96%E7%94%A8%E6%88%B7openid_oauth2-0
     * @see http://wiki.connect.demo.com/get_user_info
     */
    protected function initUserAttributes()
    {

        return $this->api('oauth2.0/me', 'GET');

        /*//dump($attributes);exit;

        // 获取用户信息
        $userinfo = $this->api("user/get_user_info", 'GET', [
            'oauth_consumer_key' => $attributes['client_id'],   //  $this->clientId 申请Demo登录成功后，分配给应用的appid。
            'openid' => $attributes['openid'],
        ]);

        // 处理赋值 用户名 头像
        $userinfo['openid'] = $attributes['openid'];
        $userinfo['username'] = $userinfo['nickname'];
        $userinfo['avatar_url'] = $userinfo['figureurl_demo_2'];

        // 合并数组
        $result = ArrayHelper::merge($attributes,$userinfo);

        return $result;*/
    }

    protected function defaultName()
    {
        return 'demo';
    }

    protected function defaultTitle()
    {
        return 'Demo';
    }


    protected function defaultViewOptions()
    {
        return [
            'popupWidth' => 860,
            'popupHeight' => 480,
        ];
    }

    /**
     * @param string $authCode
     * @param array $params
     * @return OAuthToken
     * @throws \yii\web\HttpException
     * 返回说明：
     * 如果成功返回，即可在返回包中获取到Access Token。 如：
     * access_token=FE04************************CCE2&expires_in=7776000&refresh_token=88E4************************BE14
     */
    public function fetchAccessToken($authCode, array $params = [])
    {
        $token = parent::fetchAccessToken($authCode, $params);
        if ($this->autoExchangeAccessToken) {
            $token = $this->exchangeAccessToken($token);
        }
        return $token;
    }

    public function applyAccessTokenToRequest($request, $accessToken)
    {
        parent::applyAccessTokenToRequest($request, $accessToken);

        $data = $request->getData();
        if (($machineId = $accessToken->getParam('machine_id')) !== null) {
            $data['machine_id'] = $machineId;
        }
        $data['appsecret_proof'] = hash_hmac('sha256', $accessToken->getToken(), $this->clientSecret);
        $request->setData($data);
    }

    public function exchangeAccessToken(OAuthToken $token)
    {
        $params = [
            'grant_type' => 'authorization_code',
            'authorization_code' => $token->getToken(),
        ];
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

    public function fetchClientAuthCode(OAuthToken $token = null, $params = [])
    {
        if ($token === null) {
            $token = $this->getAccessToken();
        }

        $params = array_merge([
            'access_token' => $token->getToken(),
            'redirect_uri' => $this->getReturnUrl(),
        ], $params);

        $request = $this->createRequest()
            ->setMethod('GET')
            ->setUrl($this->clientAuthCodeUrl)
            ->setData($params);

        $this->applyClientCredentialsToRequest($request);

        $response = $this->sendRequest($request);

        return $response['code'];
    }

    public function fetchClientAccessToken($authCode, array $params = [])
    {
        $params = array_merge([
            'code' => $authCode,
            'redirect_uri' => $this->getReturnUrl(),
            'client_id' => $this->clientId,
        ], $params);

        $request = $this->createRequest()
            ->setMethod('GET')
            ->setUrl($this->tokenUrl)
            ->setData($params);

        $response = $this->sendRequest($request);

        $token = $this->createToken(['params' => $response]);
        $this->setAccessToken($token);

        return $token;
    }



    /**
     * @return array
     * @see http://wiki.connect.demo.com/get_user_info
     */
    /*public function getUserInfo()
    {
        return $this->api("user/get_user_info", 'GET', [
            'oauth_consumer_key' => $this->clientId,
            'openid' => $this->getOpenid(),
        ]);
    }*/

    /*public function getOpenid()
    {
        $attributes = $this->getUserAttributes();
        return $attributes['openid'];
    }*/


    /**
     * @param Request $request
     * @return array|mixed
     * @throws InvalidResponseException
     * @throws \yii\httpclient\Exception
     */
    protected function sendRequest($request)
    {
        $response = $request->send();
        if (!$response->getIsOk()) {
            throw new InvalidResponseException($response, 'Request failed with code: ' . $response->getStatusCode() . ', message: ' . $response->getContent());
        }
        $this->processResult($response);
        return $response->getData();
    }

    /**
     * @param Response $response
     */
    protected function processResult(Response $response)
    {
        $content = $response->getContent();
        if (strpos($content, "callback") !== 0) {
            return;
        }
        $lpos = strpos($content, "(");
        $rpos = strrpos($content, ")");
        $content = substr($content, $lpos + 1, $rpos - $lpos - 1);
        $content = trim($content);
        $response->setContent($content);
    }


}
