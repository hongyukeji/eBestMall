<?php

namespace frontend\controllers;

use Yii;
use common\models\SearchModel;

class SearchController extends Controller
{
    public function actionIndex()
    {
        $keywords = Yii::$app->request->get('keywords');

        $model = new SearchModel();
        $goodsList = $model->getGoods($keywords);

        return $this->render('index', [
            'goodsKeywords' => $keywords,
            'goodsList' => $goodsList,
        ]);
    }
}