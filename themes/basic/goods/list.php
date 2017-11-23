<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->registerCssFile('/static/css/list.css', ['depends' => app\assets\AppAsset::className()]);
$this->registerJsFile('/static/js/list.js', ['depends' => app\assets\AppAsset::className()]);

$this->title = '商品列表页';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="goods-list">
    <div class="shop-wrap">
        <div class="shop-logo">
            <a href="javascript:;">
                <img src="https://img30.360buyimg.com/popshop/jfs/t796/208/1017480188/18198/68cefb7/5565bab1Nc01af6ae.jpg" width="180" height="60" />
            </a>
        </div>
        <div class="shop-main">
            <div class="shop-info-name">
                <a href="javascript:;" target="_blank">京东Apple产品专营店</a>
                <span class="tips-tag">平台自营</span>
            </div>
            <div class="shop-info-item">主营品牌：苹果（Apple）</div>
            <div class="shop-info-item">店铺简介：Apple 电脑自营店</div>
        </div>
        <div class="shop-extend">
            <div class="shop-extend-btn">
                <a class="shop-extend-btn-focus" href="javascript:;"><i class="icon-heart-o"></i>加关注</a>
                <div class="bar"></div>
                <a class="shop-extend-btn-shop-enter" href="javascript:;" target="_blank">进入店铺</a>
            </div>
        </div>
    </div>
    <div class="bar"></div>
    <div class="selector">
        <div class="selector-item">
            <div class="selector-item-key"><strong>品牌：</strong></div>
            <div class="selector-item-value">
                <ul>
                    <li><a href="javascript:;" title="花花公子（PLAYBOY）">花花公子（PLAYBOY）</a></li>
                    <li><a href="javascript:;" title="七匹狼（SEPTWOLVES）">七匹狼（SEPTWOLVES）</a></li>
                </ul>
            </div>
            <div class="selector-item-extend">
                <a href="javascript:;">更多&nbsp;<i class="fa fa-angle-down"></i></a>
                <!--<a href="javascript:;">收起&nbsp;<i class="fa fa-angle-up"></i></a>-->
            </div>
        </div>
        <div class="selector-item">
            <div class="selector-item-key"><strong>男装：</strong></div>
            <div class="selector-item-value">
                <ul>
                    <li><a href="javascript:;" title="夹克">夹克</a></li>
                    <li><a href="javascript:;" title="T恤">T恤</a></li>
                    <li><a href="javascript:;" title="衬衫">衬衫</a></li>
                    <li><a href="javascript:;" title="风衣">风衣</a></li>
                    <li><a href="javascript:;" title="羽绒服">羽绒服</a></li>
                    <li><a href="javascript:;" title="休闲裤">休闲裤</a></li>
                    <li><a href="javascript:;" title="西服">西服</a></li>
                </ul>
            </div>
            <div class="selector-item-extend">
                <a href="javascript:;">更多&nbsp;<i class="fa fa-angle-down"></i></a>
                <!--<a href="javascript:;">收起&nbsp;<i class="fa fa-angle-up"></i></a>-->
            </div>
        </div>
        <div class="selector-item">
            <div class="selector-item-key"><strong>女装：</strong></div>
            <div class="selector-item-value">
                <ul>
                    <li><a href="javascript:;" title="短外套">短外套</a></li>
                    <li><a href="javascript:;" title="连衣裙">连衣裙</a></li>
                    <li><a href="javascript:;" title="毛呢大衣">毛呢大衣</a></li>
                    <li><a href="javascript:;" title="风衣">风衣</a></li>
                    <li><a href="javascript:;" title="打底衫">打底衫</a></li>
                    <li><a href="javascript:;" title="衬衫">衬衫</a></li>
                    <li><a href="javascript:;" title="西服">西服</a></li>
                </ul>
            </div>
            <div class="selector-item-extend">
                <a href="javascript:;">更多&nbsp;<i class="fa fa-angle-down"></i></a>
                <!--<a href="javascript:;">收起&nbsp;<i class="fa fa-angle-up"></i></a>-->
            </div>
        </div>
        <div class="selector-item">
            <div class="selector-item-key"><span>高级选项：</span></div>
            <div class="selector-item-trig">
                <ul>
                    <li>
                        <a class="trig-item-title" href="javascript:;"><span>尺码</span>&nbsp;<i class="fa fa-angle-down"></i></a>
                        <div class="trig-item-main">内容</div>
                    </li>
                    <li><a href="javascript:;"><span>适用季节</span>&nbsp;<i class="fa fa-angle-down"></i></a></li>
                    <li><a href="javascript:;"><span>人群</span>&nbsp;<i class="fa fa-angle-down"></i></a></li>
                    <li><a href="javascript:;"><span>适用年龄</span>&nbsp;<i class="fa fa-angle-down"></i></a></li>
                    <li><a href="javascript:;"><span>分类</span>&nbsp;<i class="fa fa-angle-down"></i></a></li>
                    <li><a href="javascript:;"><span>风格</span>&nbsp;<i class="fa fa-angle-down"></i></a></li>
                    <li><a href="javascript:;"><span>其他分类</span>&nbsp;<i class="fa fa-angle-down"></i></a></li>
                </ul>
            </div>
            <div class="selector-item-extend">
                <!--<a href="javascript:;">更多&nbsp;<i class="fa fa-angle-down"></i></a>-->
                <!--<a href="javascript:;">收起&nbsp;<i class="fa fa-angle-up"></i></a>-->
            </div>
        </div>
    </div>
    <div class="bar"></div>
    <div class="shop-aside">
        <div class="shop-aside-item">
            <div class="shop-aside-title">
                <h3>商品精选</h3>
                <span></span>
            </div>
            <div class="shop-aside-content">
                <ul>
                    <li class="shop-aside-content-item">
                        <div class="item-img">
                            <a href="javascript:;">
                                <img src="https://img10.360buyimg.com/n2/jfs/t11599/365/546757191/493547/931c3354/59f2cde3N0276563e.jpg" width="160" height="160">
                            </a>
                        </div>
                        <div class="item-price">
                            <strong><em>¥</em><i class="J-prom-p-18788675125">169.00</i></strong>
                        </div>
                        <div class="item-name">
                            <a href="javascript:;" title="花花公子长袖T恤男2017翻领加绒头套条纹免烫男中青年 冬天 衣服 红色">花花公子长袖T恤男2017翻领加绒头套条纹免烫男中青年 冬天 衣服 红色</a>
                        </div>
                        <div class="item-comment">
                            <span>已有</span>
                            <span class="item-comment-number" style="">99999+</span>
                            <span>人评价</span>
                        </div>
                    </li>
                    <li class="shop-aside-content-item">
                        <div class="item-img">
                            <a href="javascript:;">
                                <img src="https://img10.360buyimg.com/n2/jfs/t11599/365/546757191/493547/931c3354/59f2cde3N0276563e.jpg" width="160" height="160">
                            </a>
                        </div>
                        <div class="item-price">
                            <strong><em>¥</em><i class="J-prom-p-18788675125">169.00</i></strong>
                        </div>
                        <div class="item-name">
                            <a href="javascript:;" title="花花公子长袖T恤男2017翻领加绒头套条纹免烫男中青年 冬天 衣服 红色">花花公子长袖T恤男2017翻领加绒头套条纹免烫男中青年 冬天 衣服 红色</a>
                        </div>
                        <div class="item-comment">
                            <span>已有</span>
                            <span class="item-comment-number" style="">99999+</span>
                            <span>人评价</span>
                        </div>
                    </li>
                    <li class="shop-aside-content-item">
                        <div class="item-img">
                            <a href="javascript:;">
                                <img src="https://img10.360buyimg.com/n2/jfs/t11599/365/546757191/493547/931c3354/59f2cde3N0276563e.jpg" width="160" height="160">
                            </a>
                        </div>
                        <div class="item-price">
                            <strong><em>¥</em><i class="J-prom-p-18788675125">169.00</i></strong>
                        </div>
                        <div class="item-name">
                            <a href="javascript:;" title="花花公子长袖T恤男2017翻领加绒头套条纹免烫男中青年 冬天 衣服 红色">花花公子长袖T恤男2017翻领加绒头套条纹免烫男中青年 冬天 衣服 红色</a>
                        </div>
                        <div class="item-comment">
                            <span>已有</span>
                            <span class="item-comment-number" style="">99999+</span>
                            <span>人评价</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="shop-list-wrap">商品列表</div>

</div>
