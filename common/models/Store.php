<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%store}}".
 *
 * @property integer $store_id
 * @property integer $user_id
 * @property string $store_name
 * @property integer $sort_order
 * @property integer $is_self
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Store extends Model
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%store}}';
    }

    public function getGoods()
    {
        return $this->hasMany(Goods::className(), ['store_id', 'store_id']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'sort_order', 'is_self', 'status', 'created_at', 'updated_at'], 'integer'],
            [['store_name', 'created_at', 'updated_at'], 'required'],
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
            'sort_order' => Yii::t('app', 'Sort Order'),
            'is_self' => Yii::t('app', 'Is Self'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
}
