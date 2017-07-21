<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%user_address}}".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $username
 * @property string $address
 * @property string $email
 * @property string $mobile_phone
 * @property integer $is_default
 * @property integer $created_time
 * @property integer $updated_time
 */
class UserAddress extends \common\models\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user_address}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'is_default', 'created_time', 'updated_time'], 'integer'],
            [['username', 'address', 'mobile_phone', 'is_default', 'created_time', 'updated_time'], 'required'],
            [['address'], 'string'],
            [['username'], 'string', 'max' => 255],
            [['email'], 'string', 'max' => 100],
            [['mobile_phone'], 'string', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'username' => Yii::t('app', 'Username'),
            'address' => Yii::t('app', 'Address'),
            'email' => Yii::t('app', 'Email'),
            'mobile_phone' => Yii::t('app', 'Mobile Phone'),
            'is_default' => Yii::t('app', 'Is Default'),
            'created_time' => Yii::t('app', 'Created Time'),
            'updated_time' => Yii::t('app', 'Updated Time'),
        ];
    }
}
