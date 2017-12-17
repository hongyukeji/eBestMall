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
                        'actions' => ['home', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $user_id = Yii::$app->user->identity->user_id;
        $user = User::find()
            ->where(['user_id' => $user_id, 'status' => User::STATUS_ACTIVE])
            //->with('')
            ->asArray()
            ->one();
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