<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%config}}".
 *
 * @property integer $id
 * @property string $configCode
 * @property string $configValue
 */
class Config extends \common\models\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%config}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['configCode'], 'required'],
            [['configCode'], 'string', 'max' => 255],
            [['configValue'], 'string', 'max' => 3000],
            [['configCode'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'configCode' => Yii::t('app', 'Config Code'),
            'configValue' => Yii::t('app', 'Config Value'),
        ];
    }
}
