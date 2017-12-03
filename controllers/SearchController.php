<?php

namespace app\controllers;

use Yii;
use app\models\Search;

class SearchController extends Controller
{
    protected $except = ['index'];

    public function actionIndex()
    {
        $keywords = Yii::$app->request->get('keywords');

        $model = new Search();
        $goodsList = $model->getGoods($keywords);

        return $this->render('index', [
            'goodsKeywords' => $keywords,
            'goodsList' => $goodsList,
        ]);
    }
}