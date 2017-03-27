<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%category}}".
 *
 * @property integer $categoryId
 * @property string $categoryName
 * @property integer $categoryParentId
 */
class Category extends \yii\db\ActiveRecord
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
            [['categoryParentId'], 'integer'],
            [['categoryName'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'categoryId' => Yii::t('app', 'Category ID'),
            'categoryName' => Yii::t('app', 'Category Name'),
            'categoryParentId' => Yii::t('app', 'Category Parent ID'),
        ];
    }
}
