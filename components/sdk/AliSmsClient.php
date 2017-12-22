<?php

namespace app\components\sdk;

ini_set("display_errors", "on");
set_time_limit(0); // 防止脚本超时，仅用于测试使用，生产环境请按实际情况设置
header("Content-Type: text/plain; charset=utf-8"); // 输出为utf-8的文本格式，仅用于测试

require_once  __DIR__ . "/aliyun-dysms-php-sdk-lite/SignatureHelper.php";

use Aliyun\DySDKLite\SignatureHelper;

/**
 * Class SmsDemo
 *
 * Created on 17/10/17.
 * 短信服务API产品的DEMO程序,工程中包含了一个SmsDemo类，直接通过
 * 执行此文件即可体验语音服务产品API功能(只需要将AK替换成开通了云通信-短信服务产品功能的AK即可)
 * 备注:Demo工程编码采用UTF-8
 */
class AliSmsClient
{
    static $acsClient = null;
    static $accessKeyId = null;
    static $accessKeySecret = null;
    static $signName = null;

    public function __construct($accessKeyId, $accessKeySecret, $signName)
    {
        static::$accessKeyId = $accessKeyId;
        static::$accessKeySecret = $accessKeySecret;
        static::$signName = $signName;
    }

    /**
     * @param $templateCode
     * @param $phoneNumbers
     * @param null $templateParam
     * @param null $outId
     * @param null $smsUpExtendCode
     * @return bool|\stdClass
     */
    public static function sendSms($templateCode, $phoneNumbers, $templateParam = null, $outId = null, $smsUpExtendCode = null)
    {

        $params = array();

        // *** 需用户填写部分 ***

        // fixme 必填: 请参阅 https://ak-console.aliyun.com/ 取得您的AK信息
        $accessKeyId = static::$accessKeyId;
        $accessKeySecret = static::$accessKeySecret;

        // fixme 必填: 短信接收号码
        $params["PhoneNumbers"] = $phoneNumbers;

        // fixme 必填: 短信签名，应严格按"签名名称"填写，请参考: https://dysms.console.aliyun.com/dysms.htm#/develop/sign
        $params["SignName"] = static::$signName;

        // fixme 必填: 短信模板Code，应严格按"模板CODE"填写, 请参考: https://dysms.console.aliyun.com/dysms.htm#/develop/template
        $params["TemplateCode"] = $templateCode;

        // fixme 可选: 设置模板参数, 假如模板中存在变量需要替换则为必填项
        $params['TemplateParam'] = $templateParam;

        // fixme 可选: 设置发送短信流水号
        $params['OutId'] = $outId;

        // fixme 可选: 上行短信扩展码, 扩展码字段控制在7位或以下，无特殊需求用户请忽略此字段
        $params['SmsUpExtendCode'] = $smsUpExtendCode;


        // *** 需用户填写部分结束, 以下代码若无必要无需更改 ***
        if (!empty($params["TemplateParam"]) && is_array($params["TemplateParam"])) {
            $params["TemplateParam"] = json_encode($params["TemplateParam"], JSON_UNESCAPED_UNICODE);
        }

        // 初始化SignatureHelper实例用于设置参数，签名以及发送请求
        $helper = new SignatureHelper();

        // 此处可能会抛出异常，注意catch
        $content = $helper->request(
            $accessKeyId,
            $accessKeySecret,
            "dysmsapi.aliyuncs.com",
            array_merge($params, array(
                "RegionId" => "cn-hangzhou",
                "Action" => "SendSms",
                "Version" => "2017-05-25",
            ))
        );

        return $content;
    }
}