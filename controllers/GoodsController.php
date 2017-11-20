<?php

namespace app\controllers;

use app\models\Goods;
use app\models\Store;

class GoodsController extends Controller
{
    public function actionIndex($id, $sku_id = '')
    {
        // TODO: sku 待开发

        $model = new Goods();

        $goods = $model->find()
            ->where(['goods_id' => $id, 'status' => Store::STATUS_ACTIVE])
            ->with('store')
            ->asArray()
            ->one();
        //dump($goods);exit;
        return $this->render('index', [
            'goods' => $goods,
        ]);
    }

}