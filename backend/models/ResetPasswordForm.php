<?php
/**
 * ============================================================================
 * Copyright © 2016-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/3/16 22:26
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */


namespace backend\models;


use common\models\AdminUser;
use yii\base\InvalidParamException;
use yii\base\Model;

class ResetPasswordForm extends Model
{
    public $password;
    public $repassword;
    private $_adminuser;

    public function __construct($token, $config = [])
    {
        if(empty($token) || !is_string($token)){
            throw new InvalidParamException('参数错误');
        }
        $this->_adminuser = AdminUser::findByPasswordResetToken($token);
        if (!$this->_adminuser){
            throw new InvalidParamException('参数不正确');
        }
        parent::__construct($config);
    }

    public function rules()
    {
        return [
            ['password', 'required'],
            ['repassword', 'required'],
            ['password', 'string', 'min' => 6],
            ['repassword', 'compare', 'compareAttribute'=>'password']
        ];
    }

    /*
     * 找回密码
     */
    public function resetPassword()
    {
        $adminuser = $this->_adminuser;
        $adminuser->setPassword($this->password);
        $adminuser->removePasswordResetToken();
        return $adminuser->save();
    }
}