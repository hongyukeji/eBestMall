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
 * Author: Shadow  QQ: 1527200768 & 13391528  Time: 2017/11/19 15:38
 * E-mail: hongyukeji@126.com
 * ============================================================================
 */

namespace app\controllers;

use Yii;
use app\models\Category;
use yii\data\ActiveDataProvider;

class DemoController extends Controller
{
    public function actionIndex()
    {
        $model = new Category();
        $categories = $model->getOptions();
        $list = array_merge([0 => '顶级分类'], $categories);
        dump($list);
    }

    public function actionCategory()
    {
        /*$model = new Category();
        $categories = $model->getMainCategories();
        dump($categories);*/
        $query = Category::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => false
        ]);

        return $this->render('category', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionCategory01()
    {
        //$category = Category::findOne(1)->childCategory()->all();
        $categories = Category::find()
            ->where([
                'parent_id' => Category::STATUS_DELETED,
                'is_show' => Category::STATUS_ACTIVE,
                'status' => Category::STATUS_ACTIVE,
            ])
            ->orderBy('sort_order DESC')
            ->all();
        dump($categories);
    }

    public function actionInfiniteCategory()
    {
        // demo/infinite-category1
        $items = array(
            1 => array('id' => 1, 'pid' => 0, 'name' => '江西省'),
            2 => array('id' => 2, 'pid' => 0, 'name' => '黑龙江省'),
            3 => array('id' => 3, 'pid' => 1, 'name' => '南昌市'),
            4 => array('id' => 4, 'pid' => 2, 'name' => '哈尔滨市'),
            5 => array('id' => 5, 'pid' => 2, 'name' => '鸡西市'),
            6 => array('id' => 6, 'pid' => 4, 'name' => '香坊区'),
            7 => array('id' => 7, 'pid' => 4, 'name' => '南岗区'),
            8 => array('id' => 8, 'pid' => 6, 'name' => '和兴路'),
            9 => array('id' => 9, 'pid' => 7, 'name' => '西大直街'),
            10 => array('id' => 10, 'pid' => 8, 'name' => '东北林业大学'),
            11 => array('id' => 11, 'pid' => 9, 'name' => '哈尔滨工业大学'),
            12 => array('id' => 12, 'pid' => 8, 'name' => '哈尔滨师范大学'),
            13 => array('id' => 13, 'pid' => 1, 'name' => '赣州市'),
            14 => array('id' => 14, 'pid' => 13, 'name' => '赣县'),
            15 => array('id' => 15, 'pid' => 13, 'name' => '于都县'),
            16 => array('id' => 16, 'pid' => 14, 'name' => '茅店镇'),
            17 => array('id' => 17, 'pid' => 14, 'name' => '大田乡'),
            18 => array('id' => 18, 'pid' => 16, 'name' => '义源村'),
            19 => array('id' => 19, 'pid' => 16, 'name' => '上坝村'),
            20 => array('id' => 20, 'pid' => 0, 'name' => '广东省'),
            21 => array('id' => 21, 'pid' => 20, 'name' => '广州市'),
        );
        $tree = array();
        foreach ($items as $id => $item) {
            if ($item['pid']) {
                $items[$item['pid']][$item['id']] = $items[$item['id']];
                $tree[] = $id;
            }
        }
        foreach ($tree as $u) {
            unset($items[$u]);
        }
        echo "<pre>";
        print_r($items);
    }

    public function actionCategory02()
    {
        $model = new Category();
        $data = $model->getParent(164);
        dump($data);
    }

    public function actionTemps01()
    {
        //
    }

    public function actionSession()
    {
        $session = Yii::$app->session;
        // 判断session是否开启
        if (!$session->isActive) {
            $session->open();
        }

        // 判断language语言缓存是否存在
        if ($session->has('language')) {
            Yii::$app->language = $session->get('language');
        } else {
            Yii::$app->language = 'zh-CN';
        }
    }

    public function actionSessionSet()
    {
        $session = Yii::$app->session;
        //$session->set('language','zh-CN');
        $result = $session->set('language', 'en-US');
        dump($result);
    }

    public function actionSessionGet()
    {
        $session = Yii::$app->session;
        dump($session->has('language'));
        $language = $session->get('language');
        dump($language);
    }

    public function actionCookiesSet()
    {
        // 从 "response" 组件中获取 cookie 集合(yii\web\CookieCollection)
        $cookies = Yii::$app->response->cookies;

        // 在要发送的响应中添加一个新的 cookie
        $cookies->add(new \yii\web\Cookie([
            'name' => 'language',
            'value' => 'zh-CN',
            'expire' => time() + 3600 * 24 * 30
        ]));
    }

    public function actionCookiesDel()
    {
        $cookies = Yii::$app->response->cookies;
        // 删除一个 cookie
        $cookies->remove('language');
        // 等同于以下删除代码
        //unset($cookies['language']);
    }

    public function actionCookiesGet()
    {
        // 从 "request" 组件中获取 cookie 集合(yii\web\CookieCollection)
        $cookies = Yii::$app->request->cookies;

        // 获取名为 "language" cookie 的值，如果不存在，返回默认值 "en"
        $language = $cookies->getValue('language', 'en');

        dump($language);

        /*// 另一种方式获取名为 "language" cookie 的值
        if (($cookie = $cookies->get('language')) !== null) {
            $language = $cookie->value;
        }

        // 可将 $cookies 当作数组使用
        if (isset($cookies['language'])) {
            $language = $cookies['language']->value;
        }

        // 判断是否存在名为"language" 的 cookie
        if ($cookies->has('language')) {
            echo 'yes';
        }
        if (isset($cookies['language'])) {
            echo 'yes';
        }*/
    }

    public function actionSms()
    {
        $result = Yii::$app->sendSms->aliSms([
            'signName' => '鸿宇科技',
            'templateCode' => 'SMS_75895046',
            'phoneNumbers' => '13952101395,13800138000',
            'templateParam' => [
                'code' => '123456',
                'product' => 'eBestMall'
            ],
        ]);

        print_r($result);
    }

    public function actionSmsQuery()
    {
        $result = Yii::$app->sendSms->aliSmsQuery([
            'phoneNumbers' => '13952101395',
            'sendDate' => '20171205',
        ]);

        print_r($result);
    }

    public function actionMail()
    {
        $result = Yii::$app->sendMail->send(
            'ebestmall@qq.com',
            '测试邮件',
            '这是一封测试邮件'
        );

        print_r($result);
    }

    public function actionMails()
    {
        $result = Yii::$app->sendMail->sends(
            ['ebestmall@qq.com','admin@hongyuvip.com'],
            '测试邮件',
            '这是一封测试邮件'
        );

        print_r($result);
    }
    public function actionMailTemp()
    {
        $result = Yii::$app->sendMail->sendTemplate(
            'ebestmall@qq.com',
            '测试邮件',
            'default',
            [
                'html' => 'html',
                'content' => ''
            ]
        );

        print_r($result);
    }
    public function actionMailTemps()
    {

        $result = Yii::$app->sendMail->sendTemplates(
            ['ebestmall@qq.com','admin@hongyuvip.com'],
            '测试邮件',
            'default',
            [
                'html' => 'html',
                'content' => ''
            ]
        );
    }
}