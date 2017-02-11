<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%config}}".
 *
 * @property integer $configId
 * @property string $configName
 * @property string $configCode
 * @property string $configValue
 * @property integer $configParentId
 */
class Config extends \yii\db\ActiveRecord
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
            [['configName'], 'required'],
            [['configParentId'], 'integer'],
            [['configName', 'configCode', 'configValue'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'configId' => 'Config ID',
            'configName' => 'Config Name',
            'configCode' => 'Config Code',
            'configValue' => 'Config Value',
            'configParentId' => 'Config Parent ID',
        ];
    }
}
