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
 * Author: Shadow  QQ: 1527200768  Time: 2017/12/6 15:40
 * E-mail: hongyukeji@126.com
 * ============================================================================
 */

namespace app\modules\api\controllers;

use yii\rest\ActiveController;
use yii\web\Response;

class DemoController extends ActiveController
{
    public $modelClass = 'app\models\Demo';

    /*public function behaviors()
    {
        // 定义返回格式是：JSON
        $behaviors['contentNegotiator']['formats']['text/html'] = Response::FORMAT_JSON;
        return $behaviors;
    }*/
}