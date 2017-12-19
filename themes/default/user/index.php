<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->registerCssFile('/static/css/user.css', ['depends' => app\assets\AppAsset::className()]);
//$this->registerJsFile('/static/js/user.js',['depends' => app\assets\AppAsset::className()]);

$this->title = '我的信息';
$this->params['breadcrumbs'][] = ['label' => '会员中心','url' => ['/user']];
$this->params['breadcrumbs'][] = $this->title;

?>

<!--Begin 用户中心 Begin -->
<div class="user-index">
    <div class="member-wrap">
        <!--左侧导航菜单栏-->
        <div class="member-nav">
            <div class="member-nav-title"><a href="javascript:;">会员中心</a></div>
            <div class="member-nav-body">

                <div class="member-nav-item member-shadow">
                    <div class="member-nav-item-title">
                        <i class="icon-user-o"></i>
                        <span>会员信息</span>
                    </div>
                    <ul class="member-nav-item-body">
                        <li><a href="">基本信息</a></li>
                        <li><a href="">我的收藏</a></li>
                        <li><a href="">我的足迹</a></li>
                        <li><a href="">我的评论</a></li>
                    </ul>
                </div>

                <div class="member-nav-item member-shadow">
                    <div class="member-nav-item-title">
                        <i class="icon-edit"></i>
                        <span>订单中心</span>
                    </div>
                    <ul class="member-nav-item-body">
                        <li><a href="">我的订单</a></li>
                        <li><a href="">收货地址</a></li>
                        <li><a href="">评价晒单</a></li>
                    </ul>
                </div>

                <div class="member-nav-item member-shadow">
                    <div class="member-nav-item-title">
                        <i class="icon-coin-yen"></i>
                        <span>账户中心</span>
                    </div>
                    <ul class="member-nav-item-body">
                        <li><a href="">账户安全</a></li>
                        <li><a href="">资金管理</a></li>
                        <li><a href="">我的红包</a></li>
                        <li><a href="">优惠券</a></li>
                    </ul>
                </div>

                <div class="member-nav-item member-shadow">
                    <div class="member-nav-item-title">
                        <i class="icon-banknote"></i>
                        <span>分销中心</span>
                    </div>
                    <ul class="member-nav-item-body">
                        <li><a href="">我的会员</a></li>
                        <li><a href="">我的业绩</a></li>
                        <li><a href="">我的佣金</a></li>
                        <li><a href="">申请提现</a></li>
                        <li><a href="">推广链接</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <!--右侧主要内容块-->
        <div class="member-main">
            <div class="member-main-info">
                <div class="member-main-item">
                    <div class="user-basic-info-wrap">
                        <div class="user-basic-info-avatar">
                            <a href="javascript:;">
                                <img class="user-avatar member-shadow" src="/static/img/public/user/no_login_default_avatar.jpg" width="100" height="100">
                            </a>
                        </div>
                        <div class="user-basic-info">
                            <div class="user-basic-info-name">
                                <a class="u-name" href="javascript:;">用户名</a>
                            </div>
                            <div class="user-basic-info-rank">
                                <span>等级：</span>
                                <a href="javascript:;">普通会员</a>
                            </div>
                            <div class="user-basic-info-account-security">
                                <span>账户安全：</span>
                                <span>正常</span>
                            </div>
                        </div>
                    </div>
                    <div class="user-info-extend">
                        <div class="user-info-counts-wrap">
                            <ul class="user-info-counts">
                                <li>
                                    <a href="javascript:;">
                                        <span><i class="icon-creditcard"></i></span>
                                        <p>待付款 0</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span><i class="icon-truck3"></i></span>
                                        <p>待发货 0</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span><i class="icon-gift"></i></span>
                                        <p>待收货 0</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span><i class="icon-edit"></i></span>
                                        <p>待评价 0</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="user-info-account-wrap">
                            <div class="user-info-account">
                                <ul>
                                    <li>
                                        <div class="user-info-account-balance">
                                            <span>余　额：</span>
                                            <a href="javascript:;">0.00</a>
                                        </div>
                                        <div class="user-info-account-freeze">
                                            <span>冻　结：</span>
                                            <a href="javascript:;">0.00</a>
                                        </div>
                                        <div class="user-info-account-consume">
                                            <span>已消费：</span>
                                            <a href="javascript:;">0.00</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="user-info-account-balance">
                                            <span>积　分：</span>
                                            <a href="javascript:;">0</a>
                                        </div>
                                        <div class="user-info-account-freeze">
                                            <span>冻　结：</span>
                                            <a href="javascript:;">0</a>
                                        </div>
                                        <div class="user-info-account-consume">
                                            <span>已使用：</span>
                                            <a href="javascript:;">0</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="user-info-account-balance">
                                            <span>优惠券：</span>
                                            <a href="javascript:;">0</a>
                                            <span>张</span>
                                        </div>
                                        <div class="user-info-account-freeze">
                                            <span>价　值：</span>
                                            <a href="javascript:;">0.00</a>
                                            <span>元</span>
                                        </div>
                                        <div class="user-info-account-consume">
                                            <span>已使用：</span>
                                            <a href="javascript:;">0</a>
                                            <span>张</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="member-main-left">
                <div class="member-main-item member-main-order">订单</div>
                <div class="member-main-item member-main-collection">收藏</div>
            </div>
            <div class="member-main-right">
                <div class="member-main-item member-main-right-recommend">会员推荐</div>
            </div>

        </div>
    </div>
</div>
<!--End 用户中心 End-->
