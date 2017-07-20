<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%product_sku}}".
 *
 * @property string $sku_id
 * @property string $product_id
 * @property string $images
 * @property string $attribute
 * @property string $price
 * @property string $market_price
 * @property integer $stock
 * @property integer $sku_sales_volume
 */
class ProductSku extends \common\models\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%product_sku}}';
    }

    public function getAttr()
    {
        return $this->hasMany(AttributeExtend::className(), ['id' => 'attribute']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'attribute'], 'required'],
            [['product_id', 'stock', 'sku_sales_volume'], 'integer'],
            [['images'], 'string'],
            [['price', 'market_price'], 'number'],
            [['attribute'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sku_id' => Yii::t('app', 'Sku ID'),
            'product_id' => Yii::t('app', 'Product ID'),
            'images' => Yii::t('app', 'Images'),
            'attribute' => Yii::t('app', 'Attribute'),
            'price' => Yii::t('app', 'Price'),
            'market_price' => Yii::t('app', 'Market Price'),
            'stock' => Yii::t('app', 'Stock'),
            'sku_sales_volume' => Yii::t('app', 'Sku Sales Volume'),
        ];
    }
}
