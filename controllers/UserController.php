<?php

namespace app\controllers;

use Yii;
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

    public function actionIndex()
    {
        $user = User::findOne(Yii::$app->user->identity->user_id);
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