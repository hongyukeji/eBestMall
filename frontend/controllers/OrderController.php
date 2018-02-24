<?php

namespace frontend\controllers;

use Yii;

class OrderController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCreate()
    {
        // 判断是否开启匿名购物
        $anonymity = null;  // 0-关闭/1-开启

        if ($anonymity) {
            // 开启匿名购物

            // 执行创建订单操作

            return print_r('匿名购物');
        } else {
            // 关闭匿名购物

            // 未开启匿名购物,则判断用户是否登录
            if (Yii::$app->user->isGuest) {
                // 未登录
                return $this->redirect(['/auth/login']);
            } else {
                // 已登录

                // 执行创建订单操作

                return true;
            }
        }
    }

    // 订单支付处理
    public function actionPayment()
    {
        //
    }
}
