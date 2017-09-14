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
    <link rel="stylesheet" href="/static/css/register.css" />
<body>

<div class="header-register">
    <div class="w">
        <div class="logo">
            <a href="{{ url('/') }}"><img src="static/img/public/logo.png" alt=""></a>
            <span class="logo-salutatory">欢迎注册</span>
            <div class="logo-link">已有账号？ <a href="{{ url('/login') }}">请登录</a></div>
        </div>
    </div>
</div>

<div class="content-register">
    <div class="w">
        <div class="content-register-from">
            <p>
            @if (session('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>提示：</strong> {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>提示：</strong> {{ session('error') }}
                </div>
            @endif
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </p>
            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="form-item">
                    <label>用　户　名</label>
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="您的账户名和登录名" autocomplete="off">
                </div>
                <div class="input-tip">
                    <span><i class="icon-error"></i>支持中文、字母、数字、“-”“_”的组合，4-20个字符</span>
                    <span class="error hide"><i class="icon-error"></i>格式错误，仅支持汉字、字母、数字、“-”“_”的组合</span>
                </div>

                <div class="form-item">
                    <label>设 置 密 码</label>
                    <input type="password" name="password" placeholder="建议至少使用两种字符组合">
                </div>
                <div class="input-tip">
                    <span><i class="icon-error"></i>建议至少使用两种字符组合</span>
                    <span class="error hide"><i class="icon-error"></i></span>
                </div>

                <div class="form-item">
                    <label>确 认 密 码</label>
                    <input type="password" name="password_confirmation" placeholder="请再次输入密码">
                </div>
                <div class="input-tip">
                    <span><i class="icon-error"></i>请再次输入密码</span>
                    <span class="error hide"><i class="icon-error"></i></span>
                </div>

                <div class="form-item">
                    <label>邮 箱 验 证</label>
                    <input type="text" name="email" value="{{ old('email') }}" placeholder="建议使用常用邮箱">
                </div>
                <div class="input-tip">
                    <span><i class="icon-error"></i>建议使用常用邮箱，完成验证后，你可以用该邮箱登录和找回密码</span>
                    <span class="error hide"><i class="icon-error"></i></span>
                </div>

                <div class="form-item">
                    <label>中国&nbsp;&nbsp;+86</label>
                    <input type="text" name="mobile_phone" value="{{ old('mobile_phone') }}" placeholder="建议使用常用手机">
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

            </form>

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
</body>
</html>