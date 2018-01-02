<?php

namespace frontend\controllers;

class OrderController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCreate()
    {
        // 判断是否开启匿名购物
    }
}
