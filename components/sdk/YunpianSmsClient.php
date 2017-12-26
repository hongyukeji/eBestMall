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
 * Author: Shadow  QQ: 1527200768  Time: 2017/12/21 17:01
 * E-mail: hongyukeji@126.com
 * ============================================================================
 */

namespace app\components\sdk;

header("Content-Type:text/html;charset=utf-8");

class YunpianSmsClient
{
    public static $apikey = null;

    public function __construct($apikey)
    {
        static::$apikey = $apikey;
    }

    // php DEMO https://www.yunpian.com/doc/zh_CN/introduction/demos/php.html
    // 返回码总体说明 https://www.yunpian.com/doc/zh_CN/returnValue/list.html
    // 返回值示例 https://www.yunpian.com/doc/zh_CN/returnValue/example.html
    // 常见的返回码 https://www.yunpian.com/doc/zh_CN/returnValue/common.html
    public static function sendSms($templateCode, $phoneNumbers, $templateParam)
    {
        $apikey = static::$apikey;

        $ch = curl_init();

        /* 设置验证方式 */
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept:text/plain;charset=utf-8',
            'Content-Type:application/x-www-form-urlencoded', 'charset=utf-8'));
        /* 设置返回结果为流 */
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        /* 设置超时时间*/
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);

        /* 设置通信方式 */
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        // 发送短信
        $tpl_id = $templateCode;
        $tpl_value = urlencode($templateParam);
        $data = array('tpl_id' => $tpl_id, 'tpl_value' => $tpl_value, 'apikey' => $apikey, 'mobile' => $phoneNumbers);
        $json_data = static::notify_send($ch, $data);
        $array = json_decode($json_data, true);

        curl_close($ch);

        return $array;
    }

    public static function get_user($ch, $apikey)
    {
        curl_setopt($ch, CURLOPT_URL, 'https://sms.yunpian.com/v2/user/get.json');
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('apikey' => $apikey)));
        $result = curl_exec($ch);
        $error = curl_error($ch);
        static::checkErr($result, $error);
        return $result;
    }

    public static function send($ch, $data)
    {
        curl_setopt($ch, CURLOPT_URL, 'http://sms.yunpian.com/v2/sms/single_send.json');
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        $result = curl_exec($ch);
        $error = curl_error($ch);
        static::checkErr($result, $error);
        return $result;
    }

    public static function tpl_send($ch, $data)
    {
        curl_setopt($ch, CURLOPT_URL,
            'https://sms.yunpian.com/v2/sms/tpl_single_send.json');
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        $result = curl_exec($ch);
        $error = curl_error($ch);
        static::checkErr($result, $error);
        return $result;
    }

    public static function voice_send($ch, $data)
    {
        curl_setopt($ch, CURLOPT_URL, 'http://voice.yunpian.com/v2/voice/send.json');
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        $result = curl_exec($ch);
        $error = curl_error($ch);
        static::checkErr($result, $error);
        return $result;
    }

    public static function notify_send($ch, $data)
    {
        curl_setopt($ch, CURLOPT_URL, 'https://voice.yunpian.com/v2/voice/tpl_notify.json');
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        $result = curl_exec($ch);
        $error = curl_error($ch);
        static::checkErr($result, $error);
        return $result;
    }

    public static function checkErr($result, $error)
    {
        if ($result === false) {
            echo 'Curl error: ' . $error;
        } else {
            //echo '操作完成没有任何错误';
        }
    }
}