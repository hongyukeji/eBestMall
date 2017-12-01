<?php
/**
 * ============================================================================
 * Copyright © 2016-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/3/3 0:15
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */

use yii\helpers\Html;
use app\assets\AppMobileAsset;
AppMobileAsset::register($this);

$this->registerMetaTag(['name' => 'keywords', 'content' => 'eBestMall,鸿宇商城,鸿宇分销,网店系统,网上商城系统,分销系统,B2B2C商城系统,微信分销系统']);
$this->registerMetaTag(['name' => 'description', 'content' => 'eBestMall是国内电子商务系统及服务解决方案新创品牌。为传统企业及创业者提供零售网店系统、网上商城系统、分销系统、B2B2C商城系统、微信分销系统、行业ERP等产品和解决方案。'], 'description');

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="Expires" content="-1">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Pragma" content="no-cache">
    <meta name="author" content="www.ebestmall.com">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="header">
    <div class="header-item"></div>
    <div class="header-wrap">
        <div class="header-logo">
            <div class="header-logo-wrap">
                <span></span>
            </div>
        </div>
        <div class="header-search">
            <div class="header-search-wrap">
                <form action="javascript:;">
                    <input type="text" placeholder="搜索商品/店铺">
                    <button type="submit" class="icon-search2"></button>
                </form>
            </div>
        </div>
        <div class="header-login"><a href="javascript:;">登录</a></div>
        <!-- 登陆后显示图标 -->
        <!--<div class="header-login"><a href="javascript:;"><i class="icon-user-o"></i></a></div>-->
    </div>
</div>

<div class="content">
    <?= $content ?>
</div>

<div class="footer">
    <div class="footer-wrap">
        <ul>
            <li>
                <a href="javascript:;">
                    <div class="footer-menu-icon">
                        <i class="icon-home3"></i>
                    </div>
                    <div class="footer-menu-title">首页</div>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <div class="footer-menu-icon">
                        <i class="icon-star-o"></i>
                    </div>
                    <div class="footer-menu-title">分类</div>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <div class="footer-menu-icon">
                        <i class="icon-search2"></i>
                    </div>
                    <div class="footer-menu-title">发现</div>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <div class="footer-menu-icon">
                        <i class="icon-cart"></i>
                    </div>
                    <div class="footer-menu-title">购物车</div>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <div class="footer-menu-icon">
                        <i class="icon-user-o"></i>
                    </div>
                    <div class="footer-menu-title">我的</div>
                </a>
            </li>
        </ul>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

