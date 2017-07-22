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
            $model = Cart::find()->joinWith(['product','store','sku'])->where(['{{%cart}}.user_id' => $user_id])->orderBy('store_id')->asArray()->all();
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
                        }
                        if ($i == $value) {
                            array_splice($model, $value, 1);
                            $session['cart'] = $model;
                        }
                    }
                }

                //本地清除
            } else {
                $ids = explode(',', Yii::$app->request->post('id'));
                foreach ($ids as $key => $value) {
                    Cart::findOne($value)->delete();
                }
            }
        }
    }

    public function actionAdd_old()
    {
        // 判断用户是否登录
        if (!\Yii::$app->user->isGuest) {
            // 已登录 - 写入cart 购物车表
            $user_id = Yii::$app->user->getId();

            if (Yii::$app->request->isAjax) {
                $goods_id = Yii::$app->request->post('goods_id');
                $goods_num = Yii::$app->request->post('goods_num');
                $model = Goods::findOne($goods_id);
                $price = $model->goodsIsSale ? $model->goodsSalePrice : $model->goodsPrice;

                $data['Cart'] = [
                    'goodsId' => $goods_id,
                    'goodsNumber' => $goods_num,
                    'goodsPrice' => $price,
                    'userId' => $user_id,
                ];
                if (!$model = Cart::find()->where('goodsId = :goodsId and userId = :userId', [':goodsId' => $goods_id, ':userId' => $user_id])->one()) {
                    $model = new Cart;
                } else {
                    $data['Cart']['goodsNumber'] = $model->goodsNumber + $goods_num;
                }

                $data['Cart']['createdTime'] = time();
                $model->load($data);
                $model->save();

                return json_encode(['status' => true]);
            }

            /*
            if (Yii::$app->request->isPost) {
                $post = Yii::$app->request->post();
                $goods_num = Yii::$app->request->post()['goods_num'];
                $data['Cart'] = $post;
                $data['Cart']['userId'] = $user_id;
            }
            */

            if (Yii::$app->request->isGet) {
                $goods_id = Yii::$app->request->get("id");
                $goods_num = 1;
                $model = Goods::findOne($goods_id);
                $price = $model->goodsIsSale ? $model->goodsSalePrice : $model->goodsPrice;
                $data['Cart'] = [
                    'goodsId' => $goods_id,
                    'goodsNumber' => $goods_num,
                    'goodsPrice' => $price,
                    'userId' => $user_id,
                ];
            }

            if (!$model = Cart::find()->where('goodsId = :goodsId and userId = :userId', [':goodsId' => $goods_id, ':userId' => $user_id])->one()) {
                $model = new Cart;
            } else {
                $data['Cart']['goodsNumber'] = $model->goodsNumber + $goods_num;
            }

            $data['Cart']['createdTime'] = time();
            $model->load($data);
            $model->save();

            // 跳转至购物车列表
            return $this->redirect(Url::to(['cart/list']));
        } else {
            // 未登录 - 写入session缓存
            return $this->redirect(['site/login']);
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

    public function actionListData()
    {
        $items = array(
            'status' => '1',
            'result' =>
                array(
                    'storeList' =>
                        array(
                            0 =>
                                array(
                                    'storeName' => '网站自营',
                                    'isProprietary' => '1',
                                    'goodsList' =>
                                        array(
                                            0 =>
                                                array(
                                                    'cartId' => '1',
                                                    'goodsId' => '2017061888888888',
                                                    'goodsName' => '苹果 Apple iPhone7 4G手机 黑色 移动联通版(32G)',
                                                    'goodsPrice' => '6999.00',
                                                    'goodsNumber' => '1',
                                                    'goodsImage' => 'img/temp/temp-goods_002.jpg',
                                                    'attributes' =>
                                                        array(
                                                            0 =>
                                                                array(
                                                                    'attributeId' => '10001',
                                                                    'attributeName' => '颜色',
                                                                    'attributeValue' => '黑色',
                                                                ),
                                                            1 =>
                                                                array(
                                                                    'attributeId' => '10001',
                                                                    'attributeName' => '型号',
                                                                    'attributeValue' => '移动联通版(32G)',
                                                                ),
                                                        ),
                                                ),
                                            1 =>
                                                array(
                                                    'cartId' => '2',
                                                    'goodsId' => '2017061888888889',
                                                    'goodsName' => '苹果 Apple iPhone8 4G手机 黑色',
                                                    'goodsPrice' => '88.88',
                                                    'goodsNumber' => '1',
                                                    'goodsImage' => 'img/temp/temp-goods_002.jpg',
                                                    'attributes' =>
                                                        array(
                                                            0 =>
                                                                array(
                                                                    'attributeId' => '10001',
                                                                    'attributeName' => '颜色',
                                                                    'attributeValue' => '黑色',
                                                                ),
                                                            1 =>
                                                                array(
                                                                    'attributeId' => '10001',
                                                                    'attributeName' => '型号',
                                                                    'attributeValue' => '移动联通版(32G)',
                                                                ),
                                                        ),
                                                ),
                                        ),
                                ),
                            1 =>
                                array(
                                    'storeName' => '第三方商家',
                                    'isProprietary' => '0',
                                    'goodsList' =>
                                        array(
                                            0 =>
                                                array(
                                                    'cartId' => '3',
                                                    'goodsId' => '2017061888888899',
                                                    'goodsName' => '第三方商家-苹果 Apple iPhone7 4G手机 黑色 移动联通版(32G)',
                                                    'goodsPrice' => '6999.00',
                                                    'goodsNumber' => '1',
                                                    'goodsChecked' => 'true',
                                                    'goodsImage' => 'img/temp/temp-goods_002.jpg',
                                                    'attributes' =>
                                                        array(
                                                            0 =>
                                                                array(
                                                                    'attributeId' => '10001',
                                                                    'attributeName' => '颜色',
                                                                    'attributeValue' => '黑色',
                                                                ),
                                                            1 =>
                                                                array(
                                                                    'attributeId' => '10001',
                                                                    'attributeName' => '型号',
                                                                    'attributeValue' => '移动联通版(32G)',
                                                                ),
                                                        ),
                                                ),
                                            1 =>
                                                array(
                                                    'cartId' => '4',
                                                    'goodsId' => '2017061888888898',
                                                    'goodsName' => '第三方商家-苹果 Apple iPhone8 4G手机 黑色',
                                                    'goodsPrice' => '88.88',
                                                    'goodsNumber' => '1',
                                                    'goodsImage' => 'img/temp/temp-goods_002.jpg',
                                                    'attributes' =>
                                                        array(
                                                            0 =>
                                                                array(
                                                                    'attributeId' => '10001',
                                                                    'attributeName' => '颜色',
                                                                    'attributeValue' => '黑色',
                                                                ),
                                                            1 =>
                                                                array(
                                                                    'attributeId' => '10001',
                                                                    'attributeName' => '型号',
                                                                    'attributeValue' => '移动联通版(32G)',
                                                                ),
                                                        ),
                                                ),
                                        ),
                                ),
                        ),
                ),
        );
        //return \yii\helpers\Json::encode($items);
        return json_encode($items);
    }

    public function actionSetCartDataDemo()
    {
        //cart/set-cart-data-demo
        $session = Yii::$app->session;
        $session->remove('cart');

        if (empty($session['cart'])) {
            $cart = array(
                0 => array(
                    'cart_id' => '0',
                    'store_id' => '1',
                    'product_id' => '1',
                    'product_number' => '1',
                    'sku_id' => '1',
                ),
                1 => array(
                    'cart_id' => '1',
                    'store_id' => '2',
                    'product_id' => '2',
                    'product_number' => '1',
                    'sku_id' => '1',
                ),
            );
            $session['cart'] = $cart;
        }
    }
}