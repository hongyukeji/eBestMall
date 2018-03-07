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
 * Author: Shadow  QQ: 1527200768  Time: 2018/3/7 14:07
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */

namespace App\Helpers;


class FunctionsHelper
{
    /**
     * 生成唯一订单号
     *
     * @return string
     */
    public static function generate_order_number()
    {
        mt_srand((double)microtime() * 1000000);

        return date('Ymd') . str_pad(mt_rand(1, 99999999), 8, '0', STR_PAD_LEFT);
    }

    /**
     * 检测手机号
     *
     * @param $phone_number
     * @return bool
     */
    public static function check_phone_umber($phone_number)
    {
        $regular_expression = '/1\d{10}$/';

        if (preg_match($regular_expression, $phone_number)) {
            return true;
        } else {
            return false;
        }
    }
}