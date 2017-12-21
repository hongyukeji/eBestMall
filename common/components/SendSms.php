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

namespace app\common\components;

use Yii;
use yii\base\Component;
use app\common\components\lib\AliSms;
use app\common\components\lib\YunpianSms;

class SendSms extends Component
{
    public $config;
    public $aliConfig;
    public $yunpianConfig;

    public function init()
    {
        $this->config = Yii::$app->params['sms'];
        $this->aliConfig = Yii::$app->params['sms']['aliSms'];
        $this->yunpianConfig = Yii::$app->params['sms']['yunpianSms'];
    }

    /**
     * @param $array
     * @return lib\stdClass
     * Yii::$app->sendSms->aliSms($array)
     * $array($signName, $templateCode, $phoneNumbers, $templateParam = null, $outId = null, $smsUpExtendCode = null)
     */
    public function aliSms($array)
    {
        $accessKeyId = $this->aliConfig['accessKeyId'];
        $accessKeySecret = $this->aliConfig['accessKeySecret'];
        $signName = $this->aliConfig['signName'];

        $smsObj = new AliSms($accessKeyId, $accessKeySecret, $signName);

        $response = $smsObj->sendSms(
            $array['templateCode'],
            $array['phoneNumbers'],
            $array['templateParam']
        );

        return $response;
    }

    /**
     * @param $array
     * @return lib\stdClass
     * Yii::$app->sendSms->aliSmsQuery($array)
     * $array($phoneNumbers, $sendDate, $pageSize = 10, $currentPage = 1, $bizId = null)
     */
    public function aliSmsQuery($array)
    {
        $accessKeyId = $this->aliConfig['accessKeyId'];
        $accessKeySecret = $this->aliConfig['accessKeySecret'];
        $signName = $this->aliConfig['signName'];

        $smsObj = new AliSms($accessKeyId, $accessKeySecret, $signName);

        $response = $smsObj->querySendDetails(
            $array['phoneNumbers'],
            $array['sendDate']
        );

        return $response;
    }

    public function yunianSms($array)
    {
        $apikey = $this->yunpianConfig['apikey'];

        //$signName = '【' . $this->yunpianConfig['signName'] . '】';
        $signName = sprintf('【%s】', $this->yunpianConfig['signName']);

        $smsObjs = new YunpianSms($apikey);

        $response = $smsObjs->sendSms($array['mobile'], $signName . $array['text']);

        return $response;
    }

}