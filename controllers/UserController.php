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
 * Author: Shadow  QQ: 1527200768 & 13391528  Time: 2017/11/22 15:56
 * E-mail: hongyukeji@126.com
 * ============================================================================
 */

namespace app\controllers;

use app\models\User;

class UserController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionHome($id = 1)
    {
        $user = User::findOne($id);
        return $this->render('home',[
            'user' => $user,
        ]);
    }
}