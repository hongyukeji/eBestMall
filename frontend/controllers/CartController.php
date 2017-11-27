<?php

namespace frontend\controllers;


class CartController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}