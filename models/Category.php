<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%category}}".
 *
 * @property integer $cate_id
 * @property string $cate_name
 * @property integer $parent_id
 * @property integer $is_show
 * @property integer $sort_order
 * @property integer $status
 */
class Category extends Model
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%category}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cate_name'], 'required'],
            [['parent_id', 'is_show', 'sort_order', 'status'], 'integer'],
            [['cate_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cate_id' => Yii::t('app', 'Cate ID'),
            'cate_name' => Yii::t('app', 'Cate Name'),
            'parent_id' => Yii::t('app', 'Parent ID'),
            'is_show' => Yii::t('app', 'Is Show'),
            'sort_order' => Yii::t('app', 'Sort Order'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
