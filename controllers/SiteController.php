<?php

namespace app\controllers;

use Yii;

//use yii\web\Controller;
use yii\web\Response;

use app\models\ContactForm;
use app\models\Category;

class SiteController extends Controller
{
    protected $except = ['index', 'contact', 'about'];

    public function actionIndex()
    {
        $category = new Category();
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
}
