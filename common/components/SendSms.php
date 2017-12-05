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
     * $array($signName, $templateCode, $phoneNumbers, $templateParam = null, $outId = null, $smsUpExtendCode = null)
     */
    public function aliSms($array)
    {
        $accessKeyId = $this->config['aliSms']['accessKeyId'];
        $accessKeySecret = $this->config['aliSms']['accessKeySecret'];

        $sms = new AliSms($accessKeyId, $accessKeySecret);

        $response = $sms->sendSms(
            $array['SignName'],
            $array['TemplateCode'],
            $array['PhoneNumbers'],
            $array['TemplateParam']
        );

        return $response;
    }

    public function yunPianSms($array){

    }
}