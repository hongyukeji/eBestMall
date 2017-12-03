<?php

namespace app\controllers;

use app\models\User;


class UserController extends Controller
{
    protected $mustValidate = [];

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionHome($id = 1)
    {
        $user = User::findOne($id);
        return $this->render('home',[
            'user' => $user,
        ]);
    }
}