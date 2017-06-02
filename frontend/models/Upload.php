<?php
/**
 * ============================================================================
 * Copyright © 2016-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/6/2 22:06
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */

namespace frontend\models;


use Yii;
use yii\base\Model;

class Upload extends Model
{
    public $uploadFile;

    public function rules()
    {
        return [
            ['uploadFile', 'file', 'skipOnEmpty' => false, 'extensions' => 'jpg,png'],
        ];
    }

    public function upload()
    {
        if ($this->validate()){
            //var_dump(dirname(Yii::$app->basePath));exit();
            //var_dump($this->uploadFile->baseName);exit();

            $filePath = dirname(Yii::$app->basePath) . "/web/uploads/images/" . date("Y") . "/" . date("m") . "/" . date("d") . "/";
            $fileName = date("HiiHsHis") . $this->uploadFile->baseName . '.' . $this->uploadFile->extension;
            //目录不存在则创建目录
            if (!is_dir($filePath)) {
                if (!mkdir($filePath, 0777, true)) {
                    //die('Failed to create folders...');
                    die(Yii::t('error', 'Failed to create folder. Check that the web folder has writable permissions...'));
                }
            }

            //var_dump($filePath);exit();
            //var_dump($fileName);exit();

            $this->uploadFile->saveAs($filePath . $fileName);
            return true;
        }
        return false;
    }
}