<?php
/**
 * HongYuKeJi
 * ============================================================================
 * Copyright © 2016-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/7/18 20:58
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */


namespace frontend\controllers;

use common\models\ProductSku;
use Yii;
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
    public function actionIndex($id, $sku = null)
    {
        $model = new Product();
        $product = $model->find()->joinWith(['cat', 'store', 'skus', 'attributeFiltrate'])->where(['id' => $id, 'status' => 1])->asArray()->one();
        $product['on_sku'] = empty($sku) ? $product['sku_id_default'] : $sku;
        $product['sku'] = ProductSku::findOne($product['on_sku']);


        //dump($product['attributeFiltrate']['attribute']);

        $arr = [
            'id' => '',
            'attribute_id' => '',
            'attribute_name' => '',
            'attribute_value' => '',
        ];

        return $this->render('index', [
            'model' => $product,
        ]);
    }

    public function actionView()
    {
        return $this->render('view');
    }

    public function actionQuery()
    {
        if (Yii::$app->request->isPost) {
            $model = new ProductSku();
            $result = $model->find()->select(['sku_id'])->where(['product_id' => Yii::$app->request->post('id'), 'attribute' => Yii::$app->request->post('sku')])->scalar();
            if ($result) {
                if ($result == Yii::$app->request->post('on_sku')) {
                    return 0;
                } else {
                    return $result;
                }
            }
        }
    }

    public function actionTest()
    {
        $cats = [
            ['classid' => 1, 'bclassid' => 0, 'classname' => 'classid_1', 'islast' => 0],
            ['classid' => 2, 'bclassid' => 0, 'classname' => 'classid_2', 'islast' => 0],
            ['classid' => 3, 'bclassid' => 1, 'classname' => 'classid_3', 'islast' => 0],
            ['classid' => 4, 'bclassid' => 6, 'classname' => 'classid_4', 'islast' => 1],
            ['classid' => 5, 'bclassid' => 1, 'classname' => 'classid_5', 'islast' => 1],
            ['classid' => 6, 'bclassid' => 2, 'classname' => 'classid_6', 'islast' => 0],
        ];

        /*
        需求：最终呈现

        ---|classid_1
        ---|---|classid_3
        ---|---|---|classid_4
        ---|---|classid5
        ---|classid_2
        ---|---|classid_6


        */


        function getCatTree($cats, $bclassid = 0, $nu = 0)
        {
            $bx = '---|';
            $nu++;
            foreach ($cats as $cat) {
                $catid = $cat['classid'];
                $catname = $cat['classname'];
                $catbid = $cat['bclassid'];
                $islast = $cat['islast'];
                if ($catbid == $bclassid) {
                    echo str_repeat($bx, $nu) . $catname . ($islast ? '_last' : '') . '<br />' . PHP_EOL;
                    getCatTree($cats, $catid, $nu ) ;
                }
            }
        }

        getCatTree($cats);
    }
}