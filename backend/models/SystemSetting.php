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

use Yii;
use yii\base\Model;
use common\models\Config;

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
    public $copyright;

    public function rules()
    {
        return [
            [['name', 'title', 'keywords', 'description', 'copyright'], 'string', 'max' => 3000],
        ];
    }

    public function setSystemSetting()
    {
        foreach ($this as $k => $v) {
            $model = Config::find()->where(['configCode' => $k])->one();
            if ($model) {
                $model->configValue = addslashes($v);
            } else {
                $model = new Config();
                $model->configCode = $k;
                $model->configValue = addslashes($v);
            }
            if (!$model->save()) {
                return false;
            }
        }
        return true;
    }

    public function getSystemSetting()
    {
        $data = Config::find()->orderBy(['id' => SORT_DESC])->all();
        return $data;
    }

    public function attributeLabels()
    {
        return [
            'name' => Yii::t('common', 'Name'),
            'title' => Yii::t('common', 'Title'),
            'keywords' => Yii::t('common', 'Keywords'),
            'description' => Yii::t('common', 'Description'),
            'copyright' => Yii::t('common', 'Copyright'),
        ];
    }
}