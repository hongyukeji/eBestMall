<?php
/**
 * eBestMall
 * ============================================================================
 * Copyright 2015-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/12/24 21:19
 * E-mail: hongyukeji@126.com
 * ============================================================================
 */

namespace app\models\form;

use app\models\UserAuth;
use Yii;
use app\models\User;
use yii\db\ActiveRecord;

class BindForm extends ActiveRecord
{
    public $username;
    public $password;
    public $openid;
    public $avatar_url;
    public $client;

    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'string', 'min' => 4, 'max' => 32],
            ['username', 'unique', 'targetClass' => '\app\models\User', 'message' => Yii::t('app/error', 'This username has already been taken.')],
            ['username', 'match', 'pattern' => '/^[0-9a-zA-Z\x{4e00}-\x{9fa5}\_-]+$/u', 'message' => '格式错误，仅支持中文、字母、数字、“-”“_”的组合，4-32个字符'],

            ['password', 'trim'],
            ['password', 'required'],
            ['password', 'string', 'min' => 6, 'max' => 32],
        ];
    }

    public function attributeLabels()
    {
        return [
            'username' => Yii::t('app', 'username'),
            'password' => Yii::t('app', 'password'),
        ];
    }

    public function register()
    {
        if (!$this->validate()) {
            return null;
        }

        $userinfo = Yii::$app->session['userinfo'];

        $user = new User();
        $user->username = $this->username;
        $user->avatar_url = $userinfo['avatar_url'];
        $user->setPassword($this->password);
        $user->generateAuthKey();

        $transaction = User::getDb()->beginTransaction();

        if ($user->save()) {
            $auth = new UserAuth([
                'user_id' => $user->user_id,
                'source' => 'qq',
                'source_id' => $userinfo['openid'],
            ]);

            if ($auth->save()) {
                Yii::$app->session->remove('userinfo');
                $transaction->commit();
                return $user;
            }else{
                return null;
            }
        }else{
            return null;
        }
    }
}