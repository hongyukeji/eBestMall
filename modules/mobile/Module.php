<?php

namespace app\modules\mobile;

use Yii;

/**
 * mobile module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\mobile\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here

        Yii::configure($this, require __DIR__ . '/config.php');

        $this->layout = 'main-mobile';
    }
}
