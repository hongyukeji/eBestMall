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

use app\models\Goods;
use Yii;
use app\models\GoodsCategory;
use yii\data\ActiveDataProvider;
use yii\base\DynamicModel;

class DemoController extends Controller
{
    public function actionIndex()
    {
        $model = new GoodsCategory();
        $categories = $model->getOptions();
        $list = array_merge([0 => '顶级分类'], $categories);
        dump($list);
    }

    public function actionCategory()
    {
        /*$model = new Category();
        $categories = $model->getMainCategories();
        dump($categories);*/
        $query = GoodsCategory::find();
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
        $categories = GoodsCategory::find()
            ->where([
                'parent_id' => GoodsCategory::STATUS_DELETED,
                'is_show' => GoodsCategory::STATUS_ACTIVE,
                'status' => GoodsCategory::STATUS_ACTIVE,
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
        $model = new GoodsCategory();
        $data = $model->getGoodsNav(164);
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

    public function actionAliSms()
    {
        $result = Yii::$app->sendSms->aliSms([
            'signName' => '鸿宇科技HY',
            'templateCode' => 'SMS_75895046',
            'phoneNumbers' => '13952101395,13800138000',
            'templateParam' => [
                'code' => '123456',
                'product' => 'eBestMall'
            ],
        ]);

        print_r($result);

        /*$code = rand(100000,999999);
        dump($code);*/

        /*$cookies = Yii::$app->request->cookies;
        $smsCode = $cookies->getValue('smsCode', '000000');
        dump($smsCode);*/

        /*if (!Yii::$app->session->isActive) {
            Yii::$app->session->open();
        }

        //取得验证码和短信发送时间session
        $smsCode = intval(Yii::$app->session->get('smsCode'));
        dump($smsCode);*/

    }

    public function actionAliSmsQuery()
    {
        $result = Yii::$app->sendSms->aliSmsQuery([
            'phoneNumbers' => '13952101395',
            'sendDate' => '20171205',
        ]);

        print_r($result);
    }

    public function actionYunPianSms()
    {
        // 云片短信

        //$name = "鸿宇多用户商城";
        //$code = 123456;
        //$txt = sprintf("There are %u million cars in %s.",$number,$str);
        //$text = sprintf("【%s】您的验证码为%u", $name, $code);
        //$text = sprintf("验证码是%u，您正在进行%s身份验证，打死不要告诉别人哦！", $code, '注册');
        //echo $txt;

        $result = Yii::$app->sendSms->yunianSms([
            'mobile' => '13952101395',
            'text' => sprintf("验证码是%u，您正在进行%s身份验证，打死不要告诉别人哦！", '123456', '注册'),
        ]);

        // php DEMO https://www.yunpian.com/doc/zh_CN/introduction/demos/php.html
        // 返回码总体说明 https://www.yunpian.com/doc/zh_CN/returnValue/list.html
        // 返回值示例 https://www.yunpian.com/doc/zh_CN/returnValue/example.html
        // 常见的返回码 https://www.yunpian.com/doc/zh_CN/returnValue/common.html

        //dump($result['code']);
        dump($result['code']);
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
            ['ebestmall@qq.com', 'hongyukeji@126.com'],
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
            ['ebestmall@qq.com', 'hongyukeji@126.com'],
            '测试邮件',
            'default',
            [
                'html' => 'html',
                'content' => ''
            ]
        );
    }

    public function actionEditFile()
    {
        Yii::$app->test->log('This a test file.');
    }

    public function actionImages()
    {
        $data = [
            '0' => [
                'img' => '/static/img/temp/temp-goods_img_001_big.jpg',
                'thumbnail' => '/static/img/temp/temp-goods_img_001_small.jpg',
                'sort_order' => '100',
            ],
            '1' => [
                'img' => '/static/img/temp/temp-goods_img_002_big.jpg',
                'thumbnail' => '/static/img/temp/temp-goods_img_002_small.jpg',
                'sort_order' => '100',
            ],
            '2' => [
                'img' => '/static/img/temp/temp-goods_img_001_big.jpg',
                'thumbnail' => '/static/img/temp/temp-goods_img_001_small.jpg',
                'sort_order' => '100',
            ],
        ];

        $model = Goods::findOne(1);
        $model->goods_images = json_encode($data);
        $result = $model->save();
        dump($result);

        //dump(json_decode(json_encode($data), true));
    }

    public function actionVersion()
    {
        dump(Yii::$app->version);
    }

    public function actionValidate(){
        $username = '&&_风风风风';
        $model = new DynamicModel(compact('username'));
        $model->addRule(['username'], 'trim')
            ->addRule(['username'], 'required')
            ->addRule(['username'], 'string', ['min' => 4, 'max' => 32])
            ->addRule(['username'], 'unique', ['targetClass' => '\app\models\User', 'message' => Yii::t('app/error', 'This username has already been taken.')])
            ->addRule('username', 'match', ['pattern' => '/^[0-9a-zA-Z\x{4e00}-\x{9fa5}\_-]+$/u', 'message' => '格式错误，仅支持中文、字母、数字、“-”“_”的组合，4-32个字符'])
            ->validate();

        if ($model->hasErrors()) {
            // validation fails
            echo '验证失败';
        } else {
            // validation succeeds
            echo '验证成功';
        }
    }
    public function actionAlert()
    {
        Yii::$app->getSession()->setFlash('error', [
            Yii::t('app', "error User with the same username as in {client} account already exists but isn't linked to it. Login using username first to link it.", ['client' => '测试标题']),
        ]);
        Yii::$app->getSession()->setFlash('info', [
            Yii::t('app', "info User with the same username as in {client} account already exists but isn't linked to it. Login using username first to link it.", ['client' => '测试标题']),
        ]);
        Yii::$app->getSession()->setFlash('success', [
            Yii::t('app', "success User with the same username as in {client} account already exists but isn't linked to it. Login using username first to link it.", ['client' => '测试标题']),
        ]);
        return $this->render('alert');
    }

    public function actionRedirect01()
    {
        $this->redirect(array('demo/redirect02','openid'=>'123456','username'=>'ceshi','avatar_url'=>'/img'));
    }

    public function actionRedirect02()
    {
        dump(Yii::$app->request->get());
    }
    public function actionSession03()
    {
        $userinfo['openid'] = '123456789';
        $userinfo['username'] = 'ceshi';
        $userinfo['avatar_url'] = '/avatar_url';
        $session = Yii::$app->session;
        $session['userinfo'] = $userinfo;
    }
}