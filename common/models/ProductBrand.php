<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%product_brand}}".
 *
 * @property integer $id
 * @property integer $cat_id
 * @property string $name
 * @property string $title
 * @property string $content
 * @property string $logo
 * @property integer $status
 * @property integer $create_time
 * @property integer $update_time
 */
class ProductBrand extends \common\models\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%product_brand}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'cat_id', 'name', 'title', 'content', 'logo', 'status', 'create_time', 'update_time'], 'required'],
            [['id', 'cat_id', 'status', 'create_time', 'update_time'], 'integer'],
            [['content'], 'string'],
            [['name', 'title', 'logo'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'cat_id' => Yii::t('app', 'Cat ID'),
            'name' => Yii::t('app', 'Name'),
            'title' => Yii::t('app', 'Title'),
            'content' => Yii::t('app', 'Content'),
            'logo' => Yii::t('app', 'Logo'),
            'status' => Yii::t('app', 'Status'),
            'create_time' => Yii::t('app', 'Create Time'),
            'update_time' => Yii::t('app', 'Update Time'),
        ];
    }
}
