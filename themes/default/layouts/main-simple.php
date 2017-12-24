<?php

use yii\helpers\Html;
use yii\helpers\Url;
use app\widgets\alert\Alert;
use app\assets\AppAsset;
AppAsset::register($this);

$css = <<< CSS
@charset "utf-8";

.header-login {
    width: 100%;
    float: left;
    padding: 10px 0;
}

.header-login > .w > .logo {
    width: 100%;
    height: 60px;
    line-height: 60px;
    position: relative;
    overflow: hidden;
}

.header-login > .w > .logo > a {
    max-width: 100%;
    height: 100%;
    float: left;
    margin-right: 30px;
}

.header-login > .w > .logo > a > img {
    height: 100%;
    float: left;
}

.header-login > .w > .logo > .logo-salutatory {
    height: 60px;
    color: #333333;
    font: 400 24px/60px "Microsoft YaHei", "Hiragino Sans GB";
    float: left;
    cursor: default;
}

.header-login > .w > .logo > .logo-link {
    width: auto;
    height: 100%;
    float: right;
}

.header-login > .w > .logo > .logo-link > a {
    color: #999999;
}

.header-login > .w > .logo > .logo-link > a:hover {
    color: #E4393C;
}

.header-login > .w > .logo > .logo-link > a > i {
    vertical-align: -2px;
    font-size: 14px;
    color: #E4393C;
    margin-right: 5px;
}
.content-simple {
    width: 100%;
    float: left;
    min-height: 100%;
    display: inline;
}

.content-simple > .w {
    position: relative;
}


.footer-login {
    width: 100%;
    float: left;
    text-align: center;
}

.footer-login > .w > ul {
    margin-top: 25px;
    display: inline-block;
}

.footer-login > .w > ul > li {
    float: left;
}

.footer-login > .w > ul > li > span {
    font-size: 12px;
    float: left;
    line-height: 16px;
    cursor: default;
}

.footer-login > .w > ul > li:first-child > span {
    display: none;
}

.footer-login > .w > ul > li > a {
    margin: 0 15px;
    float: left;
}

.footer-login > .w > p {
    margin-top: 10px;
    margin-bottom: 25px;
}
CSS;

$this->registerCss($css);

$js = <<< JS

JS;

$this->registerJs($js);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta name="keyword" content="eBestMall,鸿宇v8,鸿宇商城,鸿宇分销,网店系统,网上商城系统,分销系统,B2B2C商城系统,微信分销系统">
    <meta name="description" content="eBestMall是国内电子商务系统及服务解决方案新创品牌。为传统企业及创业者提供零售网店系统、网上商城系统、分销系统、B2B2C商城系统、微信分销系统、行业ERP等产品和解决方案。">
    <meta name="author" content="鸿宇科技">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="header-login">
    <div class="w">
        <div class="logo">
            <a href="<?= Yii::$app->homeUrl ?>"><img src="/static/img/public/logo.png" alt=""></a>
            <span class="logo-salutatory">标题</span>
            <div class="logo-link"><a href="javascript:;"><i class="icon-chat"></i>登录页面，调查问卷</a></div>
        </div>
    </div>
</div>
<div class="content-simple">
    <div class="w">
        <?= $content ?>
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
        <p>Copyright © 2015 - <?= date('Y') ?>  eBestMall 鸿宇科技 版权所有</p>
    </div>
</div>

<?= Alert::widget() ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
