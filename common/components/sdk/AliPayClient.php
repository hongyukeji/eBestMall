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
 * Author: Shadow  QQ: 1527200768  Time: 2017/12/26 18:58
 * E-mail: hongyukeji@126.com
 * ============================================================================
 */

namespace common\components\sdk;

require_once __DIR__ . "/alipay/alipay-trade-page-pay-php-utf-8/AopSdk.php";

require_once __DIR__ . "/alipay/alipay-trade-page-pay-php-utf-8/pagepay/buildermodel/AlipayTradePagePayContentBuilder.php";
require_once __DIR__ . "/alipay/alipay-trade-page-pay-php-utf-8/pagepay/service/AlipayTradeService.php";

require_once __DIR__ . "/alipay/alipay-trade-page-pay-php-utf-8/aop/AopClient.php";
require_once __DIR__ . "/alipay/alipay-trade-page-pay-php-utf-8/aop/request/AlipayTradePagePayRequest.php";

class AliPayClient
{

    public function payment()
    {
        //AlipayClient
        //$alipayClient = new DefaultAlipayClient(URL, APP_ID, APP_PRIVATE_KEY, FORMAT, CHARSET, ALIPAY_PUBLIC_KEY, SIGN_TYPE);

        //构造参数
        $aop = new \AopClient();
        $aop->gatewayUrl = '[https://openapi.alipay.com/gateway.do](https://openapi.alipay.com/gateway.do)';
        $aop->appId = '请填写APPID';
        $aop->rsaPrivateKey = '请填写商户私钥';
        $aop->apiVersion = '1.0';
        $aop->signType = 'RSA2';
        $aop->postCharset = 'utf-8';
        $aop->format = 'json';
        $request = new \AlipayTradePagePayRequest();
        $request->setReturnUrl('请填写您的页面同步跳转地址');
        $request->setNotifyUrl('请填写您的异步通知地址');
        $request->setBizContent('{"product_code":"FAST_INSTANT_TRADE_PAY","out_trade_no":"20150320010101001","subject":"Iphone6 16G","total_amount":"88.88","body":"Iphone6 16G"}');

        //请求
        $result = $aop->pageExecute($request);

        //输出
        echo $result;
    }

}