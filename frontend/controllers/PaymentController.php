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
 * Author: Shadow  QQ: 1527200768  Time: 2017/12/26 19:23
 * E-mail: hongyukeji@126.com
 * ============================================================================
 */

namespace frontend\controllers;

use Yii;

class PaymentController extends Controller
{
    // 关闭CSRF验证
    public $enableCsrfValidation = false;

    // 支付宝同步处理
    public function actionAliPay()
    {
        //
    }

    // 支付宝异步处理
    public function actionAliPayNotify()
    {
        //
    }

}