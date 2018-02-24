<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%goods_images}}".
 *
 * @property integer $img_id
 * @property integer $goods_id
 * @property string $img_source
 * @property string $img_medium
 * @property string $img_thumbnail
 * @property string $img_small
 * @property integer $sort_order
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class GoodsImages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%goods_images}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goods_id', 'img_source', 'img_medium', 'img_thumbnail', 'img_small', 'created_at', 'updated_at'], 'required'],
            [['goods_id', 'sort_order', 'status', 'created_at', 'updated_at'], 'integer'],
            [['img_source', 'img_medium', 'img_thumbnail', 'img_small'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'img_id' => Yii::t('app', 'Img ID'),
            'goods_id' => Yii::t('app', 'Goods ID'),
            'img_source' => Yii::t('app', 'Img Source'),
            'img_medium' => Yii::t('app', 'Img Medium'),
            'img_thumbnail' => Yii::t('app', 'Img Thumbnail'),
            'img_small' => Yii::t('app', 'Img Small'),
            'sort_order' => Yii::t('app', 'Sort Order'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
}
