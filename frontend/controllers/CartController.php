<?php
/**
 * ============================================================================
 * Copyright © 2016-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/3/30 20:41
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */

namespace frontend\controllers;

use common\models\Cart;
use common\models\Product;
use frontend\models\CartList;
use Yii;
use yii\helpers\Url;
use yii\web\Session;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;


class CartController extends BaseController
{
    public function actionIndex()
    {
        $model = new CartList();
        $cart_list = $model->getCartList();
        return $this->render('index', ['model' => $cart_list]);
    }

    public function actionAdd()
    {
        if (Yii::$app->request->isPost) {
            $product_id = Yii::$app->request->post('product_id');
            $product_number = Yii::$app->request->post('product_number');
            $product_sku = Yii::$app->request->post('sku_id');

            if (Yii::$app->user->isGuest) {
                $session = Yii::$app->session;
                if (empty($session['cart'])) {
                    $session['cart'] = array();
                }
                $cart = $session['cart'];

                if (isset($cart[$product_sku])) {
                    $cart[$product_sku]['product_number'] += $product_number;
                } else {
                    $product = [
                        'store_id' => Product::find()->select(['store_id'])->where(['id' => $product_id])->scalar(),
                        'product_id' => $product_id,
                        'product_number' => $product_number,
                        'sku_id' => $product_sku,
                    ];
                    $cart[$product_sku] = $product;
                }

                $session['cart'] = $cart;

                $result = [
                    'status' => 1,
                    'msg' => '商品加入购物车成功',
                ];
                echo json_encode($result);
            } else {
                $modele = new Cart();
                $product = $modele->find()->where(['product_id' => $product_id, 'sku_id' => $product_sku])->one();

                if (!empty($product)) {
                    $product = $modele->find()->where(['product_id' => $product_id, 'sku_id' => $product_sku])->one();
                    $product->updateCounters(['product_number' => $product_number]);
                    $product->save();
                } else {
                    $modele->product_id = $product_id;
                    $modele->sku_id = $product_sku;
                    $modele->product_number = $product_number;
                    $modele->store_id = Product::find()->select(['store_id'])->where(['id' => $product_id])->scalar();
                    $modele->user_id = Yii::$app->user->getId();
                    $modele->save();
                }

                $result = [
                    'status' => 1,
                    'msg' => '商品加入购物车成功',
                ];
                echo json_encode($result);
            }
        } else {
            $result = [
                'status' => 0,
                'msg' => '商品加入购物车失败',
            ];
            echo json_encode($result);
        }
    }

    public function actionList()
    {
        $product_id = 1;
        $product_sku = 1;
        $product_number = 7;

        $modele = new Cart();

        $judge = $modele->find()->where(['product_id' => $product_id, 'sku_id' => $product_sku])->one();

        dump(!empty($judge));

        $judge->updateCounters(['product_number' => $product_number]);

        $judge->save();
        die;
        if (!Yii::$app->user->isGuest) {

            // 用户id
            $user_id = Yii::$app->user->identity->getId();
            // 取出用户购物车中所有数据
            $model = Cart::find()->joinWith(['product', 'store', 'sku'])->where(['{{%cart}}.user_id' => $user_id])->orderBy('store_id')->asArray()->all();
            //dump($model);

            foreach ($model as $cart_list) {
                dump($cart_list);
            }

        }
    }

    public function actionDeleteSelected()
    {
        if (Yii::$app->request->isPost) {
            if (Yii::$app->user->isGuest) {
                $session = Yii::$app->session;
                $model = array_values($session['cart']);
                $ids = explode(',', Yii::$app->request->post('id'));
                foreach ($ids as $key => $value) {
                    foreach ($model as $k => $v) {
                        if ($value == $v['sku_id']) {
                            unset($model[$k]);
                            $session['cart'] = !empty($model) ? $model : array();
                        }
                    }
                }
            } else {
                $ids = explode(',', Yii::$app->request->post('id'));
                foreach ($ids as $key => $value) {
                    Cart::findOne($value)->delete();
                }
            }
        }
    }

    public function actionDelete($id)
    {
        if (!Yii::$app->user->isGuest) {
            Cart::findOne($id)->delete();
        } else {
            $session = Yii::$app->session;
            $model = $session['cart'];
            foreach ($model as $k => $v) {
                if ($id == $v['sku_id']) {
                    unset($model[$k]);
                    $session['cart'] = !empty($model) ? $model : array();
                }
            }
        }
        return $this->redirect(Url::to(['cart/index']));
    }

}