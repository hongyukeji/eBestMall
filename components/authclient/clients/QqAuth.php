<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\components\authclient\clients;

use yii\authclient\OAuth2;
use yii\authclient\InvalidResponseException;
use yii\helpers\ArrayHelper;
use yii\httpclient\Request;
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
 *                 'class' => 'app\components\authclient\clients\QqAuth',
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


    /**
     * {@inheritdoc}
     */
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
        // 获取openid
        $attributes = $this->api('oauth2.0/me', 'GET');

        // 获取用户信息
        $userinfo = $this->api("user/get_user_info", 'GET', [
            'oauth_consumer_key' => $attributes['client_id'],   //  $this->clientId 申请QQ登录成功后，分配给应用的appid。
            'openid' => $attributes['openid'],
        ]);

        // 处理赋值 用户名 头像
        $userinfo['openid'] = $attributes['openid'];
        $userinfo['username'] = $userinfo['nickname'];
        $userinfo['avatar_url'] = $userinfo['figureurl_qq_2'];

        // 合并数组
        $result = ArrayHelper::merge($attributes,$userinfo);

        return $result;
    }

    /**
     * @return array
     * @see http://wiki.connect.qq.com/get_user_info
     */
    public function getUserInfo()
    {
        return $this->api("user/get_user_info", 'GET', [
            'oauth_consumer_key' => $this->clientId,
            'openid' => $this->getOpenid(),
        ]);
    }

    /**
     * @return string
     */
    public function getOpenid()
    {
        $attributes = $this->getUserAttributes();
        return $attributes['openid'];
    }

    /*protected function defaultName()
    {
        return 'qq';
    }

    protected function defaultTitle()
    {
        return 'QQ';
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

    /*protected function defaultViewOptions()
    {
        return [
            'popupWidth' => 860,
            'popupHeight' => 480,
        ];
    }*/
}
