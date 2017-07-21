<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%user_info}}".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $nickname
 * @property integer $score
 * @property string $money
 * @property string $payment_password
 * @property string $real_name
 * @property string $id_card_no
 * @property integer $age
 * @property integer $sex
 * @property string $birthday
 * @property string $qq
 * @property string $ww
 * @property string $address
 * @property string $register_ip
 * @property integer $login_number
 * @property string $last_login_ip
 * @property integer $last_login_time
 *
 * @property User $user
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
            [['user_id'], 'required'],
            [['user_id', 'score', 'age', 'sex', 'login_number', 'last_login_time'], 'integer'],
            [['money'], 'number'],
            [['nickname', 'payment_password', 'real_name', 'id_card_no', 'birthday', 'address', 'register_ip', 'last_login_ip'], 'string', 'max' => 255],
            [['qq', 'ww'], 'string', 'max' => 32],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
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
            'nickname' => Yii::t('app', 'Nickname'),
            'score' => Yii::t('app', 'Score'),
            'money' => Yii::t('app', 'Money'),
            'payment_password' => Yii::t('app', 'Payment Password'),
            'real_name' => Yii::t('app', 'Real Name'),
            'id_card_no' => Yii::t('app', 'Id Card No'),
            'age' => Yii::t('app', 'Age'),
            'sex' => Yii::t('app', 'Sex'),
            'birthday' => Yii::t('app', 'Birthday'),
            'qq' => Yii::t('app', 'Qq'),
            'ww' => Yii::t('app', 'Ww'),
            'address' => Yii::t('app', 'Address'),
            'register_ip' => Yii::t('app', 'Register Ip'),
            'login_number' => Yii::t('app', 'Login Number'),
            'last_login_ip' => Yii::t('app', 'Last Login Ip'),
            'last_login_time' => Yii::t('app', 'Last Login Time'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
