<?php
/**
 * eBestMall
 * ============================================================================
 * Copyright 2015-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/12/22 13:36
 * E-mail: hongyukeji@126.com
 * ============================================================================
 */

namespace app\components\authclient\clients;

use yii\authclient\OAuth2;
use yii\authclient\InvalidResponseException;
use yii\httpclient\Request;
use yii\httpclient\Response;

/**
 * WeiBo allows authentication via WeiBo OAuth.
 *
 * In order to use WeiBo OAuth you must register your application at <http://open.weibo.com/>.
 *
 * Example application configuration:
 *
 * ```php
 * 'components' => [
 *     'authClientCollection' => [
 *         'class' => 'yii\authclient\Collection',
 *         'clients' => [
 *             'weibo' => [
 *                 'class' => 'app\components\authclient\clients\WeiBoAuth',
 *                 'clientId' => 'weibo_client_id',
 *                 'clientSecret' => 'weibo_client_secret',
 *             ],
 *         ],
 *     ]
 *     // ...
 * ]
 * ```
 *
 * @see http://open.weibo.com/
 *
 * @author Shadow <hongyukeji@126.com>
 * @since 1.0
 */
class WeiBoAuth extends OAuth2
{
    public $authUrl = 'https://api.weibo.com/oauth2/authorize';

    public $tokenUrl = 'https://api.weibo.com/oauth2/access_token';

    public $apiBaseUrl = 'https://api.weibo.com';

    /**
     * @return array
     * @see http://open.weibo.com/wiki/Oauth2/get_token_info
     */
    protected function initUserAttributes()
    {
        return $this->api('oauth2/get_token_info', 'POST');
    }

    /**
     * @return array
     * @see http://open.weibo.com/wiki/2/users/show
     */
    public function getUserInfo()
    {
        return $this->api("2/users/show.json", 'GET', ['uid' => $this->getOpenid()]);
    }

    public function getOpenid()
    {
        $attributes = $this->getUserAttributes();
        return $attributes['uid'];
    }

    protected function defaultName()
    {
        return 'weibo';
    }

    protected function defaultTitle()
    {
        return 'WeiBo';
    }
}