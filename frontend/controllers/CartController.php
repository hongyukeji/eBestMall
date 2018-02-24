<?php

namespace frontend\controllers;


class CartController extends Controller
{
    // 判断是否登录

    // 已登录-操作数据库

    // 未登录-操作cookie缓存

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAdd()
    {
        // user_id shop_id goods_id goods_sku goods_price goods_number
    }
}