<?php
/**
 * eBestMall
 * ============================================================================
 * Copyright 2015-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768 & 13391528  Time: 2017/11/18 13:55
 * E-mail: hongyukeji@126.com
 * ============================================================================
 */

namespace frontend\controllers;

use common\models\Goods;

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