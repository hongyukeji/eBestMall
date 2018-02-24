<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "{{%category}}".
 *
 * @property integer $cate_id
 * @property string $cate_name
 * @property integer $parent_id
 * @property string $cate_keywords
 * @property string $cate_desc
 * @property integer $is_best
 * @property integer $is_show_nav
 * @property integer $is_show
 * @property integer $sort_order
 * @property integer $status
 */
class GoodsCategory extends Model
{


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%goods_category}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cate_name'], 'required'],
            [['parent_id', 'is_best', 'is_show_nav', 'is_show', 'sort_order', 'status'], 'integer'],
            [['cate_name', 'cate_keywords', 'cate_desc'], 'string', 'max' => 255],
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
            'cate_keywords' => Yii::t('app', 'Cate Keywords'),
            'cate_desc' => Yii::t('app', 'Cate Desc'),
            'is_best' => Yii::t('app', 'Is Best'),
            'is_show_nav' => Yii::t('app', 'Is Show Nav'),
            'is_show' => Yii::t('app', 'Is Show'),
            'sort_order' => Yii::t('app', 'Sort Order'),
            'status' => Yii::t('app', 'Status'),
        ];
    }


}
