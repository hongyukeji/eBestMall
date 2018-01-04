<?php
/**
 * eBestMall
 * ============================================================================
 * Copyright 2015-2018 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2018/1/4 20:31
 * E-mail: hongyukeji@126.com
 * ============================================================================
 */

namespace cms\models;

use Yii;
use yii\base\Model;

class MessagesBoardForm extends Model
{
    public $name;
    public $email;
    public $mobile;
    public $content;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['name', 'trim'],
            ['name','required'],
            ['name','string', 'max' => 255],

            ['content', 'trim'],
            [['content'], 'required'],
            [['content'], 'string'],

            ['email', 'trim'],
            ['email', 'email'],
            ['email','string', 'max' => 255],

            ['mobile', 'trim'],
            ['mobile', 'integer'],
            ['mobile', 'match', 'pattern' => '/^1[0-9]{10}$/', 'message' => '{attribute}格式不正确'],

        ];
    }
    public function attributeLabels()
    {
        return [
            'name' => Yii::t('app/model', 'Name'),
            'email' => Yii::t('app/model', 'Email'),
            'mobile' => Yii::t('app/model', 'Mobile'),
            'content' => Yii::t('app/model', 'Content'),
        ];
    }

}