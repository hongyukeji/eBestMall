<?php
/**
 * ============================================================================
 * Copyright © 2016-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/3/16 22:02
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */


namespace backend\models;

use Yii;
use yii\base\Model;
use common\models\AdminUser;

class PasswordResetRequestForm extends Model
{
    public $username;
    public $email;

    public function rules()
    {
        return [
            ['username', 'required'],
            ['username', 'exist',
                'targetClass' => '\common\models\AdminUser',
                'filter' => ['status' => AdminUser::STATUS_ACTIVE],
                'message' => '用户名不存在'
            ],
            ['email', 'required'],
            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'email'],
            ['email', 'exist',
                'targetClass' => '\common\models\AdminUser',
                'filter' => ['status' => AdminUser::STATUS_ACTIVE],
                'message' => 'There is no user with such email.'
            ],
        ];
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

        if (!AdminUser::isPasswordResetTokenValid($adminuser->password_reset_token)) {
            $adminuser->generatePasswordResetToken();
        }
        if (!$adminuser->save()) {
            return false;
        }

        $data['name'] = $this->username;
        $data['url'] = Yii::$app->urlManager->createAbsoluteUrl([
            'site/reset-password',
            'token' => $adminuser->password_reset_token,
        ]);
        $mailer = Yii::$app->mailer->compose('retrievePassword', ['data' => $data]);
        $mailer->setFrom($this->email);
        $mailer->setTo($this->email);
        $mailer->setSubject("eBestMall retrievePassword Email");
        if ($mailer->send()) {
            return true;
        } else {
            return false;
        }
    }

}