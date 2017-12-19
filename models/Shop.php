<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%shop}}".
 *
 * @property integer $shop_id
 * @property integer $user_id
 * @property string $shop_name
 * @property integer $sort_order
 * @property integer $is_self
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Shop extends Model
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%shop}}';
    }

    public function getGoods()
    {
        return $this->hasMany(Goods::className(), ['shop_id', 'shop_id']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'sort_order', 'is_self', 'status', 'created_at', 'updated_at'], 'integer'],
            [['shop_name', 'created_at', 'updated_at'], 'required'],
            [['shop_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'shop_id' => Yii::t('app', 'Store ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'shop_name' => Yii::t('app', 'Store Name'),
            'sort_order' => Yii::t('app', 'Sort Order'),
            'is_self' => Yii::t('app', 'Is Self'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
}
