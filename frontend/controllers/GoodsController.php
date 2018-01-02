<?php

namespace frontend\controllers;

use common\models\GoodsModel;
use Yii;

class GoodsController extends Controller
{
    public function actionIndex($id, $sku_id = null)
    {
        $model = new GoodsModel();
        $goods = $model->getGoodsInfoById($id);
        //dump($goods);exit();
        return $this->render('index', [
            'goods' => $goods,
        ]);

    }

    public function actionIndexOld($id, $sku_id = null)
    {
        $model = new GoodsModel();
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