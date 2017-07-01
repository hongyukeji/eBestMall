<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%store}}".
 *
 * @property string $store_id
 * @property string $store_name
 */
class Store extends \common\models\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%store}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['store_name'], 'required'],
            [['store_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'store_id' => Yii::t('app', 'Store ID'),
            'store_name' => Yii::t('app', 'Store Name'),
        ];
    }
}
