<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%goods}}".
 *
 * @property integer $goods_id
 * @property string $goods_name
 * @property string $goods_price
 * @property string $goods_market_price
 * @property string $goods_content
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Goods extends Model
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%goods}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goods_name', 'goods_content', 'created_at', 'updated_at'], 'required'],
            [['goods_price', 'goods_market_price'], 'number'],
            [['goods_content'], 'string'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['goods_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'goods_id' => Yii::t('app', 'Goods ID'),
            'goods_name' => Yii::t('app', 'Goods Name'),
            'goods_price' => Yii::t('app', 'Goods Price'),
            'goods_market_price' => Yii::t('app', 'Goods Market Price'),
            'goods_content' => Yii::t('app', 'Goods Content'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
}
