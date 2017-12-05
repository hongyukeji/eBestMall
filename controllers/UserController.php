<?php

namespace app\controllers;

use app\models\User;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

class UserController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['*'],
                'rules' => [
                    [
                        'actions' => ['home','index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function actionIndex($id = 1)
    {
        $user = User::findOne($id);
        return $this->render('index', [
            'user' => $user,
        ]);
    }

    public function actionHome($id = 1)
    {
        $user = User::findOne($id);
        return $this->render('home', [
            'user' => $user,
        ]);
    }
}