<?php
/**
 * eBestMall - 短信组件
 * ============================================================================
 * Copyright 2015-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/12/5 19:57
 * E-mail: hongyukeji@126.com
 * ============================================================================
 */

namespace app\components;

use Yii;
use yii\base\Component;
use app\components\sdk\AliSmsClient;
use app\components\sdk\YunpianSmsClient;

class SendSms extends Component
{
    public $config;
    public $clientName;

    public function init()
    {
        $this->config = Yii::$app->params['sms'];
    }

    /**
     * @param $templateCode
     * @param $phoneNumbers
     * @param null $templateParam
     */
    public function send($templateCode, $phoneNumbers, $templateParam = null)
    {
        $clientName = $this->config['default'];

        $response = $this->$clientName($templateCode, $phoneNumbers, $templateParam);

        dump($response);exit;

    }

    /**
     * @param $templateCode
     * @param $phoneNumbers
     * @param $templateParam
     * @return bool|\stdClass
     * $array($signName, $templateCode, $phoneNumbers, $templateParam = null, $outId = null, $smsUpExtendCode = null)
     */
    public function aliSms($templateCode, $phoneNumbers, $templateParam)
    {
        $accessKeyId = $this->config['aliSms']['accessKeyId'];
        $accessKeySecret = $this->config['aliSms']['accessKeySecret'];
        $signName = $this->config['aliSms']['signName'];

        $smsObj = new AliSmsClient($accessKeyId, $accessKeySecret, $signName);

        $response = $smsObj->sendSms(
            $templateCode,
            $phoneNumbers,
            $templateParam
        );

        return $response;
    }

    public function yunpianSms($templateCode, $phoneNumbers, $templateParam)
    {
        $apikey = $this->config['yunpianSms']['apikey'];

        $smsObjs = new YunpianSmsClient($apikey);

        $response = $smsObjs->sendSms($templateCode, $phoneNumbers, $this->arraySwitchString($templateParam));

        return $response;
    }

    /**
     * 将数组中的键和值都转换为指定格式的字符串
     * array('0'=>'a', '1'=>'b', '2'=>'c', '3'=>'d') 转换为 0=a&1=b&2=c&3=d
     * @param $array
     * @param string $join
     * @param string $separate
     * @return string
     */
    public function arraySwitchString($array, $join = '=', $separate = '&')
    {
        $string = [];

        if ($array && is_array($array)) {
            foreach ($array as $key => $value) {
                $string[] = $key . $join . $value;
            }
        } else {
            return null;
        }

        return implode($separate, $string);
    }
}