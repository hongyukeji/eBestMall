<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%cart}}".
 *
 * @property string $id
 * @property integer $user_id
 * @property integer $store_id
 * @property string $product_id
 * @property integer $product_number
 * @property string $sku_id
 */
class Cart extends \common\models\BaseModel
{
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['product_id' => 'product_id']);
    }

    public function getStore()
    {
        return $this->hasOne(Store::className(), ['store_id' => 'store_id']);
    }

    public function getSku()
    {
        return $this->hasOne(ProductSku::className(), ['sku_id' => 'sku_id']);
    }

    /**
     * @inheritdoc
     * 获取用户购物车商品数据
     */
    public function getCartList()
    {
        return Cart::find()->where(['user_id' => Yii::$app->user->getId()])->orderBy(['store_id' => SORT_ASC])->asArray()->all();
    }

    /**
     * @inheritdoc
     * 将下单商品列表转换为以店铺ID为下标的数组
     */
    public function getStoreCartList($cart_list)
    {
        $model = array();
        foreach ($cart_list as $cart) {
            $model[$cart['store_id']][] = $cart;
        }
        return $model;
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%cart}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'store_id', 'product_id', 'sku_id'], 'required'],
            [['user_id', 'store_id', 'product_id', 'product_number', 'sku_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'store_id' => Yii::t('app', 'Store ID'),
            'product_id' => Yii::t('app', 'Product ID'),
            'product_number' => Yii::t('app', 'Product Number'),
            'sku_id' => Yii::t('app', 'Sku ID'),
        ];
    }
}
