<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%product_attribute}}".
 *
 * @property string $id
 * @property string $product_id
 * @property string $attribute_id
 * @property string $attribute_value_id
 */
class ProductAttribute extends \common\models\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%product_attribute}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'attribute_id', 'attribute_value_id'], 'required'],
            [['product_id', 'attribute_id', 'attribute_value_id'], 'integer'],
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
            'attribute_id' => Yii::t('app', 'Attribute ID'),
            'attribute_value_id' => Yii::t('app', 'Attribute Value ID'),
        ];
    }
}
