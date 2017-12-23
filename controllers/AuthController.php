<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use app\models\form\LoginForm;
use app\models\form\RegisterForm;
use app\models\User;
use yii\web\Response;
use yii\web\Cookie;
use app\components\authclient\clients\AuthHandler;


class AuthController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'register', 'captcha'],
                'rules' => [
                    [
                        'actions' => ['register', 'captcha', 'error'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
                'testLimit' => 1,   // 多少次相同的验证码被显示。默认值为3。一个小于或等于0的值意味着测试是无限的
                //'captchaAction' => 'auth/captcha',
                //'transparent' => true,  //显示为透明
                'backColor' => 0xF2F2F2,  //背景颜色
                'foreColor' => 0x000000,     //字体颜色
                //'width' => 100,
                //'height' => 50,
                'maxLength' => 4, //生成的验证码最大长度
                'minLength' => 4,  //生成的验证码最短长度
                'offset' => 6,        //设置字符偏移量 有效果
            ],
            'auth' => [
                'class' => 'yii\authclient\AuthAction',
                'successCallback' => [$this, 'onAuthSuccess'],
            ],
        ];
    }

    public function onAuthSuccess($client)
    {
        (new AuthHandler($client))->handle();

        /*$attributes = $client->getUserAttributes();
        // user login or signup comes here
        dump($attributes);
        dump($client);
        exit();*/
    }

    public function actionLogin()
    {
        $this->layout = 'main-base';

        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            Yii::$app->user->setReturnUrl(Yii::$app->request->referrer);
            return $this->render('login', [
                'model' => $model,
            ]);
        }

    }

    public function actionRegister()
    {
        $this->layout = "main-base";

        $model = new RegisterForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->register()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('register', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout(false);

        return $this->goHome();
    }

    public function actionCheckMobileExists()
    {
        $mobile = Yii::$app->request->post('mobile');

        if (User::findByMobilePhone($mobile)) {
            return json_encode('success');
        } else {
            return json_encode('failed');
        }
    }

    public function actionSendSmsCode()
    {
        if (Yii::$app->request->isPost) {
            $mobile = Yii::$app->request->post('mobile');
            $smsCode = rand(100000, 999999);

            $smsClient = 'yunpianSms';

            // 发送阿里短信
            if ($smsClient == 'aliSms') {
                $result = Yii::$app->sendSms->aliSms([
                    'templateCode' => 'SMS_75895046',
                    'phoneNumbers' => $mobile,
                    'templateParam' => [
                        'code' => $smsCode,
                        'product' => '注册'
                    ],
                ]);

                // TODO: 开发调试短信,正式环境删除
                if (YII_DEBUG) {
                    $result->Code = 'OK';
                }

                if ($result->Code == 'OK') {
                    $smsVerify = [
                        'smsCode' => $smsCode,
                        'mobilePhone' => $mobile,
                        'smsTime' => time(),
                    ];
                    Yii::$app->session->set('smsVerify', json_encode($smsVerify));
                    return json_encode('OK');
                } else {
                    return json_encode($result);
                }
            }

            // 发送云片短信
            if ($smsClient == 'yunpianSms') {
                $result = Yii::$app->sendSms->yunianSms([
                    'mobile' => '13952101395',
                    'text' => sprintf("验证码是%u，您正在进行%s身份验证，打死不要告诉别人哦！", $smsCode, '注册'),
                ]);

                // TODO: 开发调试短信,正式环境删除
                if (YII_DEBUG) {
                    $result['code'] = 0;
                }

                if ($result['code'] == 0) {
                    $smsVerify = [
                        'smsCode' => $smsCode,
                        'mobilePhone' => $mobile,
                        'smsTime' => time(),
                    ];
                    Yii::$app->session->set('smsVerify', json_encode($smsVerify));
                    return json_encode('OK');
                } else {
                    return json_encode($result);
                }
            }
        }

    }

    // TODO: 开发调试短信,正式环境删除
    // /auth/get-sms-code 获取验证码
    public function actionGetSmsCode()
    {
        $smsVerify = Yii::$app->session->get('smsVerify');
        dump(json_decode($smsVerify, true));
    }
}