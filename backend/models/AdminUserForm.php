<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use common\models\AdminUser;

class AdminUserForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $repassword;

    public function rules()
    {
        return [
            [['username', 'email'], 'required'],
            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'email'],
            ['email', 'exist',
                'targetClass' => '\common\models\AdminUser',
                'filter' => ['status' => AdminUser::STATUS_ACTIVE],
                'message' => 'There is no user with such email.'
            ],
            [['password', 'repassword'], 'required', 'on' => 'resetPassword']
        ];
    }

    /*
     * 找回密码
     */
    public function retrievePassword()
    {

    }

    /*
     * 发送邮件
     */
    public function sendEmail()
    {
        $adminuser = AdminUser::findOne([
            'status' => AdminUser::STATUS_ACTIVE,
            'username' => $this->username,
            'email' => $this->email,
        ]);
        if (!$adminuser) {
            return false;
        } else {
            return true;
        }
    }

    /*
     * 重置密码
     */
    public function resetPassword()
    {
        $this->scenario = 'resetPassword';

    }

    /*
     * 生成Token
     */
    public function createToken($adminuser, $time)
    {
        return md5(md5($adminuser) . base64_encode(Yii::$app->request->userIP) . md5($time));
    }
}

