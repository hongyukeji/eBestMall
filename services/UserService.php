<?php
/**
 * eBestMall
 * ============================================================================
 * Copyright © 2015-2018 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2018/4/12 17:57
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */

namespace app\services;

use app\services\Service;

class UserService extends Service
{
    /**
     * 获取用户信息
     *
     * @param $user_id
     * @return array 用户信息
     */
    public function getUserInfo($user_id)
    {
        $userInfo = array([
            'user_id' => $user_id,
            'username' => 'shadow',
            'email' => 'admin@hongyuvip.com',
            'mobile' => '13800138000',
        ]);
        return $userInfo;
    }
}