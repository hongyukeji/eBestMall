<?php

namespace app\modules\seller;

use Yii;

/**
 * seller module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\seller\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here

        Yii::configure($this, require __DIR__ . '/config.php');
    }
}
