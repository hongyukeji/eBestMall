<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%messages_board}}".
 *
 * @property int $id
 * @property int $user_id 用户ID,默认为0-游客
 * @property string $name 名称
 * @property string $email 邮箱
 * @property string $mobile 手机号
 * @property string $content 留言内容
 * @property string $user_ip 用户ip
 * @property int $status 状态
 * @property int $created_at
 * @property int $updated_at
 */
class MessagesBoard extends Model
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%messages_board}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['name', 'content', 'user_ip', 'created_at', 'updated_at'], 'required'],
            [['content'], 'string'],
            [['name', 'email', 'mobile', 'user_ip'], 'string', 'max' => 255],
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
            'name' => Yii::t('app', 'Name'),
            'email' => Yii::t('app', 'Email'),
            'mobile' => Yii::t('app', 'Mobile'),
            'content' => Yii::t('app', 'Content'),
            'user_ip' => Yii::t('app', 'User Ip'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
}
