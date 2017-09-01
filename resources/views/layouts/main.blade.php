<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keyword" content="eBestMall,鸿宇商城,鸿宇分销,网店系统,网上商城系统,分销系统,B2B2C商城系统,微信分销系统">
    <meta name="description" content="eBestMall是国内电子商务系统及服务解决方案新创品牌。为传统企业及创业者提供零售网店系统、网上商城系统、分销系统、B2B2C商城系统、微信分销系统、行业ERP等产品和解决方案。">
    <meta name="author" content="{{ config('system.name') }}-{{ config('system.version') }} {{ config('system.url') }}">

    @if(Request::path() == '/')
    <title>eBestMall - B2B2C商城系统</title>
    @else
    <title>@yield('title', Request::path()) - eBestMall</title>
    @endif

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/app.css') }}" />
    @yield('css')
</head>
<body>

<!-- Public-Header Top-Images -->
@if(Request::path() == '/')
<div class="header-event" style="display: block;">
    <div class="w">
        <a class="header-event-bar" href="javascript:;"><img src="/static/img/temp/header-top.jpg" /> </a>
        <a class="close-event" href="javascript:;"><span class="icon-close"></span></a>
    </div>
</div>
@endif

<!-- Public-Header -->
<div id="header">

    <!-- Public-Header Top-Nav -->
    <div class="headerTop">
        <div class="w">
            <ul class="fl">
                <li class="headerRegion"><i class="icon-location"></i><span>北京</span>
                    <div class="listRegion">
                        <div><a class="active" href="javascript:;">北京</a></div>
                        <div><a href="javascript:;">上海</a></div>
                        <div><a href="javascript:;">深圳</a></div>
                        <div><a href="javascript:;">天津</a></div>
                        <div><a href="javascript:;">重庆</a></div>
                        <div><a href="javascript:;">河北</a></div>
                        <div><a href="javascript:;">山西</a></div>
                        <div><a href="javascript:;">河南</a></div>
                        <div><a href="javascript:;">辽宁</a></div>
                        <div><a href="javascript:;">吉林</a></div>
                    </div>
                </li>
            </ul>
            <ul class="menuTop fr">
                @guest
                <li><div><a href="{{ url('/login') }}">您好，请登录</a></div></li>
                <li><div><a class="active" href="{{ url('/register') }}">免费注册</a></div></li><li class="spacer"></li>
                @else
                <li class="downTop">
                    <div><a href="{{ url('/home') }}">{{ Auth::user()->name }}</a><div class="effectTop"><i class="icon-chevron-down"></i></div></div>
                    <div class="listTop">
                        <div><a href="{{ url('/home') }}">个人中心</a></div>
                        <div>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                安全退出
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                </li><li class="spacer"></li>
                @endguest
                <li class="downTop">
                    <div><a href="javascript:;">会员中心</a><div class="effectTop"><i class="icon-chevron-down"></i></div></div>
                    <div class="listTop">
                        <div><a href="javascript:;">已买到的宝贝</a></div>
                        <div><a href="javascript:;">我的收藏</a></div>
                        <div><a href="javascript:;">浏览过的宝贝</a></div>
                    </div>
                </li><li class="spacer"></li>
                <!-- Top顶部购物车 -->
                <li class="downTop header-top-cart">
                    <div><a href="javascript:;">购物车<span class="down-top-span-cart-number">0</span></a><div class="effectTop"><i class="icon-chevron-down"></i></div></div>
                    <div class="listTop cartTop"></div>
                </li><li class="spacer header-top-cart"></li>
                <li class="downTop">
                    <div><a href="javascript:;">卖家中心</a><div class="effectTop"><i class="icon-chevron-down"></i></div></div>
                    <div class="listTop">
                        <div><a href="javascript:;">免费开店</a></div>
                        <div><a href="javascript:;">已卖出的宝贝</a></div>
                        <div><a href="javascript:;">出售中的宝贝</a></div>
                    </div>
                </li><li class="spacer"></li>
                <li class="downTop">
                    <div><a href="javascript:;">商品分类</a><div class="effectTop"><i class="icon-chevron-down"></i></div></div>
                    <div class="listTop">
                        <div><a href="javascript:;">家用电器</a></div>
                        <div><a href="javascript:;">手机数码</a></div>
                        <div><a href="javascript:;">电脑办公</a></div>
                        <div><a href="javascript:;">食品烟酒</a></div>
                    </div>
                </li><li class="spacer"></li>
                <li class="downTop">
                    <div><span class="down-top-span-a">客户服务</span><div class="effectTop"><i class="icon-chevron-down"></i></div></div>
                    <div class="listTop">
                        <div><a href="javascript:;">买家客服</a></div>
                        <div><a href="javascript:;">联系我们</a></div>
                    </div>
                </li><li class="spacer"></li>
                <li class="downTop">
                    <div><span class="down-top-span-a">网址导航</span><div class="effectTop"><i class="icon-chevron-down"></i></div></div>
                    <div class="siteTop">
                        <dl>
                            <dt>鸿宇专场</dt>
                            <dd>
                                <div><a href="javascript:;">鸿宇科技</a> </div>
                                <div><a href="javascript:;">鸿宇科技</a> </div>
                                <div><a href="javascript:;">鸿宇科技</a> </div>
                                <div><a href="javascript:;">鸿宇科技</a> </div>
                                <div><a href="javascript:;">鸿宇科技</a> </div>
                                <div><a href="javascript:;">鸿宇科技</a> </div>
                                <div><a href="javascript:;">鸿宇科技</a> </div>
                                <div><a href="javascript:;">鸿宇科技</a> </div>
                                <div><a href="javascript:;">鸿宇科技</a> </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>鸿宇B2BC商城</dt>
                            <dd>
                                <div><a href="javascript:;">eBestMall</a> </div>
                                <div><a href="javascript:;">eBestMall</a> </div>
                                <div><a href="javascript:;">eBestMall</a> </div>
                                <div><a href="javascript:;">eBestMall</a> </div>
                                <div><a href="javascript:;">eBestMall</a> </div>
                                <div><a href="javascript:;">eBestMall</a> </div>
                                <div><a href="javascript:;">eBestMall</a> </div>
                                <div><a href="javascript:;">eBestMall</a> </div>
                                <div><a href="javascript:;">eBestMall</a> </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>鸿宇科技</dt>
                            <dd>
                                <div><a href="javascript:;">鸿宇科技</a> </div>
                                <div><a href="javascript:;">鸿宇科技</a> </div>
                                <div><a href="javascript:;">鸿宇科技</a> </div>
                                <div><a href="javascript:;">鸿宇科技</a> </div>
                                <div><a href="javascript:;">鸿宇科技</a> </div>
                                <div><a href="javascript:;">鸿宇科技</a> </div>
                                <div><a href="javascript:;">鸿宇科技</a> </div>
                                <div><a href="javascript:;">鸿宇科技</a> </div>
                                <div><a href="javascript:;">鸿宇科技</a> </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>鸿宇专场</dt>
                            <dd>
                                <div><a href="javascript:;">eBestMall</a> </div>
                                <div><a href="javascript:;">eBestMall</a> </div>
                                <div><a href="javascript:;">eBestMall</a> </div>
                                <div><a href="javascript:;">eBestMall</a> </div>
                                <div><a href="javascript:;">eBestMall</a> </div>
                                <div><a href="javascript:;">eBestMall</a> </div>
                                <div><a href="javascript:;">eBestMall</a> </div>
                                <div><a href="javascript:;">eBestMall</a> </div>
                                <div><a href="javascript:;">eBestMall</a> </div>
                            </dd>
                        </dl>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- Public-Header-Main -->
    <div class="headerMain">
        <div class="w">
            <div class="logo">
                <h1><a href="{{ url('/') }}">eBestMall<img src="/static/img/public/logo-e.png" alt="eBestMall" /> </a></h1>
            </div>
            <!-- Public-Header Search-Cart-Nav -->
            <div class="header-main-right">
                <div class="header-search-cart-bar">
                    <div class="header-search-bar">
                        <div class="header-search">
                            <form class="header-search-form" action="javascript:;" method="get">
                                <input class="header-search-form-input-text" id="header-search-form-input-public" type="text" name="key" placeholder="eBestMall" autocomplete="off" />
                                <button type="submit"><i class="icon-search"></i></button>
                            </form>
                        </div>
                        <div class="header-hot-words">
                            <ul>
                                <li class="item"><a class="active" href="javascript:;">平板电脑</a></li>
                                <li class="item"><a href="javascript:;">液晶电视</a></li>
                                <li class="item"><a href="javascript:;">家电</a></li>
                                <li class="item"><a href="javascript:;">风衣</a></li>
                                <li class="item"><a href="javascript:;">靴子</a></li>
                                <li class="item"><a href="javascript:;">亿元红包</a></li>
                                <li class="item"><a href="javascript:;">品质家电</a></li>
                                <li class="item"><a href="javascript:;">女包</a></li>
                                <li class="item"><a href="javascript:;">羽绒服</a></li>
                                <li class="item"><a href="javascript:;">笔记本</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-cart-bar">
                        <div class="header-cart">
                            <div class="header-cart-btn">
                                <i class="icon-shopping_cart"></i>
                                <a href="javascript:;">我的购物车</a>
                                <span>0</span>
                            </div>
                            <div class="header-cart-body">
                                <div class="header-cart-spacer"></div>

                                <!-- not have goods -->
                                <div class="header-cart-prompt">
                                    <div class="no-goods"><b></b>购物车中还没有商品，赶紧选购吧！</div>
                                </div>

                                <!-- have goods -->
                                <div class="header-cart-list hide">
                                    <div class="header-cart-list-title"><h4 class="fl">最新加入的商品</h4></div>
                                    <div class="header-cart-list-goods">
                                        <ul>
                                            <li class="item">
                                                <div class="goods-img">
                                                    <a href="javascript:;" target="_blank">
                                                        <img src="/static/img/temp/temp-goods_img_001_small.jpg" width="50" height="50" alt="">
                                                    </a>
                                                </div>
                                                <div class="goods-name">
                                                    <a href="javascript:;" title="Apple iPhone 7 Plus (A1661) 256G 金色 移动联通电信4G手机" target="_blank">Apple iPhone 7Plus (A1661) 256G 金色 移动联通电信4G手机</a>
                                                </div>
                                                <div class="goods-detail">
                                                    <span><strong>￥7988.00</strong>×1</span> <br>
                                                    <a href="javascript:;" class="delete-goods" data-id="">删除</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="header-cart-list-total-money">
                                        <div class="p-total">共<b>1</b>件商品　共计<strong>￥ 7988.00</strong></div>
                                        <a href="//cart.jd.com/" title="去购物车" id="btn-payforgoods">去购物车</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-nav-bar">
                    <ul>
                        <li class="item"><a href="{{ url('/') }}">首页</a></li>
                        <li class="item"><a href="javascript:;">商城</a></li>
                    </ul>
                    <div class="spacer"> </div>
                    <ul>
                        <li class="item"><a href="javascript:;">秒杀</a></li>
                        <li class="item"><a href="javascript:;">优惠券</a></li>
                        <li class="item"><a href="javascript:;">团购</a></li>
                        <li class="item"><a href="javascript:;">拍卖</a></li>
                        <li class="item"><a href="javascript:;">预售</a></li>
                        <li class="item"><a href="javascript:;">服装城</a></li>
                    </ul>
                    <div class="spacer"> </div>
                    <ul>
                        <li class="item"><a href="javascript:;">本地生活</a></li>
                        <li class="item"><a href="javascript:;">全球购</a></li>
                    </ul>
                </div>
                <div class="header-activity-bar"><a href="javascript:;"><img src="/static/img/temp/activity.png" alt="新年红包抢不停"/></a></div>
            </div>
        </div>
    </div>
