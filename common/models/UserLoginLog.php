<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%user_login_log}}".
 *
 * @property int $user_login_log_id 自增ID
 * @property int $user_id 用户ID
 * @property int $login_count 登录次数
 * @property int $prev_login_time 上次登录时间
 * @property string $prev_login_ip 上次登录IP
 * @property int $last_login_time 最后登录时间
 * @property string $last_login_ip 登录IP
 * @property string $login_type 登录终端类型:0.电脑(pc),1.移动设备(mobile)
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 *
 * @property User $user
 */
class UserLoginLog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user_login_log}}';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'login_count', 'prev_login_time', 'prev_login_ip', 'last_login_time', 'last_login_ip', 'login_type', 'created_at', 'updated_at'], 'required'],
            [['user_id', 'login_count', 'prev_login_time', 'last_login_time', 'status', 'created_at', 'updated_at'], 'integer'],
            [['prev_login_ip', 'last_login_ip', 'login_type'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => UserModel::className(), 'targetAttribute' => ['user_id' => 'user_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_login_log_id' => Yii::t('app', 'User Login Log ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'login_count' => Yii::t('app', 'Login Count'),
            'prev_login_time' => Yii::t('app', 'Prev Login Time'),
            'prev_login_ip' => Yii::t('app', 'Prev Login Ip'),
            'last_login_time' => Yii::t('app', 'Last Login Time'),
            'last_login_ip' => Yii::t('app', 'Last Login Ip'),
            'login_type' => Yii::t('app', 'Login Type'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

}
