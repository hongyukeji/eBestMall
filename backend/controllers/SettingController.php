<?php
/**
 * ============================================================================
 * Copyright © 2016-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/3/17 12:41
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */

namespace backend\controllers;

use Yii;
use backend\models\SystemSetting;

class SettingController extends BaseController
{
    public function actionIndex()
    {
        $model = new SystemSetting();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if($model->setSystemSetting()){
                Yii::$app->session->setFlash('success', '操作成功');
            }else{
                Yii::$app->session->setFlash('error', '操作失败');
            }
            return $this->refresh();
        }

        $data = $model->getSystemSetting();
        foreach ($data as $v) {
            $model[$v->configCode] = $v->configValue;
        }

        return $this->render('index', [
            'model' => $model,
        ]);
    }

}