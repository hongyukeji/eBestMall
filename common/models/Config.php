<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%config}}".
 *
 * @property integer $id
 * @property string $configName
 * @property string $configCode
 * @property string $configValue
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
            [['configCode'], 'required'],
            [['configName', 'configCode'], 'string', 'max' => 255],
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
            'id' => 'ID',
            'configName' => 'Config Name',
            'configCode' => 'Config Code',
            'configValue' => 'Config Value',
        ];
    }
}
