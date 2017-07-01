<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%product_attribute_filtrate}}".
 *
 * @property string $id
 * @property string $product_id
 * @property string $attribute
 */
class ProductAttributeFiltrate extends \common\models\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%product_attribute_filtrate}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'attribute'], 'required'],
            [['product_id'], 'integer'],
            [['attribute'], 'string', 'max' => 255],
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
            'attribute' => Yii::t('app', 'Attribute'),
        ];
    }
}
