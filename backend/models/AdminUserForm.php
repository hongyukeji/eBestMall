<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use common\models\AdminUser;

class AdminUserForm extends Model
{
    public $username;
    public $email;

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
        ];
    }

    public function sendEmail()
    {
        $adminuser = AdminUser::findOne([
            'status' => AdminUser::STATUS_ACTIVE,
            'username' => $this->username,
            'email' => $this->email
        ]);
        if (!$adminuser) {
            return false;
        }else{
            return true;
        }
    }

}

