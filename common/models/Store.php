<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%store}}".
 *
 * @property string $store_id
 * @property string $user_id
 * @property string $store_name
 * @property integer $is_proprietary
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
            [['user_id', 'is_proprietary'], 'integer'],
            [['store_name', 'is_proprietary'], 'required'],
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
            'user_id' => Yii::t('app', 'User ID'),
            'store_name' => Yii::t('app', 'Store Name'),
            'is_proprietary' => Yii::t('app', 'Is Proprietary'),
        ];
    }
}
