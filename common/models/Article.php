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

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'articleId' => Yii::t('app', 'Article') . 'ID',
            'articleCatId' => Yii::t('app', 'Article') . Yii::t('app', 'Category'),
            'articleTitle' => Yii::t('app', 'Article') . Yii::t('app', 'Title'),
            'articleContent' => Yii::t('app', 'Article') . Yii::t('app', 'Content'),
            'articleAuthorAdminUserId' => Yii::t('app', 'Article') . Yii::t('app', 'Author'),
            'status' => Yii::t('app', 'IsPublish'),
            'createdTime' => Yii::t('app', 'CreatedTime'),
            'updatedTime' => Yii::t('app', 'UpdatedTime'),
        ];
    }
}
