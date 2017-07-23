<?php

namespace common\models;

use Yii;
use yii\base\Model;

/**
 * Login form
 */
class LoginForm extends Model
{
    public $username;
    public $password;
    public $rememberMe = true;

    private $_user;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, '用户名或密码不正确');
            }
        }
    }

    /**
     * Logs in a user using the provided username and password.
     *
     * @return bool whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            $this->updateRecord($this->getUser()->id);    // 登录后触发记录事件 ( 3600 * 24 * 1 = 1天 ) 秒为单位
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600 * 24 * 1 : 0);
        } else {
            return false;
        }
    }

    public function createRecord($user_id)
    {
        $model = new UserInfo();
        $model->user_id = $user_id;
        $model->register_ip = Yii::$app->request->userIP;
        $model->login_number = 1;
        $model->last_login_ip = Yii::$app->request->userIP;
        $model->last_login_time = time();
        if ($model->save()) {
            return true;
        } else {
            return false;
        }
    }

    public function updateRecord($user_id)
    {
        $model = UserInfo::findOne($user_id);
        $model->updateCounters(['login_number' => 1]);
        $model->last_login_ip = Yii::$app->request->userIP;
        $model->last_login_time = time();
        if ($model->save()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    protected function getUser()
    {
        if ($this->_user === null) {
            $this->_user = User::findByUsername($this->username);
        }

        if ($this->_user === null) {
            $this->_user = User::findByEmail($this->username);
        }

        if ($this->_user === null) {
            $this->_user = User::findByMobilePhone($this->username);
        }

        return $this->_user;
    }

    public function attributeLabels()
    {
        return [
            'username' => Yii::t('app', 'UserName'),
            'email' => Yii::t('app', 'Email'),
            'password' => Yii::t('app', 'Password'),
            'rememberMe' => Yii::t('app', 'rememberMe'),
        ];
    }
}
