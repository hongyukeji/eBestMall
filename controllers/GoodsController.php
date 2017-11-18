<?php

namespace app\controllers;

use app\models\Goods;

class GoodsController extends Controller
{
    public function actionIndex($id, $sku_id = '')
    {
        // TODO: sku 待开发

        $model = Goods::findOne($id);
        return $this->render('index', [
            'model' => $model,
        ]);
    }

}