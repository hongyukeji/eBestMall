<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\Admin;
use app\modules\admin\models\AdminLoginForm;
use Yii;
use yii\web\Controller;

class AuthController extends Controller
{
    public function actionLogin()
    {
        $model = new AdminLoginForm();
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}