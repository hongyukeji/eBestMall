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
class ArticleCat extends \common\models\BaseModel
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
            'articleCatId' => Yii::t('app', 'Article Cat ID'),
            'articleCatName' => Yii::t('app', 'Article Cat Name'),
            'articleCatParentId' => Yii::t('app', 'Article Cat Parent ID'),
        ];
    }
}
