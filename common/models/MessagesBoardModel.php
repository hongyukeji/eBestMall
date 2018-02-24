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
class MessagesBoardModel extends MessagesBoard
{

}
