<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use ebestmall\web\EbmAsset;

EbmAsset::register($this);

$baseUrl = $this->assetBundles[EbmAsset::className()]->baseUrl;
$this->registerCssFile($baseUrl .'/css/register.css', ['depends' => EbmAsset::className()]);

$this->title = '注册';
?>
<div class="site-signup">
    <div class="header-register">
        <div class="w">
            <div class="logo">
                <a href="<?= Yii::$app->homeUrl ?>"><img src="<?= Html::encode($baseUrl) ?>/img/public/logo.png" alt=""></a>
                <span class="logo-salutatory">欢迎注册</span>
                <div class="logo-link">已有账号？ <a href="<?= Url::to(['site/login']) ?>">请登录</a></div>
            </div>
        </div>
    </div>

    <div class="content-register">
        <div class="w">
            <div class="content-register-from">
                <?php $form = ActiveForm::begin(['id' => 'form-register']); ?>
                    <div class="form-item">
                        <label>用　户　名</label>
                        <input type="text" placeholder="您的账户名和登录名" autocomplete="off">
                    </div>
                    <div class="input-tip">
                        <span><i class="icon-error"></i>支持中文、字母、数字、“-”“_”的组合，4-20个字符</span>
                        <span class="error hide"><i class="icon-error"></i>格式错误，仅支持汉字、字母、数字、“-”“_”的组合</span>
                    </div>

                    <div class="form-item">
                        <label>设 置 密 码</label>
                        <input type="password" placeholder="建议至少使用两种字符组合">
                    </div>
                    <div class="input-tip">
                        <span><i class="icon-error"></i>建议至少使用两种字符组合</span>
                        <span class="error hide"><i class="icon-error"></i></span>
                    </div>

                    <div class="form-item">
                        <label>确 认 密 码</label>
                        <input type="password" placeholder="请再次输入密码">
                    </div>
                    <div class="input-tip">
                        <span><i class="icon-error"></i>请再次输入密码</span>
                        <span class="error hide"><i class="icon-error"></i></span>
                    </div>

                    <div class="form-item">
                        <label>邮 箱 验 证</label>
                        <input type="text" placeholder="建议使用常用邮箱">
                    </div>
                    <div class="input-tip">
                        <span><i class="icon-error"></i>建议使用常用邮箱，完成验证后，你可以用该邮箱登录和找回密码</span>
                        <span class="error hide"><i class="icon-error"></i></span>
                    </div>

                    <div class="form-item">
                        <label>中国&nbsp;&nbsp;+86</label>
                        <input type="text" placeholder="建议使用常用手机">
                    </div>
                    <div class="input-tip">
                        <span><i class="icon-error"></i>建议使用常用手机，完成验证后，你可以用该手机登录和找回密码</span>
                        <span class="error hide"><i class="icon-error"></i></span>
                    </div>

                    <div class="form-item">
                        <label>验　证　码</label>
                        <input type="text" placeholder="请输入验证码">
                    </div>
                    <div class="input-tip">
                        <span><i class="icon-error"></i>看不清？点击图片更换验证码</span>
                        <span class="error hide"><i class="icon-error"></i></span>
                    </div>

                    <div class="form-item">
                        <label>手机验证码</label>
                        <input type="text" placeholder="请输入手机验证码">
                    </div>
                    <div class="input-tip">
                        <span><i class="icon-error"></i></span>
                    </div>

                    <div class="form-agreement">
                        <div>
                            <input type="checkbox" name="agreement" checked="">阅读并同意<a href="javascript:;">《用户注册协议》</a>
                        </div>
                        <div class="input-tip"><span></span></div>
                    </div>
                    <div class="input-tip"><span></span></div>
                    <div class="form-btn">
                        <button type="submit">立即注册</button>
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
            <p>Copyright © 2015 - 2017  eBestMall 鸿宇科技 版权所有</p>
        </div>
    </div>
</div>
