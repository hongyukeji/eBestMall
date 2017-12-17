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
                        <li><a href="">我的留言</a></li>
                        <li><a href="">我的评论</a></li>
                        <li><a href="">推广链接</a></li>
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
                        <li><a href="">我的红包</a></li>
                        <li><a href="">资金管理</a></li>
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
                    </ul>
                </div>

            </div>
        </div>
        <div class="member-main">
            <div class="member-main-info">
                <div class="member-main-item">
                    会员信息
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
