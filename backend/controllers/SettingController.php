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
use common\models\Config;


class SettingController extends BaseController
{
    public function actionIndex()
    {
        $model = new SystemSetting();
        $settingMark = 'SystemSetting';

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            foreach ($model as $k => $v) {
                $model = Config::find()->where(['configCode' => $k])->one();
                if ($model) {
                    $model->configValue = addslashes($v);
                } else {
                    $model = new Config();
                    $model->configCode = $k;
                    $model->configValue = addslashes($v);
                    $model->configName = $settingMark;
                }
                $model->save();
            }
            Yii::$app->session->setFlash('success', '操作成功');
            return $this->refresh();
        }

        $data = Config::find()->orderBy(['id' => SORT_DESC])->where(['configName' => $settingMark])->all();

        foreach ($data as $v) {
            $model[$v->configCode] = $v->configValue;
        }

        return $this->render('index', [
            'model' => $model,
        ]);
    }

}