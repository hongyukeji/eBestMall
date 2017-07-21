<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%product_attribute}}".
 *
 * @property string $id
 * @property string $name
 * @property integer $cat_id
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
            [['id', 'name', 'cat_id'], 'required'],
            [['id', 'cat_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
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
            'cat_id' => Yii::t('app', 'Cat ID'),
        ];
    }
}
