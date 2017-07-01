<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%article}}".
 *
 * @property integer $articleId
 * @property integer $articleCatId
 * @property string $articleTitle
 * @property string $articleContent
 * @property integer $articleAuthorAdminUserId
 * @property integer $status
 * @property integer $createdTime
 * @property integer $updatedTime
 */
class Article extends \common\models\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%article}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['articleCatId', 'articleAuthorAdminUserId', 'status', 'createdTime', 'updatedTime'], 'integer'],
            [['articleTitle', 'articleContent'], 'required'],
            [['articleContent'], 'string'],
            [['articleTitle'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'articleId' => Yii::t('app', 'Article ID'),
            'articleCatId' => Yii::t('app', 'Article Cat ID'),
            'articleTitle' => Yii::t('app', 'Article Title'),
            'articleContent' => Yii::t('app', 'Article Content'),
            'articleAuthorAdminUserId' => Yii::t('app', 'Article Author Admin User ID'),
            'status' => Yii::t('app', 'Status'),
            'createdTime' => Yii::t('app', 'Created Time'),
            'updatedTime' => Yii::t('app', 'Updated Time'),
        ];
    }
}
