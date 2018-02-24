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
            'id' => Yii::t('app/model', 'ID'),
            'user_id' => Yii::t('app/model', 'User ID'),
            'name' => Yii::t('app/model', 'Name'),
            'email' => Yii::t('app/model', 'Email'),
            'mobile' => Yii::t('app/model', 'Mobile'),
            'content' => Yii::t('app/model', 'Content'),
            'user_ip' => Yii::t('app/model', 'User Ip'),
            'status' => Yii::t('app/model', 'Status'),
            'created_at' => Yii::t('app/model', 'Created At'),
            'updated_at' => Yii::t('app/model', 'Updated At'),
        ];
    }
}
