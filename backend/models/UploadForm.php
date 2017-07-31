<?php
/**
 * ============================================================================
 * Copyright © 2016-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/3/20 12:52
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */
namespace backend\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    public $imageFile;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg', 'maxFiles' => 10],
        ];
    }

    public function upload()
    {
        //文件上传存放的目录
        $dir = "web/uploads/images/" . date("Y") . "/" . date("m") . "/" . date("d");

        //目录不存在则创建目录
        if (!is_dir($dir)) {
            if (!mkdir($dir, 0777, true)) {
                die('Failed to create folders...');
            }
        }

        if ($this->validate()) {
            foreach ($this->imageFiles as $this) {
                $fileName = date("HiiHsHis") . $this->imageFile->baseName . "." . $this->imageFile->extension;
                $dir = $dir . "/" . $fileName;
                $this->imageFile->saveAs($dir);

                //资源存储根路径
                $sitePath = Yii::$app->params['sitePath'];
                $uploadSuccessPath[] = $sitePath . $dir;
            }

            return $uploadSuccessPath;
        } else {
            return false;
        }
    }
}

