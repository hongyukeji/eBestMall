<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%product}}".
 *
 * @property string $id
 * @property string $name
 * @property string $title
 * @property string $content
 * @property integer $cat_id
 * @property integer $brand_id
 * @property integer $store_id
 * @property string $spu_cover
 * @property string $spu_images
 * @property integer $spu_stock
 * @property integer $spu_sales_volume
 * @property integer $spu_comment
 * @property integer $is_best
 * @property integer $is_new
 * @property integer $is_hot
 * @property integer $sort_order
 * @property integer $status
 * @property integer $create_time
 * @property integer $update_time
 *
 * @property Store $store
 * @property ProductCategory $cat
 * @property ProductSku[] $productSkus
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
            [['name', 'content', 'cat_id', 'store_id', 'spu_cover', 'spu_images', 'create_time', 'update_time'], 'required'],
            [['content', 'spu_images'], 'string'],
            [['cat_id', 'brand_id', 'store_id', 'spu_stock', 'spu_sales_volume', 'spu_comment', 'is_best', 'is_new', 'is_hot', 'sort_order', 'status', 'create_time', 'update_time'], 'integer'],
            [['name', 'title', 'spu_cover'], 'string', 'max' => 255],
            [['store_id'], 'exist', 'skipOnError' => true, 'targetClass' => Store::className(), 'targetAttribute' => ['store_id' => 'id']],
            [['cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProductCategory::className(), 'targetAttribute' => ['cat_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'title' => Yii::t('app', 'Title'),
            'content' => Yii::t('app', 'Content'),
            'cat_id' => Yii::t('app', 'Cat ID'),
            'brand_id' => Yii::t('app', 'Brand ID'),
            'store_id' => Yii::t('app', 'Store ID'),
            'spu_cover' => Yii::t('app', 'Spu Cover'),
            'spu_images' => Yii::t('app', 'Spu Images'),
            'spu_stock' => Yii::t('app', 'Spu Stock'),
            'spu_sales_volume' => Yii::t('app', 'Spu Sales Volume'),
            'spu_comment' => Yii::t('app', 'Spu Comment'),
            'is_best' => Yii::t('app', 'Is Best'),
            'is_new' => Yii::t('app', 'Is New'),
            'is_hot' => Yii::t('app', 'Is Hot'),
            'sort_order' => Yii::t('app', 'Sort Order'),
            'status' => Yii::t('app', 'Status'),
            'create_time' => Yii::t('app', 'Create Time'),
            'update_time' => Yii::t('app', 'Update Time'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStore()
    {
        return $this->hasOne(Store::className(), ['id' => 'store_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCat()
    {
        return $this->hasOne(ProductCategory::className(), ['id' => 'cat_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductSku()
    {
        return $this->hasMany(ProductSku::className(), ['product_id' => 'id']);
    }

    public function getProductAttributeExtends()
    {
        return $this->hasMany(ProductAttributeExtends::className(), ['product_id' => 'id']);
    }
}
