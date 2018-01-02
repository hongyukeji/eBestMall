<?php

namespace frontend\controllers;

use Yii;
use common\models\UserModel;
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
                //'except' => ['member'],
                'rules' => [
                    [
                        'actions' => ['index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    /*[
                        'actions' => ['member'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],*/
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $user_id = Yii::$app->user->identity->user_id;
        $user = UserModel::find()
            ->where(['user_id' => $user_id, 'status' => UserModel::STATUS_ACTIVE])
            //->with('')
            ->asArray()
            ->one();
        return $this->render('index', [
            'user' => $user,
        ]);
    }

    public function actionMember()
    {
        return $this->render('member');
    }
}