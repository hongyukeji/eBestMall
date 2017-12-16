<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%goods_brand}}".
 *
 * @property integer $brand_id
 * @property string $brand_name
 * @property string $brand_brief
 * @property string $brand_content
 * @property string $brand_logo
 * @property integer $sort_order
 * @property integer $status
 */
class GoodsBrand extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%goods_brand}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['brand_name', 'brand_brief', 'brand_content', 'brand_logo'], 'required'],
            [['brand_content'], 'string'],
            [['sort_order', 'status'], 'integer'],
            [['brand_name', 'brand_brief', 'brand_logo'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'brand_id' => Yii::t('app', 'Brand ID'),
            'brand_name' => Yii::t('app', 'Brand Name'),
            'brand_brief' => Yii::t('app', 'Brand Brief'),
            'brand_content' => Yii::t('app', 'Brand Content'),
            'brand_logo' => Yii::t('app', 'Brand Logo'),
            'sort_order' => Yii::t('app', 'Sort Order'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
