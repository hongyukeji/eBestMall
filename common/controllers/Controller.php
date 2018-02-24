<?php

namespace common\controllers;

use Yii;
use yii\web\Controller as BaseController;
use Detection\MobileDetect;


class Controller extends BaseController
{
    public function init()
    {
        parent::init();

        $language = Yii::$app->request->cookies->getValue('language', 'zh-CN');
        Yii::$app->language = $language;

        // 判断是否是移动设备访问
        /*$device = new MobileDetect();
        if ($device->isMobile()) {
            $this->redirect(['/mobile']);
        }*/

    }
}