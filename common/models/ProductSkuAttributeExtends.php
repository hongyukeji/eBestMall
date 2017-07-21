<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%product_sku_attribute_extends}}".
 *
 * @property string $id
 * @property string $product_sku_id
 * @property string $product_attribute_extends_id
 */
class ProductSkuAttributeExtends extends \common\models\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%product_sku_attribute_extends}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'product_sku_id', 'product_attribute_extends_id'], 'required'],
            [['id', 'product_sku_id', 'product_attribute_extends_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'product_sku_id' => Yii::t('app', 'Product Sku ID'),
            'product_attribute_extends_id' => Yii::t('app', 'Product Attribute Extends ID'),
        ];
    }
}
