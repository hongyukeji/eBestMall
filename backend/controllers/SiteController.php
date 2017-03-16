<?php
namespace backend\controllers;

use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use backend\models\LoginForm;
use backend\models\AdminUserForm;

/**
 * Site controller
 */
class SiteController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error', 'retrieve-password', 'retrieve-password-reset'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout', 'index'],
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

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /*
     * 找回密码
     */
    public function actionRetrievePassword()
    {
        $this->layout = 'main-login';
        $model = new AdminUserForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            //var_dump(Yii::$app->request->post());die;
            if ($model->sendEmail()) {
                $data = [];
                $data['name'] = $model->username;
                $data['url'] = Yii::$app->urlManager->createAbsoluteUrl([
                    'site/retrieve-password-reset',
                    'timeStamp' => time(),
                    'adminUser' => $data['name'],
                    'token' => $model->createToken($data['name'], time()),
                ]);

                $mailer = Yii::$app->mailer->compose('seekpass', ['data' => $data]);
                $mailer->setFrom("admin@hongyuvip.com");
                $mailer->setTo("admin@hongyuvip.com");
                $mailer->setSubject("eBestMall Test Email");
                if ($mailer->send()) {
                    Yii::$app->session->setFlash('success', '找回密码邮件发送成功');
                    return $this->goHome();
                }
            } else {
                Yii::$app->session->setFlash('error', '找回密码邮件发送失败, 请检查用户名和邮箱是否正确');
            }
            return $this->refresh();
        }
        return $this->render('retrieve-password', ['model' => $model]);
    }

    /*
     * 重置密码
     */
    public function actionRetrievePasswordReset()
    {
        $this->layout = 'main-login';
        $model = new AdminUserForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            $time = Yii::$app->request->get("timeStamp");
            $adminuser = Yii::$app->request->get("adminUser");
            $token = Yii::$app->request->get("token");
            $mytoken = $model->createToken($adminuser, $time);
            if ($token != $mytoken) {
                $this->redirect(['site/login']);
                Yii::$app->end();
            }
            if (time() - $time > 300) {
                $this->redirect(['site/login']);
                Yii::$app->end();
            }
//            if ($model->resetPassword()) {
//                Yii::$app->session->setFlash('success', '密码修改成功');
//                return $this->goHome();
//            } else {
//                Yii::$app->session->setFlash('error', '密码修改失败');
//            }
        }
        return $this->render('retrieve-password-reset', ['model' => $model]);
    }
}
