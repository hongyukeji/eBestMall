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
 * Author: Shadow  QQ: 1527200768  Time: 2018/3/7 15:13
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */

namespace App\Helpers;


class SendSms
{
    public static function send($templateCode, $phoneNumbers, $templateParam = null)
    {
        $config = [
            'defaultSms' => '',    // 默认短信
            'debug' => 'false',   // 调试模式
            'aliSms' => [
                'accessKeyId' => '',
                'accessKeySecret' => '',
                'signName' => '',
                'templateCode' => [
                    'verificationCode' => '',
                ],
            ],
            'yunpianSms' => [
                'apikey' => '',
                'signName' => '',
                'templateCode' => [
                    'verificationCode' => '',
                ],
            ],
        ];

        $smsObj = new \HongYuKeJi\Components\Sms\SendSms($config);

        $result = $smsObj->send($templateCode,$phoneNumbers,$templateParam);

        if ($result['code'] == '0') {
            return '发送成功';
        } else {
            return '发送失败: ' . $result['message'];
        }
    }
}