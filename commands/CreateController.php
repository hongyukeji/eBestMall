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
 * Author: Shadow  QQ: 1527200768 & 13391528  Time: 2017/12/3 18:39
 * E-mail: hongyukeji@126.com
 * ============================================================================
 */

namespace app\commands;

use yii\console\Controller;
use app\models\User;
use app\modules\admin\models\Admin;

class CreateController extends Controller
{
    public function actionUser()
    {
        echo "Create a new user ...\n";                  // 提示当前操作
        $username = $this->prompt('User Name:');        // 接收用户名
        $email = $this->prompt('Email:');               // 接收Email
        $password = $this->prompt('Password:');         // 接收密码
        $model = new User();                            // 创建一个新用户
        $model->username = $username;                   // 完成赋值
        $model->email = $email;
        $model->status = 10;
        $model->created_at = time();
        $model->updated_at = time();
        $model->setPassword($password);
        $model->generateAuthKey();
        if (!$model->save())                            // 保存新的用户
        {
            foreach ($model->getErrors() as $error)     // 如果保存失败，说明有错误，那就输出错误信息。
            {
                foreach ($error as $e)
                {
                    echo "$e\n";
                }
            }
            return 1;                                   // 命令行返回1表示有异常
        }
        return 0;                                       // 返回0表示一切OK
    }

    public function actionAdmin()
    {
        echo "Create a new administrators ...\n";                  // 提示当前操作
        $username = $this->prompt('User Name:');        // 接收用户名
        $email = $this->prompt('Email:');               // 接收Email
        $password = $this->prompt('Password:');         // 接收密码
        $model = new Admin();                            // 创建一个新用户
        $model->username = $username;                   // 完成赋值
        $model->email = $email;
        $model->status = 10;
        $model->created_at = time();
        $model->updated_at = time();
        $model->setPassword($password);
        $model->generateAuthKey();
        if (!$model->save())                            // 保存新的用户
        {
            foreach ($model->getErrors() as $error)     // 如果保存失败，说明有错误，那就输出错误信息。
            {
                foreach ($error as $e)
                {
                    echo "$e\n";
                }
            }
            return 1;                                   // 命令行返回1表示有异常
        }
        return 0;                                       // 返回0表示一切OK
    }

    public function actionInit()
    {
        echo "Start to create user ...\n";
        $model = new User();
        $model->username = 'shadow';
        $model->email = 'hongyukeji@126.com';
        $model->mobile = '13800138000';
        $model->status = 10;
        $model->created_at = time();
        $model->updated_at = time();
        $model->setPassword('123456');
        $model->generateAuthKey();
        if (!$model->save())                            // 保存新的用户
        {
            foreach ($model->getErrors() as $error)     // 如果保存失败，说明有错误，那就输出错误信息。
            {
                foreach ($error as $e)
                {
                    echo "$e\n";
                }
            }
            return 1;                                   // 命令行返回1表示有异常
        }
        $model = new Admin();
        $model->username = 'admin';
        $model->email = 'hongyukeji@126.com';
        $model->mobile = '13800138000';
        $model->status = 10;
        $model->created_at = time();
        $model->updated_at = time();
        $model->setPassword('123456');
        $model->generateAuthKey();
        if (!$model->save())                            // 保存新的用户
        {
            foreach ($model->getErrors() as $error)     // 如果保存失败，说明有错误，那就输出错误信息。
            {
                foreach ($error as $e)
                {
                    echo "$e\n";
                }
            }
            return 1;                                   // 命令行返回1表示有异常
        }
        echo "Create success!";
        return 0;                                       // 返回0表示一切OK
    }
}