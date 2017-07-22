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
            if (Yii::$app->user->isGuest) {
                $session = Yii::$app->session;
                if (empty($session['cart'])) {
                    $session['cart'] = [];
                }
                $cart = $session['cart'];
                $product = array(
                    'cart_id' => count($cart) + 1,
                    'store_id' => Product::find()->select(['store_id'])->where(['id' => Yii::$app->request->post('product_id')])->scalar(),
                    'product_id' => Yii::$app->request->post('product_id'),
                    'product_number' => Yii::$app->request->post('product_number'),
                    'sku_id' => Yii::$app->request->post('sku_id'),
                );
                array_push($cart, $product);
                $session['cart'] = $cart;
            } else {
                $modele = new Cart();
                $modele->product_id = Yii::$app->request->post('product_id');
                $modele->sku_id = Yii::$app->request->post('sku_id');
                $modele->product_number = Yii::$app->request->post('product_number');
                $modele->store_id = Product::find()->select(['store_id'])->where(['id' => Yii::$app->request->post('product_id')])->scalar();
                $modele->user_id = Yii::$app->user->getId();
                $modele->save();
            }
        }
    }

    public function actionList()
    {
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
                $model = $session['cart'];
                $ids = explode(',', Yii::$app->request->post('id'));
                foreach ($ids as $key => $value) {
                    for ($i = 0; $i < count($model); $i++) {
                        if (count($model) == 1) {
                            $session['cart'] = [];
                            die;
                        }
                        if ($i == $value) {
                            array_splice($model, $value, 1);
                            $session['cart'] = !empty($model) ? $model : [];
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
            //var_dump(count($model) == 1);
            for ($i = 0; $i < count($model); $i++) {
                if (count($model) == 1) {
                    $session['cart'] = [];
                }
                if ($i == $id) {
                    array_splice($model, $id, 1);
                    $session['cart'] = $model;
                }
            }
        }
        return $this->redirect(Url::to(['cart/index']));
    }

}