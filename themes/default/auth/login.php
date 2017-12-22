<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \app\models\form\LoginForm */

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\assets\AppAsset;
AppAsset::register($this);

$this->registerCssFile('/static/css/login.css', ['depends' => AppAsset::className()]);

$this->title = '登录';

?>
<div class="site-login">
    <div class="header-login">
        <div class="w">
            <div class="logo">
                <a href="<?= Yii::$app->homeUrl ?>"><img src="/static/img/public/logo.png" alt=""></a>
                <span class="logo-salutatory">欢迎登陆</span>
                <div class="logo-link"><a href="javascript:;"><i class="icon-chat"></i>登录页面，调查问卷</a></div>
            </div>
        </div>
    </div>

    <div class="content-login" style="background-color: #323234;">
        <div class="w">
            <div class="content-activity">
                <a href="javascript:;"><img src="/static/img/temp/login-activity-001.jpg" alt=""></a>
            </div>
            <div class="content-login-form">
                <div class="content-login-form-header"><h3>账户登陆</h3></div>
                <div class="content-login-form-main">
                    <div class="msg-wrap"></div>
                    <?php $form = ActiveForm::begin(['id' => 'form-login']); ?>

                    <?= $form->field($model, 'username',[
                        'options' =>['class'=>'form-group'],
                        'template' => '<div class="input-group"><label class="input-group-addon"><i class="fas fa-user fa-fw"></i></label>{input}</div>{error}',
                    ])->textInput(['placeholder' => '邮箱/用户名/已验证手机','autocomplete' => 'off','tabindex' => '1']) ?>

                    <?= $form->field($model, 'password',[
                        'options' =>['class'=>'form-group'],
                        'template' => '<div class="input-group"><label class="input-group-addon"><i class="fas fa-lock fa-fw"></i></label>{input}</div>{error}',
                    ])->textInput(['placeholder' => '密码','autocomplete' => 'off','type'=>'password','tabindex' => '2']) ?>

                        <div class="form-checkbox">
                            <input type="checkbox" name="LoginForm[rememberMe]" value="1" checked="checked" id="loginform-checkbox">
                            <label for="loginform-checkbox">自动登录</label>
                            <a href="javascript:;">忘记密码</a>
                        </div>
                        <div class="form-btn">
                            <?= Html::submitButton('登&nbsp;&nbsp;录') ?>
                        </div>
                    <?php ActiveForm::end(); ?>
                </div>
                <div class="content-login-form-footer">
                    <?= yii\authclient\widgets\AuthChoice::widget([
                        'baseAuthUrl' => ['auth/auth'],
                        'popupMode' => false,
                        'options' => [
                            'class' => 'auth-clients',
                        ],
                    ]) ?>
                    <div class="link"><a href="<?= Url::to(['/auth/register']) ?>"><i class="icon-chevron-circle-right"></i>立即注册</a></div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-login">
        <div class="w">
            <ul>
                <li><span>|</span><a href="javascript:;">关于我们</a></li>
                <li><span>|</span><a href="javascript:;">联系我们</a></li>
                <li><span>|</span><a href="javascript:;">人才招聘</a></li>
                <li><span>|</span><a href="javascript:;">商家入驻</a></li>
                <li><span>|</span><a href="javascript:;">广告服务</a></li>
                <li><span>|</span><a href="javascript:;">友情链接</a></li>
                <li><span>|</span><a href="javascript:;">帮助中心</a></li>
            </ul>
            <p>Copyright © 2015 - 2017  eBestMall 鸿宇科技 版权所有</p>
        </div>
    </div>
</div>
