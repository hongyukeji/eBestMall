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
class Article extends \yii\db\ActiveRecord
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
            'articleId' => 'Article ID',
            'articleCatId' => 'Article Cat ID',
            'articleTitle' => 'Article Title',
            'articleContent' => 'Article Content',
            'articleAuthorAdminUserId' => 'Article Author Admin User ID',
            'status' => 'Status',
            'createdTime' => 'Created Time',
            'updatedTime' => 'Updated Time',
        ];
    }
}
