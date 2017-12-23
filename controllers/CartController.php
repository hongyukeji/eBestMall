<?php

namespace app\controllers;


class CartController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAdd()
    {
        // 判断是否登录

        // 已登录-写入数据库

        // 未登录-写入cookie缓存
    }
}