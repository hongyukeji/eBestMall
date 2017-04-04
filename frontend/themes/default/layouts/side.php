<?php

use yii\helpers\Url;
use yii\helpers\Html;

?>
<div id="sideBar">
    <div class="sideBarBody"></div>
    <?php if(Yii::$app->user->isGuest) : ?>
        <div class="sideBarContent">
            <ul>
                <li class="item">
                    <div class="item-btn">
                        <a href="javascript:;"><i class="icon-user-o"></i></a>
                        <div class="item-title"><a href="javascript:;">会员中心<span>◆</span></a></div>
                    </div>
                    <div class="item-body">
                        <div class="side-bar-body-no-login-wrap">
                            <div class="side-login-prompt">
                                <p><i class="side-bar-body-no-login-img"></i></p>
                                <p><a href="<?= Url::to(['site/login']) ?>">您好，请登录</a>&nbsp;&nbsp;&nbsp;<a class="active" href="<?= Url::to(['site/register']) ?>">免费注册</a></p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="item item-cartBar">
                    <div class="item-btn">
                        <a href="javascript:;"><i class="icon-cart2"></i><div class="item-cart"><div>购物车</div><span>0</span></div></a>
                    </div>
                    <div class="item-body">
                        <div class="side-bar-body-no-login-wrap">
                            <div class="side-login-prompt">
                                <p><i class="side-bar-body-no-login-img"></i></p>
                                <p><a href="<?= Url::to(['site/login']) ?>">您好，请登录</a>&nbsp;&nbsp;&nbsp;<a class="active" href="<?= Url::to(['site/register']) ?>">免费注册</a></p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="item-btn">
                        <a href="javascript:;"><i class="icon-heart-o"></i></a>
                        <div class="item-title"><a href="javascript:;">我的收藏<span>◆</span></a></div>
                    </div>
                    <div class="item-body">
                        <div class="side-bar-body-no-login-wrap">
                            <div class="side-login-prompt">
                                <p><i class="side-bar-body-no-login-img"></i></p>
                                <p><a href="<?= Url::to(['site/login']) ?>">您好，请登录</a>&nbsp;&nbsp;&nbsp;<a class="active" href="<?= Url::to(['site/register']) ?>">免费注册</a></p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="item-btn">
                        <a href="javascript:;"><i class="icon-history"></i></a>
                        <div class="item-title"><a href="javascript:;">浏览记录<span>◆</span></a></div>
                    </div>
                    <div class="item-body">
                        <div class="side-bar-body-no-login-wrap">
                            <div class="side-login-prompt">
                                <p><i class="side-bar-body-no-login-img"></i></p>
                                <p><a href="<?= Url::to(['site/login']) ?>">您好，请登录</a>&nbsp;&nbsp;&nbsp;<a class="active" href="<?= Url::to(['site/register']) ?>">免费注册</a></p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    <?php else : ?>
        <div class="sideBarContent">
            <ul>
                <li class="item">
                    <div class="item-btn">
                        <!--登陆后显示用户头像-->
                        <!--<a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/public/user/user_default_avatar.jpg" /></a>-->
                        <a href="javascript:;"><i class="icon-user-o"></i></a>
                        <div class="item-title"><a href="javascript:;">会员中心<span>◆</span></a></div>
                    </div>
                    <div class="item-body">
                        <div class="item-body-head">
                            <div class="item-body-head-left"><a href="javascript:;"><i class="icon-user-o"></i>会员中心</a></div>
                            <div class="item-body-head-right item-body-head-close"><a href="javascript:;"><i class="icon-close"></i></a></div>
                        </div>
                        <div class="item-body-content">
                            <div class="sideBarContent-user-container">
                                <div class="sideBarContent-user-container-personal-info">
                                    <div class="avatar">
                                        <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/public/user/no_login_default_avatar.jpg" alt=""></a>
                                    </div>
                                    <div class="user-info">
                                        <div class="user-name"><a href="javascript:;" title="eBestMall">eBestMall</a></div>
                                        <div class="user-rank">
                                            <a href="javascript:;" title="尊贵五星钻石VIP">
                                                <i class="icon-diamond"></i>
                                                <i class="icon-diamond"></i>
                                                <i class="icon-diamond"></i>
                                                <i class="icon-diamond"></i>
                                                <i class="icon-diamond"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="sideBarContent-user-container-shortcut">
                                    <ul>
                                        <li>
                                            <strong>0</strong>
                                            <a href="javascript:;">我的订单</a>
                                        </li>
                                        <li>
                                            <strong>0</strong>
                                            <a href="javascript:;">我的收藏</a>
                                        </li>
                                        <li>
                                            <strong>0</strong>
                                            <a href="javascript:;">浏览记录</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="item item-cartBar">
                    <div class="item-btn">
                        <a href="javascript:;"><i class="icon-cart2"></i><div class="item-cart"><div>购物车</div><span>0</span></div></a>
                    </div>
                    <div class="item-body">
                        <div class="sideBar-cartBar-body">
                            <div class="sideBar-cartBar-body-head">
                                <div class="sideBar-cartBar-body-head-left">
                                    <input type="checkbox"><span>全选</span>
                                </div>
                                <div class="sideBar-cartBar-body-head-right"><a href="<?= Url::to(['cart/index']) ?>" title="全屏查看">全屏查看</a></div>
                            </div>

                            <div class="sideBar-cartBar-body-content">
                                <div class="sideBar-cartBar-body-content-empty">
                                    <div class="sideBar-cartBar-body-content-empty-inner">
                                        <i></i>
                                        <div>购物车空空的，赶快去挑选心仪的商品吧~<br><a href="<?= Yii::$app->homeUrl ?>">去首页看看</a></div>
                                    </div>
                                </div>
                                <div class="sideBar-cartBar-body-content-list hide">
                                    <ul>
                                        <li class="item">
                                            <div class="sideBar-cartBar-body-content-list-title">
                                                <div class="sideBar-cartBar-body-content-list-title-click"><input type="checkbox"></div>
                                                <div class="sideBar-cartBar-body-content-list-title-shop-name"><a href="javascript:;" title="平台自营">平台自营</a></div>
                                                <div class="sideBar-cartBar-body-content-list-title-amount"><strong class="tm-mcPrice">¥6388.80</strong></div>
                                            </div>
                                            <div class="sideBar-cartBar-body-content-list-content">
                                                <div class="sideBar-cartBar-goods-content-head"></div>
                                                <div class="sideBar-cartBar-goods-content-main">
                                                    <div class="sideBar-cartBar-goods-content-main-click"><input type="checkbox"></div>
                                                    <div class="sideBar-cartBar-goods-content-main-img">
                                                        <a href="javascript:;" title="Apple/苹果 iPhone 7 Plus 32G 全网通4G智能手机">
                                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_002.jpg" alt="Apple/苹果 iPhone 7 Plus 32G 全网通4G智能手机">
                                                        </a>
                                                    </div>
                                                    <div class="sideBar-cartBar-goods-content-main-title">
                                                        <p title="网络类型:无需合约版">无需合约版</p>
                                                        <p title="机身颜色:金色">金色</p>
                                                    </div>
                                                    <div class="sideBar-cartBar-goods-content-main-number"><span>1</span></div>
                                                    <div class="sideBar-cartBar-goods-content-main-sum"><strong>¥6388.00</strong></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="sideBar-cartBar-body-content-list-title">
                                                <div class="sideBar-cartBar-body-content-list-title-click"><input type="checkbox"></div>
                                                <div class="sideBar-cartBar-body-content-list-title-shop-name"><a href="javascript:;" title="平台自营">平台自营</a></div>
                                                <div class="sideBar-cartBar-body-content-list-title-amount"><strong class="tm-mcPrice">¥6388.80</strong></div>
                                            </div>
                                            <div class="sideBar-cartBar-body-content-list-content">
                                                <div class="sideBar-cartBar-goods-content-head"></div>
                                                <div class="sideBar-cartBar-goods-content-main">
                                                    <div class="sideBar-cartBar-goods-content-main-click"><input type="checkbox"></div>
                                                    <div class="sideBar-cartBar-goods-content-main-img">
                                                        <a href="javascript:;" title="Apple/苹果 iPhone 7 Plus 32G 全网通4G智能手机">
                                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_002.jpg" alt="Apple/苹果 iPhone 7 Plus 32G 全网通4G智能手机">
                                                        </a>
                                                    </div>
                                                    <div class="sideBar-cartBar-goods-content-main-title">
                                                        <p title="网络类型:无需合约版">无需合约版</p>
                                                        <p title="机身颜色:金色">金色</p>
                                                    </div>
                                                    <div class="sideBar-cartBar-goods-content-main-number"><span>1</span></div>
                                                    <div class="sideBar-cartBar-goods-content-main-sum"><strong>¥6388.00</strong></div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="sideBar-cartBar-body-footer">
                                <div class="sideBar-cartBar-body-footer-number-money-bar">
                                    <div class="sideBar-cartBar-body-footer-number">已选&nbsp;0&nbsp;件</div>
                                    <div class="sideBar-cartBar-body-footer-money">
                                        <span><strong >¥&nbsp;00.00</strong></span>
                                    </div>
                                </div>
                                <div class="sideBar-cartBar-body-footer-btn-settlement"><a href="javascript:;">结算<i class="icon-chevron-circle-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="item-btn">
                        <a href="javascript:;"><i class="icon-heart-o"></i></a>
                        <div class="item-title"><a href="javascript:;">我的收藏<span>◆</span></a></div>
                    </div>
                    <div class="item-body">
                        <div class="item-body-head">
                            <div class="item-body-head-left"><a href="javascript:;"><i class="icon-heart-o"></i>我的收藏</a></div>
                            <div class="item-body-head-right item-body-head-close"><a href="javascript:;"><i class="icon-close"></i></a></div>
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="item-btn">
                        <a href="javascript:;"><i class="icon-history"></i></a>
                        <div class="item-title"><a href="javascript:;">浏览记录<span>◆</span></a></div>
                    </div>
                    <div class="item-body">
                        <div class="item-body-head">
                            <div class="item-body-head-left"><a href="javascript:;"><i class="icon-history"></i>浏览记录</a></div>
                            <div class="item-body-head-right item-body-head-close"><a href="javascript:;"><i class="icon-close"></i></a></div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    <?php endif; ?>
    <div class="sideBarDown">
        <ul>
            <li class="item">
                <a href="javascript:;"><i class="icon-edit"></i></a>
                <div class="item-title"><a href="javascript:;">用户反馈<span>◆</span></a></div>
            </li>
            <li class="returnTop item">
                <a href="javascript:;"><i class="icon-move-up"></i></a>
                <div class="item-title"><a href="javascript:;">返回顶部<span>◆</span></a></div>
            </li>
        </ul>
    </div>
</div>