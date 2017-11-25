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
 * Author: Shadow  QQ: 1527200768 & 13391528  Time: 2017/11/24 12:46
 * E-mail: hongyukeji@126.com
 * ============================================================================
 */

namespace app\controllers;

use Yii;
use app\models\Goods;

class SearchController extends Controller
{
    public function actionIndex()
    {
        $str = Yii::$app->request->get('keyword');
        $keys = explode(" ", $str);
        $model = new Goods();
        $goodsList = array();
        foreach ($keys as $key) {
            $goods = $model->find()
                ->where("status=:status and (goods_name like :keyword or `goods_brief` like :keyword )")
                ->addParams([':status' => Goods::STATUS_ACTIVE, ':keyword' => '%' . $key . '%'])
                ->orderBy('sort_order DESC')
                ->asArray()
                ->all();
            $goodsList = array_merge_recursive($goodsList,$goods);
        }
        return $this->render('index',[
            'goodsKey' => $str,
            'goodsList' => $goodsList,
        ]);
    }
}