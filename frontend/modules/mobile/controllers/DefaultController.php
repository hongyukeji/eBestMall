<?php

namespace frontend\modules\mobile\controllers;

use yii\web\Controller;

/**
 * Default controller for the `mobile` module
 */
class DefaultController extends Controller
{
    public $layout='main-mobile';

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $this->layout = 'main-mobile';
        return $this->render('index');
    }
}
