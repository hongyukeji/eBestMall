<?php

namespace frontend\controllers;

use Yii;
use yii\web\Cookie;

class SettingController extends Controller
{
    public function actionLanguage()
    {
        $language = Yii::$app->request->get('language');

        $cookies = Yii::$app->response->cookies;

        $cookies->add(new Cookie([
            'name' => 'language',
            'value' => $language,
            'expire' => time() + 3600 * 24 * 30 * 12
        ]));

        Yii::$app->user->setReturnUrl(Yii::$app->request->referrer);

        return $this->goBack();
    }
}