<?php

namespace cms\controllers;


use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;

class ToolsController extends Controller
{
    public function actions()
    {
        return [
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
                //'captchaAction' => 'auth/captcha',
                //'transparent' => true,  //显示为透明
                'backColor' => 0xF2F2F2,  //背景颜色
                'foreColor' => 0x000000,     //字体颜色
                'width' => 80,
                'height' => 35,
                'maxLength' => 4, //生成的验证码最大长度
                'minLength' => 4,  //生成的验证码最短长度
                'offset' => 5,        //设置字符偏移量 有效果
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionToggleCase()
    {
        return $this->render('toggle-case');
    }
}