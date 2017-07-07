<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%product}}".
 *
 * @property string $product_id
 * @property string $product_name
 * @property string $product_describe
 * @property string $product_detail
 * @property string $product_cover
 * @property string $product_code
 * @property string $cat_id
 * @property string $sku_id_default
 * @property string $store_id
 * @property integer $spu_sales_volume
 * @property integer $comment
 * @property integer $is_best
 * @property integer $is_new
 * @property integer $is_hot
 * @property integer $sort_order
 * @property integer $status
 * @property integer $create_time
 * @property integer $update_time
 */
class Product extends \common\models\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%product}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_name', 'product_detail', 'product_cover', 'product_code', 'cat_id', 'sku_id_default', 'store_id', 'create_time', 'update_time'], 'required'],
            [['product_detail'], 'string'],
            [['cat_id', 'sku_id_default', 'store_id', 'spu_sales_volume', 'comment', 'is_best', 'is_new', 'is_hot', 'sort_order', 'status', 'create_time', 'update_time'], 'integer'],
            [['product_name', 'product_describe', 'product_cover', 'product_code'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_id' => Yii::t('app', 'Product ID'),
            'product_name' => Yii::t('app', 'Product Name'),
            'product_describe' => Yii::t('app', 'Product Describe'),
            'product_detail' => Yii::t('app', 'Product Detail'),
            'product_cover' => Yii::t('app', 'Product Cover'),
            'product_code' => Yii::t('app', 'Product Code'),
            'cat_id' => Yii::t('app', 'Cat ID'),
            'sku_id_default' => Yii::t('app', 'Sku Id Default'),
            'store_id' => Yii::t('app', 'Store ID'),
            'spu_sales_volume' => Yii::t('app', 'Spu Sales Volume'),
            'comment' => Yii::t('app', 'Comment'),
            'is_best' => Yii::t('app', 'Is Best'),
            'is_new' => Yii::t('app', 'Is New'),
            'is_hot' => Yii::t('app', 'Is Hot'),
            'sort_order' => Yii::t('app', 'Sort Order'),
            'status' => Yii::t('app', 'Status'),
            'create_time' => Yii::t('app', 'Create Time'),
            'update_time' => Yii::t('app', 'Update Time'),
        ];
    }
}
