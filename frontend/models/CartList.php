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
    /*
     * 购物车列表获取
     * @param $user_id
     */
    public function getCartList()
    {
        /*
        //自营商品列表,交给数据模型处理,并返回数据
        $data['self'] = array(
            'storeName' => '平台自营',
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
        );

        //入驻商家商品列表
        $data['seller'] = array(
            0 =>
                array(
                    'storeName' => 'Shadow旗舰店',
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
            1 =>
                array(
                    'storeName' => '苹果旗舰店',
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

        $goods_list = [];

        if (!Yii::$app->user->isGuest) {
            // 已经登录,获取用户id
            $user_id = Yii::$app->user->getId();
            $model = new Cart();
            $store = array_unique(array_map(function ($record) {
                return $record->store_id;
            }, $model->find()->select(['store_id'])->where(['user_id' => $user_id])->all()));

            if (!empty($store)){
                for ($i = 0; $i < count($store); $i++) {
                    $store_name = Store::find()->select(['store_name'])->where(['store_id' => $store[$i]])->scalar();
                    $store_list[$store_name] = $model->find()->where(['user_id' => $user_id, 'store_id' => $store[$i]])->all();
                }
                foreach ($store_list as $k => $v) {
                    $product_list = array(
                        'storeName' => $k,
                        'isProprietary' => Store::find()->select(['is_proprietary'])->where(['store_name' => $k])->scalar(),
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
                    array_push($goods_list, $product_list);
                }
            }
        }else{
            //未登录用户
        }

        return $goods_list;
    }

}