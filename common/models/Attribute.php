<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%attribute}}".
 *
 * @property string $attribute_id
 * @property string $attribute_name
 * @property string $cat_id
 * @property string $parent_id
 */
class Attribute extends \common\models\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%attribute}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['attribute_name', 'cat_id'], 'required'],
            [['cat_id', 'parent_id'], 'integer'],
            [['attribute_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'attribute_id' => Yii::t('app', 'Attribute ID'),
            'attribute_name' => Yii::t('app', 'Attribute Name'),
            'cat_id' => Yii::t('app', 'Cat ID'),
            'parent_id' => Yii::t('app', 'Parent ID'),
        ];
    }
}
