<?php

namespace common\components;

use Yii;
use yii\base\Component;

class Payment extends Component
{
    public $config;

    public function init()
    {
        $this->config = Yii::$app->params['payment'];
    }

    public function pay()
    {
        //统一付款调用
    }

    public function aliPay()
    {
        //支付宝支付
    }

    public function wxPay()
    {
        //微信支付
    }

}