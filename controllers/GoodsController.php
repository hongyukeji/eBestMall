<?php
/**
 * eBestMall
 * ============================================================================
 * Copyright © 2015-2018 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2018/3/25 10:13
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */

namespace app\controllers;

use app\services\GoodsService;
use Yii;
use app\common\controllers\BaseController;

class GoodsController extends BaseController
{
    public function actionIndex()
    {
        $request = Yii::$app->request;
        if ($request->isGet) {
            $goods_id = $request->get('id');
            $goods_sku_id = $request->get('sku_id');
            if (!empty($goods_id)) {
                $goods_service = new GoodsService();
                if (!empty($goods_sku_id)) {
                    $goods_info = $goods_service->getGoodsInfo($goods_id, $goods_sku_id);
                } else {
                    $goods_info = $goods_service->getGoodsInfo($goods_id);
                }
                return $this->render('index', compact('goods_info'));
            } else {
                return $this->redirect('site/error');
            }
        } else {
            return false;
        }
    }

    public function actionTest()
    {
        //
    }
}