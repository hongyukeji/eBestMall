<?php
/**
 * ============================================================================
 * Copyright © 2016-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/2/9 22:33
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */

namespace frontend\controllers;

use Yii;
use frontend\models\EntryForm;
use yii\data\Pagination;
use common\models\Country;
use Detection\MobileDetect;

class TestController extends BaseController
{
    public function actionIndex()
    {
        $query = Country::find();
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
        $countries = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }

    public function actionEntry()
    {
        $model = new EntryForm;
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // 验证 $model 收到的数据
            // 做些有意义的事 ...
            return $this->render('entry-confirm', ['model' => $model]);
        } else {
            // 无论是初始化显示还是数据验证错误
            return $this->render('entry', ['model' => $model]);
        }
    }

    public function actionTest()
    {
        $device = new MobileDetect();
        if ($device->isMobile()){
            echo "mobile";
        } else if ($device->isTablet()){
            echo "tablet";
        }else {
            echo "desktop";
        }
    }

    public function actionSession()
    {
        // Session test
        $session = Yii::$app->session;

        $session['language'] = 'en-US';
        $language = $session['language'];

        dump($language);

    }

    public function actionShowSession()
    {
        $session = Yii::$app->session;
        $language = $session['language'];

        dump($language);
        dump(date("Y-m-d H:i",'1495118417') );
        //获取用户session id
        dump(Yii::$app->session->getId());
    }

    public function actionDelSession()
    {
        Yii::$app->session->removeAll();
        Yii::$app->session->destroy();
    }
}