</div>

<!-- Public-Content -->
<div id="content">

    <!-- Content-Main -->
    <div class="content">
        @yield('content')
    </div>

</div>

<!-- Public-Search -->
@if(Request::path() == '/')
<div id="searchBar">
        <div class="w">
            <div class="searchBar-logo">
                <a href="javascript:;"><img src="/static/img/public/logo_small.png" alt=""></a>
            </div>
            <div class="searchBar-search">
                <form class="searchBar-search-form" action="javascript:;" method="get">
                    <input type="text" name="key" placeholder="eBestMall" autocomplete="off" />
                    <button type="submit"><i class="icon-search"></i></button>
                </form>
            </div>
        </div>

    </div>
@endif

<!-- Public-Side -->
<div id="sideBar">
    <div class="sideBarBody"></div>
    <div class="side-bar-body-no-login hide">
        <div class="side-bar-body-no-login-wrap">
            <div class="side-login-prompt">
                <p><i class="side-bar-body-no-login-img"></i></p>
                <p><a href="javascript:;">您好，请登录</a>&nbsp;&nbsp;&nbsp;<a href="javascript:;">免费注册</a></p>
            </div>
        </div>
    </div>
    <div class="sideBarContent">
        <ul>
            <li class="item">
                <div class="item-btn">
                    <!--登陆后显示用户头像-->
                    <!--<a href="javascript:;"><img src="/static/img/public/user/user_default_avatar.jpg" /></a>-->
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
                                    <a href="javascript:;"><img src="/static/img/public/user/no_login_default_avatar.jpg" alt=""></a>
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
                                <input type="checkbox" id="cart-list-select-all"><label for="cart-list-select-all">全选</label>
                            </div>
                            <div class="sideBar-cartBar-body-head-right"><a href="javascript:;" title="全屏查看">全屏查看</a></div>
                        </div>

                        <div class="sideBar-cartBar-body-content">
                            <div class="sideBar-cartBar-body-content-empty">
                                <div class="sideBar-cartBar-body-content-empty-inner">
                                    <i></i>
                                    <div>购物车空空的，赶快去挑选心仪的商品吧~<br><a href="javascript:;">去首页看看</a></div>
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
                                                        <img src="/static/img/temp/temp-goods_img_small_002.jpg" alt="Apple/苹果 iPhone 7 Plus 32G 全网通4G智能手机">
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
                                                        <img src="/static/img/temp/temp-goods_img_small_002.jpg" alt="Apple/苹果 iPhone 7 Plus 32G 全网通4G智能手机">
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

