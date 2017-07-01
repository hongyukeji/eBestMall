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
class Advert extends \common\models\BaseModel
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
            'advertId' => Yii::t('app', 'Advert ID'),
            'advertName' => Yii::t('app', 'Advert Name'),
            'advertCode' => Yii::t('app', 'Advert Code'),
            'advertLocation' => Yii::t('app', 'Advert Location'),
            'advertImage' => Yii::t('app', 'Advert Image'),
            'advertUrl' => Yii::t('app', 'Advert Url'),
        ];
    }
}
