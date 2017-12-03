<?php

namespace app\controllers;

use app\models\Category;
use Yii;
use app\models\Goods;
use app\models\Store;

class GoodsController extends Controller
{
    public function actionIndex($id, $sku_id = '')
    {
        // TODO: sku 待开发

        $goodsModel = new Goods();
        $categoryModel = new Category();

        $goods = $goodsModel->find()
            ->where(['goods_id' => $id, 'status' => Store::STATUS_ACTIVE])
            ->with('store')
            ->asArray()
            ->one();

        //$goods['nav'] = $categoryModel->getParent($goods['cate_id']);

        if ($goods) {
            return $this->render('index', [
                'goods' => $goods,
            ]);
        } else {
            return $this->redirect(Yii::$app->homeUrl);
        }
    }

}