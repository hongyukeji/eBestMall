<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace common\components\authclient\clients;

use yii\authclient\OAuth2;
use yii\authclient\InvalidResponseException;
use yii\helpers\ArrayHelper;
use yii\httpclient\Response;

/**
 * QQ allows authentication via QQ OAuth.
 *
 * In order to use QQ OAuth you must register your application at <http://connect.qq.com/>.
 *
 * Example application configuration:
 *
 * ```php
 * 'components' => [
 *     'authClientCollection' => [
 *         'class' => 'yii\authclient\Collection',
 *         'clients' => [
 *             'qq' => [
 *                 'class' => 'common\components\authclient\clients\QqAuth',
 *                 'clientId' => 'qq_client_id',
 *                 'clientSecret' => 'qq_client_secret',
 *             ],
 *         ],
 *     ]
 *     // ...
 * ]
 * ```
 *
 * @see http://connect.qq.com/
 *
 * @author Shadow <hongyukeji@126.com>
 * @since 1.0
 */
class QqAuth extends OAuth2
{
    // 授权回调地址 http://www.ebestmall.dev/auth/auth

    /**
     * @Step1：获取Authorization Code
     */
    public $authUrl = 'https://graph.qq.com/oauth2.0/authorize';

    /**
     * @Step2：通过Authorization Code获取Access Token
     */
    public $tokenUrl = 'https://graph.qq.com/oauth2.0/token';

    /**
     * {@inheritdoc}
     */
    public $apiBaseUrl = 'https://graph.qq.com';


    //public $scope = 'get_user_info';

    public function init()
    {
        parent::init();
        if ($this->scope === null) {
            $this->scope = implode(',', [
                'get_user_info',
            ]);
        }
    }

    /**
     * @return array
     * @see http://wiki.connect.qq.com/%E8%8E%B7%E5%8F%96%E7%94%A8%E6%88%B7openid_oauth2-0
     * @see http://wiki.connect.qq.com/get_user_info
     */
    protected function initUserAttributes()
    {
        $userInfo =[];

        $attributes = $this->api('oauth2.0/me', 'GET');

        // 获取用户信息
        $user = $this->api("user/get_user_info", 'GET', [
            'access_token' => $this->getAccessToken()->params['access_token'],
            'oauth_consumer_key' => $attributes['client_id'],
            'openid' => $attributes['openid'],
        ]);

        // 处理赋值 client_key openid username avatar_url
        $userInfo['client_key'] = $this->getId();
        $userInfo['source_id'] = $attributes['openid'];
        $userInfo['username'] = $user['nickname'];
        $userInfo['avatar_url'] = $user['figureurl_qq_2'];

        // 合并数组
        //$result = ArrayHelper::merge($attributes, $userInfo);

        return $userInfo;

        //return $this->api('oauth2.0/me', 'GET');
    }

    protected function sendRequest($request)
    {
        $response = $request->send();
        if (!$response->getIsOk()) {
            throw new InvalidResponseException($response, 'Request failed with code: ' . $response->getStatusCode() . ', message: ' . $response->getContent());
        }
        $this->processResult($response);
        return $response->getData();
    }

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

    /**
     * {@inheritdoc}
     */
    protected function defaultName()
    {
        return 'qq';
    }

    /**
     * {@inheritdoc}
     */
    protected function defaultTitle()
    {
        return 'QQ';
    }
}
