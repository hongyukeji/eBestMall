<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <title>eBestMall - B2B2C商城系统</title>
    <meta name="description" content="eBestMall是国内电子商务系统及服务解决方案新创品牌。为传统企业及创业者提供零售网店系统、网上商城系统、分销系统、B2B2C商城系统、微信分销系统、行业ERP等产品和解决方案。">
    <meta name="keyword" content="eBestMall,鸿宇商城,鸿宇分销,网店系统,网上商城系统,分销系统,B2B2C商城系统,微信分销系统">
    <link rel="stylesheet" href="/static/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/static/css/app.css" />
    <link rel="stylesheet" href="/static/css/login.css" />
<body>

<div class="header-login">
    <div class="w">
        <div class="logo">
            <a href="{{ url('/') }}"><img src="/static/img/public/logo.png" alt=""></a>
            <span class="logo-salutatory">欢迎登陆</span>
            <div class="logo-link"><a href="javascript:;"><i class="icon-chat"></i>登录页面，调查问卷</a></div>
        </div>
    </div>
</div>

<div class="content-login" style="background-color: #323234;">
    <div class="w">
        <div class="content-activity">
            <a href="javascript:;"><img src="/static/img/temp/login-activity-001.jpg" alt=""></a>
        </div>
        <div class="content-login-form">
            <div class="content-login-form-header"><h3>账户登陆</h3></div>
            <div class="content-login-form-main">
                <div class="msg-wrap">
                    @if (count($errors) > 0)
                    <div class="msg-error"><i class="icon-error"> </i><span>{{ $errors->first() }}</span></div>
                    @endif
                </div>
                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="form-item">
                        <label for="loginform-username"><i class="icon-user"></i></label>
                        <input type="text" id="loginform-username" name="name" value="{{ old('name') }}" placeholder="邮箱/用户名/已验证手机" autocomplete="off" required autofocus>
                    </div>
                    <div class="form-item">
                        <label for="loginform-password"><i class="icon-locked"></i></label>
                        <input type="password" id="loginform-password" placeholder="密码" name="password" required>
                    </div>
                    <div class="form-checkbox">
                        <input type="checkbox" id="loginform-checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label for="loginform-checkbox">自动登录</label>
                        <a href="javascript:;">忘记密码</a>
                    </div>
                    <div class="form-btn">
                        <button type="submit">登&nbsp;&nbsp;录</button>
                    </div>
                </form>
            </div>
            <div class="content-login-form-footer">
                <ul>
                    <li class="item"><span>|</span><a href="javascript:;"><i class="icon-qq"></i>QQ</a></li>
                    <li class="item"><span>|</span><a href="javascript:;"><i class="icon-wechat"></i>微信</a></li>
                    <li class="link"><a href="{{ url('/register') }}"><i class="icon-chevron-circle-right"></i>立即注册</a></li>
                </ul>
            </div>
        </div>
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
        <p>Copyright © 2015 - 2017  eBestMall 鸿宇科技 版权所有</p>
    </div>
</div>

</body>
</html>