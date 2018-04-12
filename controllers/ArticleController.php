<?php
/**
 * eBestMall
 * ============================================================================
 * Copyright © 2015-2018 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2018/4/12 15:06
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */

namespace app\controllers;

use app\controllers\Controller;

class ArticleController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}