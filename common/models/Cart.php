<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%cart}}".
 *
 * @property string $cart_id
 * @property string $user_id
 * @property string $store_id
 * @property string $product_id
 * @property integer $product_number
 * @property string $sku_id
 */
class Cart extends \common\models\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%cart}}';
    }

    public function getProduct()
    {
        return $this->hasOne(Product::className(),['product_id'=>'product_id']);
    }

    public function getStore()
    {
        return $this->hasOne(Store::className(),['store_id'=>'store_id']);
    }

    public function getSku()
    {
        return $this->hasOne(ProductSku::className(),['sku_id'=>'sku_id']);
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
            'cart_id' => Yii::t('app', 'Cart ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'store_id' => Yii::t('app', 'Store ID'),
            'product_id' => Yii::t('app', 'Product ID'),
            'product_number' => Yii::t('app', 'Product Number'),
            'sku_id' => Yii::t('app', 'Sku ID'),
        ];
    }
}
