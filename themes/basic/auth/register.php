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
    'inputTemplate' => "{input}<span class='pull-right'><a class=\"user-registration-protocol\" data-toggle=\"modal\" data-target=\"#registrationProtocol\">《用户注册协议》</a></span>"
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
                <?php $form = ActiveForm::begin(['id' => 'form-register', 'options' => ['autocomplete' => 'off']]); ?>

                <?= $form->field($model, 'username', ['options' => ['class' => 'form-item']])->textInput(['placeholder' => '您的账户名和登录名']) ?>

                <?= $form->field($model, 'password', ['options' => ['class' => 'form-item']])->passwordInput(['placeholder' => '建议至少使用两种字符组合']) ?>

                <?= $form->field($model, 're_password', ['options' => ['class' => 'form-item']])->passwordInput(['placeholder' => '请再次输入密码']) ?>

                <?= $form->field($model, 'email', ['options' => ['class' => 'form-item']])->textInput(['placeholder' => '建议使用常用邮箱']) ?>

                <?= $form->field($model, 'mobile_phone', ['options' => ['class' => 'form-item']])->textInput(['placeholder' => '建议使用常用手机号']) ?>


                <?= $form->field($model, 'verify_code', ['options' => ['class' => 'form-item verify-code-item']])->widget(\yii\captcha\Captcha::className(), [
                    'name' => 'verify_code',
                    'captchaAction' => 'auth/captcha',
                    'imageOptions' => ['id' => 'captchaimg', 'title' => '换一个', 'alt' => '换一个', 'style' => 'cursor:pointer;float: right;'],
                    'template' => '<div class="col-lg-5 verify-code-item-div">{input}</div>{image}',
                ]) ?>

                <?= $form->field($model, 'rememberMe', $fieldOptions)->checkbox(['label' => Yii::t('app', 'read_and_agree')]) ?>

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

    <!-- 用户注册协议 模态框（Modal） -->
    <div class="modal fade" id="registrationProtocol" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="width: 900px;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">用户注册协议</h4>
                </div>
                <div class="modal-body" style="height:350px;overflow:auto;">
                    用户注册协议内容
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    <button type="button" class="btn btn-success" data-dismiss="modal">同意并继续</button>
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
