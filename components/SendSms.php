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
     * @return mixed
     * 返回格式: ['code'=>'...','msg'=>'...']
     * code返回码说明: 0-发送成功, 1.发送失败
     * $result = Yii::$app->sms->send('verificationCode','13800138000',['code'=>'123456','product'=>'name']);
     * if ($result['code'] == '0'){ echo '发送成功'; }else{ echo '发送失败'; }
     */
    public function send($templateCode, $phoneNumbers, $templateParam = null)
    {
        $smsClientName = $this->config['default'];

        $result = $this->$smsClientName($this->config[$smsClientName]['templateCode'][$templateCode], $phoneNumbers, $templateParam);

        return $result;
    }


    /**
     * @param $templateCode
     * @param $phoneNumbers
     * @param $templateParam
     * @return array|bool|\stdClass
     * $array($signName, $templateCode, $phoneNumbers, $templateParam = null, $outId = null, $smsUpExtendCode = null)
     * @see https://help.aliyun.com/document_detail/55451.html?spm=5176.10629532.106.2.34c5607cLZSQLF
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

        if (!empty($response->Code) == 'OK') {
            $messages = [
                'code' => '0',
                'msg' => '发送成功',
            ];
            return $messages;
        } else {
            $messages = [
                'code' => '1',
                'msg' => json_encode($response),
            ];
            return $messages;
        }
    }

    /**
     * @param $templateCode
     * @param $phoneNumbers
     * @param $templateParam
     * @return mixed
     * @see https://www.yunpian.com/doc/zh_CN/returnValue/example.html
     */
    public function yunpianSms($templateCode, $phoneNumbers, $templateParam)
    {
        $apikey = $this->config['yunpianSms']['apikey'];

        // 是否批量发送
        $batchSend = false;

        if ($phoneNumbers && is_array($phoneNumbers)) {
            $phoneNumbers = $this->yunPianSwitchMobile($phoneNumbers);
            $batchSend = true;
        }

        $smsObj = new YunpianSmsClient($apikey, $batchSend);

        $response = $smsObj->sendSms($templateCode, $phoneNumbers, $this->yunPianSwitchTplValue($templateParam));

        if (!empty($response['code']) == '0' || !empty($response['total_count']) > 0) {
            $messages = [
                'code' => '0',
                'msg' => '发送成功',
            ];
            return $messages;
        } else {
            $messages = [
                'code' => '1',
                'msg' => json_encode($response, JSON_UNESCAPED_UNICODE),
            ];
            return $messages;
        }
    }

    /**
     * 云片短信处理手机号
     * @param $array
     * @return null|string
     */
    public function yunPianSwitchMobile($array)
    {
        $string = [];

        if ($array && is_array($array)) {
            foreach ($array as $key => $value) {
                $string[] = $value;
            }
        } else {
            return null;
        }

        return implode(',', $string);
    }


    /**
     * 云片短信处理模板值
     * @param $array
     * @return null|string
     */
    public function yunPianSwitchTplValue($array)
    {
        $string = [];

        if ($array && is_array($array)) {
            foreach ($array as $key => $value) {
                $string[] = '#' . $key . '#=' . $value;
            }
        } else {
            return null;
        }

        return implode('&', $string);
    }
}