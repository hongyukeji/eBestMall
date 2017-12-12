<?php

namespace app\controllers;

use app\models\Category;
use Yii;
use app\models\Goods;
use app\models\Store;

class GoodsController extends Controller
{
    public function actionIndex($id, $sku_id = 0)
    {
        $model = new Goods();
        $goods = $model->getGoodsInfo($id, $sku_id);
        //dump($goods);exit;
        return $this->render('index', [
            'goods' => $goods,
        ]);
    }
}