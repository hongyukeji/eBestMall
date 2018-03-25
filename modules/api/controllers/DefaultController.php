<?php

namespace app\modules\api\controllers;

use app\common\controllers\BaseController;

/**
 * Default controller for the `api` module
 */
class DefaultController extends BaseController
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
