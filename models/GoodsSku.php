<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%goods_sku}}".
 *
 * @property integer $sku_id
 * @property integer $goods_id
 * @property string $sku_price
 * @property string $sku_market_price
 * @property string $sku_images
 * @property string $sku_spec
 * @property integer $sku_stock
 * @property integer $sku_sales_volume
 * @property integer $sort_order
 */
class GoodsSku extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%goods_sku}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goods_id', 'sku_images'], 'required'],
            [['goods_id', 'sku_stock', 'sku_sales_volume', 'sort_order'], 'integer'],
            [['sku_price', 'sku_market_price'], 'number'],
            [['sku_images'], 'string'],
            [['sku_spec'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sku_id' => Yii::t('app', 'Sku ID'),
            'goods_id' => Yii::t('app', 'Goods ID'),
            'sku_price' => Yii::t('app', 'Sku Price'),
            'sku_market_price' => Yii::t('app', 'Sku Market Price'),
            'sku_images' => Yii::t('app', 'Sku Images'),
            'sku_spec' => Yii::t('app', 'Sku Spec'),
            'sku_stock' => Yii::t('app', 'Sku Stock'),
            'sku_sales_volume' => Yii::t('app', 'Sku Sales Volume'),
            'sort_order' => Yii::t('app', 'Sort Order'),
        ];
    }
}
