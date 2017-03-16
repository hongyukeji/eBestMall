<?php
namespace backend\controllers;

use backend\models\ResetPasswordForm;
use Yii;
use yii\base\InvalidParamException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use backend\models\LoginForm;
use backend\models\PasswordResetRequestForm;
use yii\web\BadRequestHttpException;


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
                        'actions' => ['login', 'error', 'retrieve-password', 'reset-password'],
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
        $model = new PasswordResetRequestForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', '找回密码邮件发送成功');
                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', '找回密码邮件发送失败, 请检查用户名和邮箱是否正确');
            }
            return $this->refresh();
        }
        return $this->render('retrievePassword', ['model' => $model]);
    }

    /*
     * 重置密码
     */
    public function actionResetPassword($token)
    {
        $this->layout = 'main-login';

        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->resetPassword()) {
                Yii::$app->session->setFlash('success', '密码修改成功');
                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', '密码修改失败');
            }
            return $this->refresh();
        }
        return $this->render('resetPassword', ['model' => $model]);
    }
}
