<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%product_attribute_extends}}".
 *
 * @property string $id
 * @property string $product_id
 * @property string $product_attribute_id
 * @property string $product_attribute_value
 */
class ProductAttributeExtends extends \common\models\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%product_attribute_extends}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'product_id', 'product_attribute_id', 'product_attribute_value'], 'required'],
            [['id', 'product_id', 'product_attribute_id'], 'integer'],
            [['product_attribute_value'], 'string', 'max' => 255],
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
            'product_attribute_id' => Yii::t('app', 'Product Attribute ID'),
            'product_attribute_value' => Yii::t('app', 'Product Attribute Value'),
        ];
    }
}
