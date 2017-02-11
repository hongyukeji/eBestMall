<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%advert}}".
 *
 * @property integer $advertId
 * @property string $advertName
 * @property string $advertCode
 * @property string $advertLocation
 * @property string $advertImage
 * @property string $advertUrl
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
            [['advertName'], 'required'],
            [['advertName', 'advertCode', 'advertLocation', 'advertImage', 'advertUrl'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'advertId' => 'Advert ID',
            'advertName' => 'Advert Name',
            'advertCode' => 'Advert Code',
            'advertLocation' => 'Advert Location',
            'advertImage' => 'Advert Image',
            'advertUrl' => 'Advert Url',
        ];
    }
}
