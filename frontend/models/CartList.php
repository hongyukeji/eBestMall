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
        //添加session购物车演示数据
        //$this->setCartDataDemo();
        //$session = Yii::$app->session;
        //$session->remove('cart');

        if (!Yii::$app->user->isGuest) {
            //会员-购物车数据
            $goods_list = $this->getStoreList(1);
        } else {
            //游客-购物车数据
            $session = Yii::$app->session;
            $goods_list = $this->getStoreList(0, $session['cart']);
        }
        return $goods_list;
    }

    public function setCartDataDemo()
    {
        /*
//购物车列表格式化数据模型示例
$data = array(
    0 => array(
        'storeName' => '平台自营',
        'isProprietary' => '1',
        'goodsList' => array(
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
    1 => array(
        'storeName' => 'Shadow旗舰店',
        'isProprietary' => '0',
        'goodsList' =>
            array(
                0 =>
                    array(
                        'cartId' => '3',
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
                        'cartId' => '4',
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
    2 => array(
        'storeName' => '苹果旗舰店',
        'isProprietary' => '0',
        'goodsList' =>
            array(
                0 =>
                    array(
                        'cartId' => '5',
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
                        'cartId' => '6',
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
);
*/

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
                for ($i = 0; $i < count($store); $i++) {
                    $store_list[$store[$i]] = $model->find()->where(['user_id' => Yii::$app->user->getId(), 'store_id' => $store[$i]])->all();
                }
            }
            //整理购物车格式
            foreach ($store_list as $k => $v) {
                $product_list = array(
                    'storeName' => Store::find()->select(['store_name'])->where(['store_id' => $v])->scalar(),
                    'isProprietary' => Store::find()->select(['is_proprietary'])->where(['store_id' => $v])->scalar(),
                    'goodsList' => [],
                );
                foreach ($v as $product_key => $product_value) {
                    $product = array(
                        'cartId' => $product_value['cart_id'],
                        'goodsId' => $product_value['product_id'],
                        'goodsName' => Product::find()->select(['product_name'])->where(['product_id' => $product_value['product_id']])->scalar(),
                        'goodsImage' => Product::find()->select(['product_cover'])->where(['product_id' => $product_value['product_id']])->scalar(),
                        'goodsPrice' => ProductSku::find()->select(['price'])->where(['product_id' => $product_value['sku_id']])->scalar(),
                        'goodsNumber' => $product_value['product_number'],
                        'attributes' => [],
                    );
                    $attribute = json_decode(ProductSku::find()->select(['attribute'])->where(['product_id' => $product_value['sku_id']])->scalar());
                    foreach ($attribute as $attribute_key => $attribute_value) {
                        $attributes = array(
                            'attributeName' => Attribute::find()->select(['attribute_name'])->where(['attribute_id' => AttributeExtend::find()->select(['attribute_id'])->where(['id' => $attribute_value])->scalar()])->scalar(),
                            'attributeValue' => AttributeExtend::find()->select(['attribute_value'])->where(['id' => $attribute_value])->scalar(),
                        );
                        array_push($product['attributes'], $attributes);
                    }
                    array_push($product_list['goodsList'], $product);
                }
                array_push($cart, $product_list);
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
                    'storeName' => Store::find()->select(['store_name'])->where(['store_id' => $k])->scalar(),
                    'isProprietary' => Store::find()->select(['is_proprietary'])->where(['store_id' => $k])->scalar(),
                    'goodsList' => [],
                );
                foreach ($v as $product_key => $product_value) {
                    $product = array(
                        'cartId' => $product_value['cart_id'],
                        'goodsId' => $product_value['product_id'],
                        'goodsName' => Product::find()->select(['product_name'])->where(['product_id' => $product_value['product_id']])->scalar(),
                        'goodsImage' => Product::find()->select(['product_cover'])->where(['product_id' => $product_value['product_id']])->scalar(),
                        'goodsPrice' => ProductSku::find()->select(['price'])->where(['product_id' => $product_value['sku_id']])->scalar(),
                        'goodsNumber' => $product_value['product_number'],
                        'attributes' => [],
                    );
                    $attribute = json_decode(ProductSku::find()->select(['attribute'])->where(['product_id' => $product_value['sku_id']])->scalar());
                    foreach ($attribute as $attribute_key => $attribute_value) {
                        $attributes = array(
                            'attributeName' => Attribute::find()->select(['attribute_name'])->where(['attribute_id' => AttributeExtend::find()->select(['attribute_id'])->where(['id' => $attribute_value])->scalar()])->scalar(),
                            'attributeValue' => AttributeExtend::find()->select(['attribute_value'])->where(['id' => $attribute_value])->scalar(),
                        );
                        array_push($product['attributes'], $attributes);
                    }
                    array_push($product_list['goodsList'], $product);
                }
                array_push($cart, $product_list);
            }
        }
        return $cart;
    }
}