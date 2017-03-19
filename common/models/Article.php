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
            'articleId' => Yii::t('common', 'Article') . 'ID',
            'articleCatId' => Yii::t('common', 'Article') . Yii::t('common', 'Category'),
            'articleTitle' => Yii::t('common', 'Article') . Yii::t('common', 'Title'),
            'articleContent' => Yii::t('common', 'Article') . Yii::t('common', 'Content'),
            'articleAuthorAdminUserId' => Yii::t('common', 'Article') . Yii::t('common', 'Author'),
            'status' => Yii::t('common', 'IsPublish'),
            'createdTime' => Yii::t('common', 'CreatedTime'),
            'updatedTime' => Yii::t('common', 'UpdatedTime'),
        ];
    }
}
