<?php

namespace app\models\form;

use Yii;
use app\models\User;
use yii\db\ActiveRecord;
use yii\web\Cookie;

class RegisterForm extends ActiveRecord
{
    public $username;
    public $password;
    public $re_password;
    public $email;
    public $mobile_phone;
    public $rememberMe = true;
    public $verify_code;
    public $phone_code;
    public $smsCode;
    public $smsCodeTime = 600;


    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'string', 'min' => 4, 'max' => 32],
            ['username', 'unique', 'targetClass' => '\app\models\User', 'message' => Yii::t('app/error', 'This username has already been taken.')],
            ['username', 'match', 'pattern' => '/^[0-9a-zA-Z_\x{4e00}-\x{9fa5}\_-]+$/u', 'message' => '格式错误，仅支持中文、字母、数字、“-”“_”的组合，4-32个字符'],

            ['email', 'trim'],
            ['email', 'email'],
            ['email', 'string', 'max' => 100],
            ['email', 'filter', 'filter' => function ($value) {
                if (User::findByEmail($value) && $value !== '') {
                    $this->addError('email', Yii::t('app/error', 'This email address has already been taken.'));
                }
                return strtolower($value);   // 字符串转换为小写
            }],

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

            ['rememberMe', 'boolean'],
            ['rememberMe', 'compare', 'compareValue' => true, 'message' => '请阅读《用户注册协议》后，勾选阅读并同意'],

            ['verify_code', 'trim'],
            ['verify_code', 'required'],
            ['verify_code', 'captcha', 'captchaAction' => 'auth/captcha'],

            ['smsCode', 'trim'],
            ['smsCode', 'required'],
            ['smsCode', 'integer'],
            ['smsCode', 'string', 'min' => 6, 'max' => 6],
            ['smsCode', 'getSmsCode'],
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
            'smsCode' => Yii::t('app', 'phone_code'),
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

    public function getSmsCode($attribute)
    {
        $smsVerify = json_decode(Yii::$app->session->get('smsVerify'), true);

        $mobilePhone = $this->mobile_phone;
        $smsCode = $this->smsCode;
        $smsCodeTime = $this->smsCodeTime;

        if ((time() - $smsVerify['smsTime']) < $smsCodeTime && $smsVerify['smsCode'] == $smsCode && $smsVerify['mobilePhone'] == $mobilePhone) {
            //Yii::$app->session->remove('smsVerify');
            return true;
        } else {
            return $this->addError($attribute, '手机验证码不正确');
        }
    }

}