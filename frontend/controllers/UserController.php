<?php

namespace frontend\controllers;

use common\models\User;

class UserController extends Controller
{
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