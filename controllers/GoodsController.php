<?php

namespace app\controllers;

use app\models\Category;
use Yii;
use app\models\Goods;
use app\models\Store;

class GoodsController extends Controller
{
    protected $except = ['index'];

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
        $goods['nav'] = [
            '0' => [
                'cate_id' => '1',
                'cate_name' => '手机',
                'parent_id' => '0',
            ],
            '1' => [
                'cate_id' => '17',
                'cate_name' => '手机通讯',
                'parent_id' => '1',
            ],
            '2' => [
                'cate_id' => '164',
                'cate_name' => '手机',
                'parent_id' => '17',
            ],
        ];
        if ($goods) {
            return $this->render('index', [
                'goods' => $goods,
            ]);
        } else {
            return $this->redirect(Yii::$app->homeUrl);
        }
    }

}