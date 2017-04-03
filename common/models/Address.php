<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%address}}".
 *
 * @property integer $addressId
 * @property string $UserId
 * @property string $addressUserName
 * @property string $addressUserCompany
 * @property string $addressUserAddress
 * @property string $addressUserEmail
 * @property string $addressUserTelephone
 * @property integer $createdTime
 * @property string $updatedTime
 */
class Address extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%address}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['UserId', 'createdTime'], 'integer'],
            [['addressUserName'], 'required'],
            [['addressUserAddress'], 'string'],
            [['updatedTime'], 'safe'],
            [['addressUserName', 'addressUserTelephone'], 'string', 'max' => 32],
            [['addressUserCompany', 'addressUserEmail'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'addressId' => Yii::t('app', 'Address ID'),
            'UserId' => Yii::t('app', 'User ID'),
            'addressUserName' => Yii::t('app', 'Address User Name'),
            'addressUserCompany' => Yii::t('app', 'Address User Company'),
            'addressUserAddress' => Yii::t('app', 'Address User Address'),
            'addressUserEmail' => Yii::t('app', 'Address User Email'),
            'addressUserTelephone' => Yii::t('app', 'Address User Telephone'),
            'createdTime' => Yii::t('app', 'Created Time'),
            'updatedTime' => Yii::t('app', 'Updated Time'),
        ];
    }
}
