<?php

namespace frontend\modules\user\controllers;

use yii\web\Controller;

/**
 * Default controller for the `user` module
 */
class HomeController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
