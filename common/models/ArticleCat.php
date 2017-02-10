<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%article_cat}}".
 *
 * @property integer $articleCatId
 * @property string $articleCatName
 * @property integer $articleCatParentId
 */
class ArticleCat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%article_cat}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['articleCatName'], 'required'],
            [['articleCatParentId'], 'integer'],
            [['articleCatName'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'articleCatId' => 'Article Cat ID',
            'articleCatName' => 'Article Cat Name',
            'articleCatParentId' => 'Article Cat Parent ID',
        ];
    }
}
