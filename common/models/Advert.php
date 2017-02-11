<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%advert}}".
 *
 * @property integer $id
 */
class Advert extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%advert}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ,
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
        ];
    }
}
