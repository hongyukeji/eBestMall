<?php

namespace app\modules\admin;

use Yii;

/**
 * admin module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\admin\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here

        Yii::configure($this, require __DIR__ . '/config.php');

        $this->layout = 'main';
        $this->defaultRoute = 'home';
        Yii::$app->errorHandler->errorAction = '/admin/auth/error';
    }
}
