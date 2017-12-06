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

class SendSms extends Component
{
    public $config;

    public function init()
    {
        $this->config = Yii::$app->params['sms'];
    }

    /**
     * @param $array
     * @return lib\stdClass
     * Yii::$app->sendSms->aliSms($array)
     * $array($signName, $templateCode, $phoneNumbers, $templateParam = null, $outId = null, $smsUpExtendCode = null)
     */
    public function aliSms($array)
    {
        $accessKeyId = $this->config['aliSms']['accessKeyId'];
        $accessKeySecret = $this->config['aliSms']['accessKeySecret'];

        $smsObj = new AliSms($accessKeyId, $accessKeySecret);

        $response = $smsObj->sendSms(
            $array['signName'],
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
        $accessKeyId = $this->config['aliSms']['accessKeyId'];
        $accessKeySecret = $this->config['aliSms']['accessKeySecret'];

        $smsObj = new AliSms($accessKeyId, $accessKeySecret);

        $response = $smsObj->querySendDetails(
            $array['phoneNumbers'],
            $array['sendDate']
        );

        return $response;
    }
}