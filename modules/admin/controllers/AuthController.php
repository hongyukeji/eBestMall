<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\Admin;
use app\modules\admin\models\LoginForm;
use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

class AuthController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'user' => 'admin',
                'only' => ['*'],
                'except' => [],
                'rules' => [
                    [
                        'actions' => [],
                        'allow' => true,
                        'roles' => ['@'],   // user
                    ],
                    [
                        'actions' => ['login','error'],
                        'allow' => true,
                        'roles' => ['?'],   // guest
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [],
            ],
        ];
    }
    public function actionLogin()
    {
        if (!Yii::$app->admin->isGuest) {
            return $this->redirect('/admin');
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect('/admin');
        } else {
            Yii::$app->admin->setReturnUrl(Yii::$app->request->referrer);
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->admin->logout(false);

        return $this->redirect('/admin/auth/login');
    }

    public function actionError()
    {
        return $this->render('error');
    }
}