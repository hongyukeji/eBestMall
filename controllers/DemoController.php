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
 * Author: Shadow  QQ: 1527200768 & 13391528  Time: 2017/11/19 15:38
 * E-mail: hongyukeji@126.com
 * ============================================================================
 */

namespace app\controllers;

use app\models\Category;

class DemoController extends Controller
{
    public function actionIndex()
    {
        $model = new Category();
        $categories = $model->getOptions();
        $list = array_merge([0 => '顶级分类'], $categories);
        dump($list);
    }

    public function actionCategory()
    {
        //$category = Category::findOne(1)->childCategory()->all();
        $categories = Category::find()
            ->where([
                'parent_id' => Category::STATUS_DELETED,
                'is_show' => Category::STATUS_ACTIVE,
                'status' => Category::STATUS_ACTIVE,
            ])
            ->orderBy('sort_order DESC')
            ->all();
        dump($categories);
    }
}