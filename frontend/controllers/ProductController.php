<?php
/**
 * eBestMall
 * ============================================================================
 * Copyright © 2016-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/7/7 16:20
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */


namespace frontend\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use common\models\Product;


class ProductController extends BaseController
{
    /**
     * 商品详情页
     * @param string $id
     * @param string $sku_id
     * @return mixed
     * 名称/简介/详细介绍
     * 价格/市场价格
     * 累计评价条数/累计销量
     * 图片/属性/评价内容
     * 商家信息: 店铺名称/联系方式/地址/评分
     */
    public function actionIndex($id, $sku_id = null)
    {
        //$model = new Product();
        //$product = $model->findOne($id);
        $model = Product::findOne($id);

        $product = $model->find()->joinWith(['cat','sku','store'])->asArray()->one();
        dump($product);die;
        return $this->render('index', [
            'model' => $product,
        ]);
    }
}