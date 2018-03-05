<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title','鸿宇科技')</title>
    <meta name="keyword" content="鸿宇|鸿宇科技|鸿宇官网|鸿宇建站|鸿宇网络">
    <meta name="description" content="鸿宇科技有限公司是一家以信息技术服务为主导、立足于高科技领域的前沿，专业致力于网络Web开发及应用的高科技企业。本着“质量第一、诚信为本”的朴素经营理念，以务实创新的精神不断进行开拓实践和探索进取。">
    <meta name="author" content="鸿宇科技">

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon-precomposed" href="/statics/basic/images/icon/icon.png">
    <link rel="stylesheet" type="text/css" href="/statics/basic/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/statics/basic/css/nprogress.css">
    <link rel="stylesheet" type="text/css" href="/statics/basic/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/statics/basic/css/style.css">
    @yield('stylesheet')
    <script src="/statics/basic/js/jquery-2.1.4.min.js"></script>
    <script src="/statics/basic/js/nprogress.js"></script>
    <script src="/statics/basic/js/bootstrap.min.js"></script>
    <script src="/statics/basic/js/jquery.lazyload.min.js"></script>
    <script src="/statics/basic/js/jquery.ias.js"></script>

    <!--[if gte IE 9]>
    <script src="/statics/basic/js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="/statics/basic/js/html5shiv.min.js" type="text/javascript"></script>
    <script src="/statics/basic/js/respond.min.js" type="text/javascript"></script>
    <script src="/statics/basic/js/selectivizr-min.js" type="text/javascript"></script>
    <![endif]-->

    <!--[if lt IE 9]>
    <script>window.location.href="/site/upgrade-browser";</script>
    <![endif]-->
</head>
<body >
<header class="header">
    <nav class="navbar navbar-default" id="navbar">
        <div class="container">
            <div class="header-topbar hidden-xs link-border">
                <ul class="site-nav topmenu">
                    <li><a href="/site/tags">标签云</a></li>
                    <li><a href="/site/readers" rel="nofollow">读者墙</a></li>
                    <li><a href="/site/links" rel="nofollow">友情链接</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" rel="nofollow">关注本站 <span class="caret"></span></a>
                        <ul class="dropdown-menu header-topbar-dropdown-menu">
                            <li><a data-toggle="modal" data-target="#WeChat" rel="nofollow"><i class="fa fa-weixin"></i> 微信</a></li>
                            <li><a href="#" rel="nofollow"><i class="fa fa-weibo"></i> 微博</a></li>
                            <li><a data-toggle="modal" data-target="#areDeveloping" rel="nofollow"><i class="fa fa-rss"></i> RSS</a></li>
                        </ul>
                    </li>
                </ul>
                @if (Auth::guest())
                {{--<a data-toggle="modal" data-target="#loginModal" class="login" rel="nofollow">Hi,请登录</a>&nbsp;&nbsp;--}}
                <a href="{{ route('login') }}" class="register" rel="nofollow">Hi,请登录</a>&nbsp;&nbsp;
                <a href="{{ route('register') }}" class="register" rel="nofollow">注册账号</a>&nbsp;&nbsp;
                @else
                <a href="/home" class="register" rel="nofollow">{{ Auth::user()->name }}</a>&nbsp;&nbsp;
                <a href="{{ route('logout') }}" class="register" rel="nofollow" onclick="event.preventDefault();document.getElementById('logout-form').submit();">退出</a>&nbsp;&nbsp
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @endif
            </div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar" aria-expanded="false"> <span class="sr-only"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <!--<h1 class="logo hvr-bounce-in"><a href="#" title=""><img src="/statics/basic/images/logo.png" alt="" width="160" height="46"></a></h1>-->
                <h1 class="logo hvr-bounce-in">
                    <a href="{{ route('site') }}" title="">鸿宇社区</a>
                </h1>
            </div>
            <div class="collapse navbar-collapse" id="header-navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden-index active"><a data-cont="首页" href="{{ route('site') }}">首页</a></li>
                    <li><a href="/">鸿宇官网</a></li>
                    <li><a href="http://www.ebestmall.com/" target="_blank">eBestMall</a></li>
                    <li><a href="http://bbs.hongyuvip.com/" target="_blank">鸿宇小京东论坛</a></li>
                    <li><a href="http://hongyuweb.taobao.com/" target="_blank">鸿宇淘宝店铺</a></li>
                    {{--<li><a href="/article/list">文章列表</a></li>--}}
                </ul>
                <form class="navbar-form visible-xs" action="/Search" method="post">
                    <div class="input-group">
                        <input type="text" name="keyword" class="form-control" placeholder="请输入关键字" maxlength="20" autocomplete="off">
                        <span class="input-group-btn">
            <button class="btn btn-default btn-search" name="search" type="submit">搜索</button>
            </span> </div>
                </form>
            </div>
        </div>
    </nav>
</header>
<section class="container">
    @yield('content')
</section>
<footer class="footer">
    <div class="container">
        <p>&copy; 2017 <a href="http://www.hongyuvip.com/">HongYuKeji</a> &nbsp; <a href="http://www.miitbeian.gov.cn/" target="_blank" rel="nofollow">中ICP备20181218-1</a> &nbsp; <a href="sitemap.xml" target="_blank" class="sitemap">网站地图</a></p>
    </div>
    <div id="gotop"><a class="gotop"></a></div>
</footer>
<!--微信二维码模态框-->
<div class="modal fade user-select" id="WeChat" tabindex="-1" role="dialog" aria-labelledby="WeChatModalLabel">
    <div class="modal-dialog" role="document" style="margin-top:120px;max-width:280px;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="WeChatModalLabel" style="cursor:default;">微信扫一扫</h4>
            </div>
            <div class="modal-body" style="text-align:center"> <img src="/statics/basic/images/weixin.jpg" alt="" style="cursor:pointer"/> </div>
        </div>
    </div>
</div>
<!--该功能正在日以继夜的开发中-->
<div class="modal fade user-select" id="areDeveloping" tabindex="-1" role="dialog" aria-labelledby="areDevelopingModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="areDevelopingModalLabel" style="cursor:default;">该功能正在日以继夜的开发中…</h4>
            </div>
            <div class="modal-body"> <img src="/statics/basic/images/baoman/baoman_01.gif" alt="深思熟虑" />
                <p style="padding:15px 15px 15px 100px; position:absolute; top:15px; cursor:default;">很抱歉，程序猿正在日以继夜的开发此功能，本程序将会在以后的版本中持续完善！</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">朕已阅</button>
            </div>
        </div>
    </div>
</div>
<!--登录注册模态框-->
<div class="modal fade user-select" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('login') }}" method="post">
                {{ csrf_field() }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="loginModalLabel">登录</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="loginModalUserNmae">用户名</label>
                        <input type="text" class="form-control" id="loginModalUserNmae" name="email" placeholder="请输入用户名" autofocus maxlength="255" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="loginModalUserPwd">密码</label>
                        <input type="password" class="form-control" id="loginModalUserPwd" name="password" placeholder="请输入密码" maxlength="255" autocomplete="off" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <button type="submit" class="btn btn-primary">登录</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="/statics/basic/js/scripts.js"></script>
@yield('javascript')
</body>
</html>
