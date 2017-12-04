<?php

namespace app\models\form;

use app\models\User;
use Yii;
use yii\db\ActiveRecord;

class RegisterForm extends ActiveRecord
{
    public $username;
    public $password;
    public $re_password;
    public $email;
    public $mobile_phone;
    public $agreement = true;
    public $verify_code;

    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\app\models\User', 'message' => Yii::t('app/error', 'This username has already been taken.')],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\app\models\User', 'message' => Yii::t('app/error', 'This email address has already been taken.')],

            ['password', 'trim'],
            ['password', 'required'],
            ['password', 'string', 'min' => 6, 'max' => 32],

            ['re_password', 'trim'],
            ['re_password', 'required'],
            ['re_password', 'compare', 'compareAttribute' => 'password', 'message' => '两次密码不一致'],

            ['mobile_phone', 'trim'],
            ['mobile_phone', 'required'],
            ['mobile_phone', 'match', 'pattern' => '/^1[0-9]{10}$/', 'message' => '{attribute}格式不正确'],
            ['mobile_phone', 'unique', 'targetClass' => '\app\models\User', 'message' => '{attribute}已经被占用了'],

            ['agreement', 'required'],
            ['agreement', 'boolean', 'trueValue' => true, 'falseValue' => false, 'strict' => true, 'message' => '请勾选阅读并同意{attribute}'],

            ['verify_code', 'required'],
            ['verify_code', 'captcha', 'captchaAction' => 'auth/captcha'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'username' => Yii::t('app', 'username'),
            'password' => Yii::t('app', 'password'),
            're_password' => Yii::t('app', 're_password'),
            'email' => Yii::t('app', 'email'),
            'mobile_phone' => Yii::t('app', 'mobile_phone'),
            'verify_code' => Yii::t('app', 'verify_code'),
            'agreement' => Yii::t('app', 'agreement'),
        ];
    }

    public function register()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->mobile_phone = $this->mobile_phone;
        $user->setPassword($this->password);
        $user->generateAuthKey();

        return $user->save() ? $user : null;
    }

}