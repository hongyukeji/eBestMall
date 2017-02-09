<?php
/**
 * ============================================================================
 * Copyright © 2016-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/2/9 22:48
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */

namespace frontend\models;

use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;
    public $text;
    public $file;
    public function rules()
    {
        return [
            [['name','text' , 'email'], 'required'],
            ['email', 'email'],
            ['file', 'file'],
        ];
    }
}