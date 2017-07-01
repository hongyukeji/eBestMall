<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%cart}}".
 *
 * @property string $cart_id
 * @property string $user_id
 * @property string $store_id
 * @property string $store_name
 * @property string $product_id
 * @property string $product_name
 * @property string $product_cover
 * @property string $product_price
 * @property integer $product_number
 * @property string $product_attribute
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

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'store_id', 'store_name', 'product_id', 'product_name', 'product_cover', 'product_number', 'product_attribute', 'sku_id'], 'required'],
            [['user_id', 'store_id', 'product_id', 'product_number', 'sku_id'], 'integer'],
            [['product_price'], 'number'],
            [['store_name', 'product_name', 'product_cover', 'product_attribute'], 'string', 'max' => 255],
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
            'store_name' => Yii::t('app', 'Store Name'),
            'product_id' => Yii::t('app', 'Product ID'),
            'product_name' => Yii::t('app', 'Product Name'),
            'product_cover' => Yii::t('app', 'Product Cover'),
            'product_price' => Yii::t('app', 'Product Price'),
            'product_number' => Yii::t('app', 'Product Number'),
            'product_attribute' => Yii::t('app', 'Product Attribute'),
            'sku_id' => Yii::t('app', 'Sku ID'),
        ];
    }
}
