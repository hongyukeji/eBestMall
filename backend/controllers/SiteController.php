<?php
namespace backend\controllers;

use backend\models\AdminUserForm;
use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use backend\models\LoginForm;

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
        if($model->load(Yii::$app->request->post()) && $model->validate()){
            if($model->sendEmail()){
                //Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                //Yii::$app->getSession()->setFlash('success', '邮件发送成功');
                //return $this->goHome();
            }else{
                //Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }
        return $this->render('retrieve-password',[ 'model' => $model]);
    }

    /*
     * 重置密码
     */
    public function actionRetrievePasswordReset()
    {
        $this->layout = 'main-login';
        $model = new AdminUserForm();
        return $this->render('retrieve-password-reset',[ 'model' => $model]);
    }
}
