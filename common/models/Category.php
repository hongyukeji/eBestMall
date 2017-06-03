<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%category}}".
 *
 * @property integer $categoryId
 * @property string $categoryName
 * @property integer $categoryParentId
 * @property integer $categorySort
 * @property integer $createdTime
 * @property integer $updatedTime
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
            [['categoryName'], 'required'],
            [['categoryParentId', 'categorySort', 'createdTime', 'updatedTime'], 'integer'],
            [['categoryName'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'categoryId' => Yii::t('system', 'Category ID'),
            'categoryName' => Yii::t('system', 'Category Name'),
            'categoryParentId' => Yii::t('system', 'Category Parent ID'),
            'categorySort' => Yii::t('system', 'Category Sort'),
            'createdTime' => Yii::t('system', 'Created Time'),
            'updatedTime' => Yii::t('system', 'Updated Time'),
        ];
    }
}
