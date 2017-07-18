<?php

namespace frontend\models;

use common\models\LoginForm;
use common\models\UserInfo;
use Yii;
use yii\base\Model;
use common\models\User;
use yii\db\Exception;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $mobile_phone;
    public $password;
    public $verifyPassword;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => '用户名已存在'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            //['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => '邮箱已存在'],

            ['mobile_phone', 'trim'],
            //['mobile_phone', 'required'],
            ['mobile_phone', 'string', 'min' => 11, 'max' => 11],
            ['mobile_phone', 'match', 'pattern' => '/^1[0-9]{10}$/', 'message' => '手机号格式不正确'],
            ['mobile_phone', 'unique', 'targetClass' => '\common\models\User', 'message' => '手机号已存在'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],

            ['verifyPassword', 'required'],
            ['verifyPassword', 'compare', 'compareAttribute' => 'password', 'message' => '两次密码输入不一致'],

        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }

        try {
            $user = new User();
            $user->username = $this->username;
            if (!empty($this->email)) {
                $user->email = $this->email;
            }
            if (!empty($this->mobile_phone)) {
                $user->mobile_phone = $this->mobile_phone;
            }
            $user->setPassword($this->password);
            $user->generateAuthKey();

            // 用户创建成功, 同时创建用户信息表
            if ($user->save()) {
                $login = new LoginForm();
                if ($login->createRecord($user->id)) {
                    return $user;
                } else {
                    throw new Exception(UserInfo::className() . '表添加用户信息失败');
                }
            } else {
                throw new Exception(User::className() . '表添加用户失败');
            }
        } catch (Exception $e) {
            $login = new LoginForm();
            $login->createRecord($user->id);
            return $e->getMessage();
        }
        //return $user->save() ? $user : null;
    }

    public function attributeLabels()
    {
        return [
            'username' => Yii::t('app', 'UserName'),
            'password' => Yii::t('app', 'Password'),
            'verifyPassword' => Yii::t('app', 'verifyPassword'),
            'email' => Yii::t('app', 'Email'),
            'mobile_phone' => Yii::t('app', 'Mobile Phone'),
        ];
    }
}
