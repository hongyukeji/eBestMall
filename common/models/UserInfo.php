<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%user_info}}".
 *
 * @property string $id
 * @property string $userId
 * @property string $realName
 * @property integer $age
 * @property string $sex
 * @property string $birthday
 * @property string $nickname
 * @property string $qq
 * @property integer $createdTime
 */
class UserInfo extends \common\models\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user_info}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userId', 'age', 'createdTime'], 'integer'],
            [['sex'], 'string'],
            [['realName', 'birthday', 'nickname', 'qq'], 'string', 'max' => 255],
            [['userId'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'userId' => Yii::t('app', 'User ID'),
            'realName' => Yii::t('app', 'Real Name'),
            'age' => Yii::t('app', 'Age'),
            'sex' => Yii::t('app', 'Sex'),
            'birthday' => Yii::t('app', 'Birthday'),
            'nickname' => Yii::t('app', 'Nickname'),
            'qq' => Yii::t('app', 'Qq'),
            'createdTime' => Yii::t('app', 'Created Time'),
        ];
    }
}
