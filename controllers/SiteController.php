<?php

namespace app\controllers;

use Yii;

//use yii\web\Controller;
use yii\web\Response;

use app\models\ContactForm;
use app\models\GoodsCategory;

class SiteController extends Controller
{
    public function actionIndex()
    {
        $category = new GoodsCategory();
        $categories = $category->getMainCategories();
        return $this->render('index', compact('categories'));
    }


    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionError()
    {
        $exception = Yii::$app->errorHandler->exception;
        if ($exception !== null) {
            return $this->render('error', ['exception' => $exception]);
        }
    }
}
