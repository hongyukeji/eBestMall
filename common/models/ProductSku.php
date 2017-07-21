<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%product_sku}}".
 *
 * @property string $id
 * @property string $product_id
 * @property string $price
 * @property string $market_price
 * @property string $sku_images
 * @property string $sku_attribute
 * @property integer $sku_stock
 * @property integer $sku_sales_volume
 * @property integer $create_time
 * @property integer $update_time
 *
 * @property Product $product
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

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'product_id', 'sku_images', 'sku_attribute', 'sku_stock', 'sku_sales_volume', 'create_time', 'update_time'], 'required'],
            [['id', 'product_id', 'sku_stock', 'sku_sales_volume', 'create_time', 'update_time'], 'integer'],
            [['price', 'market_price'], 'number'],
            [['sku_images'], 'string'],
            [['sku_attribute'], 'string', 'max' => 255],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'product_id' => Yii::t('app', 'Product ID'),
            'price' => Yii::t('app', 'Price'),
            'market_price' => Yii::t('app', 'Market Price'),
            'sku_images' => Yii::t('app', 'Sku Images'),
            'sku_attribute' => Yii::t('app', 'Sku Attribute'),
            'sku_stock' => Yii::t('app', 'Sku Stock'),
            'sku_sales_volume' => Yii::t('app', 'Sku Sales Volume'),
            'create_time' => Yii::t('app', 'Create Time'),
            'update_time' => Yii::t('app', 'Update Time'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }
}
