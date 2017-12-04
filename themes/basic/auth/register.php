<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \app\models\form\RegisterForm */

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\assets\AppAsset;

AppAsset::register($this);

$this->registerCssFile('/static/css/register.css', ['depends' => AppAsset::className()]);

$this->title = '注册';

$fieldOptions = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='pull-right'><a href=\"javascript:;\">《用户注册协议》</a></span>"
];
?>
<div class="site-signup">
    <div class="header-register">
        <div class="w">
            <div class="logo">
                <a href="<?= Yii::$app->homeUrl ?>"><img src="/static/img/public/logo.png" alt=""></a>
                <span class="logo-salutatory">欢迎注册</span>
                <div class="logo-link">已有账号？ <a href="<?= Url::to(['/auth/login']) ?>">请登录</a></div>
            </div>
        </div>
    </div>

    <div class="content-register">
        <div class="w">
            <div class="content-register-from">
                <?php $form = ActiveForm::begin(['id' => 'form-register']); ?>

                <?= $form->field($model, 'username', ['options' => ['class' => 'form-item']])->textInput(['placeholder' => '您的账户名和登录名', 'autocomplete' => 'off']) ?>

                <?= $form->field($model, 'password', ['options' => ['class' => 'form-item']])->passwordInput(['placeholder' => '建议至少使用两种字符组合', 'autocomplete' => 'off']) ?>

                <?= $form->field($model, 'password_repeat', ['options' => ['class' => 'form-item']])->passwordInput(['placeholder' => '请再次输入密码', 'autocomplete' => 'off']) ?>

                <?= $form->field($model, 'email', ['options' => ['class' => 'form-item']])->textInput(['placeholder' => '建议使用常用邮箱', 'autocomplete' => 'off']) ?>

                <?= $form->field($model, 'mobile_phone', ['options' => ['class' => 'form-item']])->textInput(['placeholder' => '建议使用常用手机号', 'autocomplete' => 'off']) ?>

                <?= $form->field($model, 'agreement', $fieldOptions)->checkbox([ 'label' => Yii::t('app', 'read_and_agree')]) ?>

                <!--<div class="form-group has-feedback field-registerform-agreement required">
                    <div class="checkbox">
                        <label for="registerform-agreement">
                            <input type="hidden" name="RegisterForm[agreement]" value="0"><input type="checkbox" id="registerform-agreement" name="RegisterForm[agreement]" value="1" checked=""><span class="pull-right"><a href="javascript:;">《用户注册协议》</a></span>
                            阅读并同意
                        </label>
                        <p class="help-block help-block-error"></p>
                    </div>
                </div>-->

                <div class="form-btn">
                    <?= Html::submitButton('立即注册') ?>
                </div>

                <?php ActiveForm::end(); ?>

                <div class="content-register-from-link">
                    <div class="content-register-from-link-third-party-qq content-register-from-link-third-party">
                        <a href="javascript:;">
                            <i class="icon-qq"></i>
                            <span>QQ 用户注册</span>
                        </a>
                    </div>
                    <div class="content-register-from-link-third-party-wechat content-register-from-link-third-party">
                        <a href="javascript:;">
                            <i class="icon-wechat"></i>
                            <span>微信用户注册</span>
                        </a>
                    </div>
                    <div class="content-register-from-link-third-party-phone-fast-reg"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-register">
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
            <p>Copyright © 2015 - 2017 eBestMall 鸿宇科技 版权所有</p>
        </div>
    </div>
</div>
