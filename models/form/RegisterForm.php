<?php

namespace app\models\form;

use app\models\User;
use Yii;
use yii\db\ActiveRecord;

class RegisterForm extends ActiveRecord
{
    public $username;
    public $password;
    public $password_repeat;
    public $email;
    public $mobile_phone;
    public $agreement = true;

    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\app\models\User', 'message' => Yii::t('app/error','This username has already been taken.')],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\app\models\User', 'message' => Yii::t('app/error','This email address has already been taken.')],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
            ['password', 'compare', 'compareAttribute' => 'password_repeat'],

            ['email', 'required'],
            ['email', 'email'],

            ['mobile_phone', 'required'],
            ['mobile_phone', 'integer', 'max' => 11, 'min' => 11],

            ['agreement', 'required'],
            ['agreement', 'boolean'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'username' => Yii::t('app', 'username'),
            'password' => Yii::t('app', 'password'),
            'password_repeat' => Yii::t('app', 'password_repeat'),
            'email' => Yii::t('app', 'email'),
            'mobile_phone' => Yii::t('app', 'mobile_phone'),
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
        $user->email = $this->mobile_phone;
        $user->setPassword($this->password);
        $user->generateAuthKey();

        return $user->save() ? $user : null;
    }

}