<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "{{%category}}".
 *
 * @property integer $cat_id
 * @property string $cat_name
 * @property integer $parent_id
 * @property integer $sort_order
 */
class Category extends \common\models\BaseModel
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
            [['cat_name', 'parent_id', 'sort_order'], 'required'],
            [['parent_id', 'sort_order'], 'integer'],
            [['cat_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cat_id' => Yii::t('system', 'Category ID'),
            'cat_name' => Yii::t('system', 'Category Name'),
            'parent_id' => Yii::t('system', 'Category Parent ID'),
            'sort_order' => Yii::t('system', 'Sort Order'),
        ];
    }
}
