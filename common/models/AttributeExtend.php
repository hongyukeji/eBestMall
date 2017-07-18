<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%attribute_extend}}".
 *
 * @property string $id
 * @property string $attribute_id
 * @property string $attribute_value
 */
class AttributeExtend extends \common\models\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%attribute_extend}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['attribute_id', 'attribute_value'], 'required'],
            [['attribute_id'], 'integer'],
            [['attribute_value'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'attribute_id' => Yii::t('app', 'Attribute ID'),
            'attribute_value' => Yii::t('app', 'Attribute Value'),
        ];
    }
}