<!-- Public-Footer -->
<div id="footer">
    <div class="footer-service">
        <ul class="w">
            <li><i class="icon-truck3"></i>24小时快速发货</li>
            <li><i class="icon-history"></i>15天免费换货</li>
            <li><i class="icon-gift"></i>满88元包邮</li>
            <li><i class="icon-map"></i>百余家售后网点</li>
        </ul>
    </div>
    <div class="footer-links">
        <ul class="w">
            <li class="footer-links-item">
                <h5>购物指南</h5>
                <ul>
                    <li><a href="javascript:;">购物流程</a></li>
                    <li><a href="javascript:;">会员介绍</a></li>
                    <li><a href="javascript:;">常见问题</a></li>
                </ul>
            </li>
            <li class="footer-links-item">
                <h5>配送方式</h5>
                <ul>
                    <li><a href="javascript:;">上门自提</a></li>
                    <li><a href="javascript:;">配送服务查询</a></li>
                    <li><a href="javascript:;">配送费收取标准</a></li>
                </ul>
            </li>
            <li class="footer-links-item">
                <h5>支付方式</h5>
                <ul>
                    <li><a href="javascript:;">货到付款</a></li>
                    <li><a href="javascript:;">在线支付</a></li>
                    <li><a href="javascript:;">分期付款</a></li>
                </ul>
            </li>
            <li class="footer-links-item">
                <h5>售后服务</h5>
                <ul>
                    <li><a href="javascript:;">价格保护</a></li>
                    <li><a href="javascript:;">退款说明</a></li>
                    <li><a href="javascript:;">返修/退换货</a></li>
                </ul>
            </li>
            <li class="footer-links-item">
                <h5>特色服务</h5>
                <ul>
                    <li><a href="javascript:;">DIY装机</a></li>
                    <li><a href="javascript:;">延保服务</a></li>
                    <li><a href="javascript:;">一元夺宝</a></li>
                </ul>
            </li>
            <li class="footer-links-item">
                <h5>关于我们</h5>
                <ul>
                    <li><a href="javascript:;">投诉与建议</a></li>
                    <li><a href="javascript:;">联系客服</a></li>
                    <li><a href="javascript:;">平台礼品卡</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="footer-info">
        <div class="w">
            <p class="footer-info-links">
                <a href="javascript:;" target="_blank">关于我们</a><span>|</span>
                <a href="javascript:;" target="_blank">联系我们</a><span>|</span>
                <a href="javascript:;" target="_blank">人才招聘</a><span>|</span>
                <a href="javascript:;" target="_blank">商家入驻</a><span>|</span>
                <a href="javascript:;" target="_blank">广告服务</a><span>|</span>
                <a href="javascript:;" target="_blank">友情链接</a><span>|</span>
                <a href="javascript:;" target="_blank">帮助中心</a><span>|</span>
            </p>
            <div class="footer-info-copyright">Copyright © 2015 - 2017  eBestMall 鸿宇科技 版权所有</div>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{ asset('static/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('static/js/app.js') }}"></script>
@yield('scripts')

</body>
</html>