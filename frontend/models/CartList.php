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
 * Author: Shadow  QQ: 1527200768  Time: 2017/7/3 21:06
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */


namespace frontend\models;

use common\models\ProductAttribute;
use common\models\ProductAttributeExtends;
use Yii;
use yii\base\Model;
use common\models\Attribute;
use common\models\AttributeExtend;
use common\models\Cart;
use common\models\Product;
use common\models\ProductSku;
use common\models\Store;

class CartList extends Model
{
    /**
     * 购物车列表获取
     * @return array 购物车数据
     */
    public function getCartList()
    {
        $session = Yii::$app->session;

        //添加session购物车演示数据
        //$this->setCartDataDemo();
        //$session->remove('cart');

        if (!Yii::$app->user->isGuest) {
            if (!empty($session['cart'])) {
                foreach ($session['cart'] as $k => $v) {
                    $model = new Cart();
                    $model->user_id = Yii::$app->user->getId();
                    $model->store_id = $v['store_id'];
                    $model->product_id = $v['product_id'];
                    $model->product_number = $v['product_number'];
                    $model->sku_id = $v['sku_id'];
                    $model->save();
                }
                $session->remove('cart');
            };

            //会员-购物车数据
            $goods_list = $this->getStoreList(1);
        } else {
            //游客-购物车数据
            $goods_list = $this->getStoreList(0, $session['cart']);
        }
        return $goods_list;
    }


    /**
     * 获取购物车商品列表
     * @param int $status 0-游客,1-会员
     * @param array $cart_list 购物车中所有商品数据
     * @return array 购物车商品格式化数据
     */
    public function getStoreList($status, $cart_list = [])
    {
        $cart = [];
        if ($status == 1 && !Yii::$app->user->isGuest) {
            $model = new Cart();
            //获取购物车中店铺列表
            $store = array_unique(array_map(function ($record) {
                return $record->store_id;
            }, $model->find()->select(['store_id'])->where(['user_id' => Yii::$app->user->getId()])->all()));
            //获取购物车中每个店铺下所有商品数据
            if (!empty($store)) {
                $model = new Cart();
                $store = array_values($store);
                for ($i = 0; $i < count($store); $i++) {
                    $store_list[$store[$i]] = $model->find()->where(['user_id' => Yii::$app->user->identity->getId(), 'store_id' => $store[$i]])->asArray()->all();
                }
            }
            //整理购物车格式
            if (!empty($store_list)) {
                foreach ($store_list as $k => $v) {
                    $product_list = array(
                        'storeName' => Store::find()->select(['name'])->where(['id' => $k])->scalar(),
                        'isProprietary' => Store::find()->select(['is_proprietary'])->where(['id' => $k])->scalar(),
                        'goodsList' => [],
                    );
                    foreach ($v as $product_key => $product_value) {
                        $product = array(
                            'cartId' => $product_value['id'],
                            'goodsId' => $product_value['product_id'],
                            'skuId' => $product_value['sku_id'],
                            'goodsName' => Product::find()->select(['name'])->where(['id' => $product_value['product_id']])->scalar(),
                            'goodsImage' => Product::find()->select(['spu_cover'])->where(['id' => $product_value['product_id']])->scalar(),
                            'goodsPrice' => ProductSku::find()->select(['price'])->where(['id' => $product_value['sku_id']])->scalar(),
                            'goodsNumber' => $product_value['product_number'],
                            'attributes' => [],
                        );
                        $attribute = json_decode(ProductSku::find()->select(['sku_attribute'])->where(['id' => $product_value['sku_id']])->scalar());
                        if(!empty($attribute)){
                            foreach ($attribute as $attribute_key => $attribute_value) {
                                $attributes = array(
                                    'attributeName' => ProductAttribute::find()->select(['name'])->where(['id' => ProductAttributeExtends::find()->select(['product_attribute_id'])->where(['id' => $attribute_value])->scalar()])->scalar(),
                                    'attributeValue' => ProductAttributeExtends::find()->select(['product_attribute_value'])->where(['id' => $attribute_value])->scalar(),
                                );
                                array_push($product['attributes'], $attributes);
                            }
                        }
                        array_push($product_list['goodsList'], $product);
                    }
                    array_push($cart, $product_list);
                }
            }
        } else {
            //获取购物车中店铺列表
            if (!empty($cart_list)) {
                $store = array_unique(array_map(function ($record) {
                    return $record['store_id'];
                }, $cart_list));
            } else {
                $store = [];
            }
            $store = array_values($store);
            //获取购物车中每个店铺下所有商品数据
            if (!empty($store) && !empty($cart_list)) {
                for ($i = 0; $i < count($store); $i++) {
                    $store_list[$store[$i]] = [];
                    for ($n = 0; $n < count($cart_list); $n++) {
                        if ($cart_list[$n]['store_id'] == $store[$i]) {
                            array_push($store_list[$store[$i]], $cart_list[$n]);
                        }
                    }
                }
            } else {
                $store_list = [];
            }
            //整理购物车格式
            foreach ($store_list as $k => $v) {
                $product_list = array(
                    'storeName' => Store::find()->select(['name'])->where(['id' => $k])->scalar(),
                    'isProprietary' => Store::find()->select(['is_proprietary'])->where(['id' => $k])->scalar(),
                    'goodsList' => [],
                );
                foreach ($v as $product_key => $product_value) {
                    $product = array(
                        'cartId' => $product_value['cart_id'],
                        'goodsId' => $product_value['product_id'],
                        'skuId' => $product_value['sku_id'],
                        'goodsName' => Product::find()->select(['name'])->where(['id' => $product_value['product_id']])->scalar(),
                        'goodsImage' => Product::find()->select(['spu_cover'])->where(['id' => $product_value['product_id']])->scalar(),
                        'goodsPrice' => ProductSku::find()->select(['price'])->where(['id' => $product_value['sku_id']])->scalar(),
                        'goodsNumber' => $product_value['product_number'],
                        'attributes' => [],
                    );
                    $attribute = json_decode(ProductSku::find()->select(['sku_attribute'])->where(['id' => $product_value['sku_id']])->scalar());
                    if(!empty($attribute)){
                        foreach ($attribute as $attribute_key => $attribute_value) {
                            $attributes = array(
                                'attributeName' => ProductAttribute::find()->select(['name'])->where(['id' => ProductAttributeExtends::find()->select(['product_attribute_id'])->where(['id' => $attribute_value])->scalar()])->scalar(),
                                'attributeValue' => ProductAttributeExtends::find()->select(['product_attribute_value'])->where(['id' => $attribute_value])->scalar(),
                            );
                            array_push($product['attributes'], $attributes);
                        }
                    }
                    array_push($product_list['goodsList'], $product);
                }
                array_push($cart, $product_list);
            }
        }
        return $cart;
    }
}