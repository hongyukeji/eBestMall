<?php

namespace app\controllers;

use app\models\GoodsCategory;
use Yii;
use app\models\Goods;
use app\models\Store;

class GoodsController extends Controller
{
    public function actionIndex($id, $sku_id = null)
    {
        $model = new Goods();
        $goods = $model->getGoodsInfoById($id);
        //dump($goods);exit();
        return $this->render('index', [
            'goods' => $goods,
        ]);

    }

    public function actionIndexOld($id, $sku_id = null)
    {
        $model = new Goods();
        if ($model->findByGoodsId($id)) {
            $goods = $model->getGoodsInfo($id, $sku_id);
            return $this->render('index', [
                'goods' => $goods,
            ]);
        } else {
            return $this->redirect(Yii::$app->homeUrl);
        }
    }
}