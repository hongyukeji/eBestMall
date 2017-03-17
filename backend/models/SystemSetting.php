<?php
/**
 * ============================================================================
 * Copyright © 2016-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/3/17 12:48
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */


namespace backend\models;

use yii\base\Model;

/**
 * @property integer $name
 * @property string $title
 * @property string $keywords
 * @property string $description
 */
class SystemSetting extends Model
{
    public $name;
    public $title;
    public $keywords;
    public $description;

    public function rules()
    {
        return [
            //[['name', 'title', 'keywords', 'description'], 'required'],
            [['name', 'title', 'keywords', 'description'], 'string', 'max' => 3000],
        ];
    }

}