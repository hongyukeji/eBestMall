@extends('layouts.base')

@section('title', 'eBestMall（鸿宇V8） - B2B2C商城系统')

@push('styles')
    <link href="{{ asset('statics/css/login.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('statics/js/login.js') }}"></script>
@endpush

@section('content')
    <div class="auth-login">
        <div class="header-login">
            <div class="w">
                <div class="logo">
                    <a href="/"><img src="/statics/img/public/logo.png" alt=""></a>
                    <span class="logo-salutatory">欢迎登陆</span>
                    <div class="logo-link"><a href="javascript:;"><i class="icon-chat"></i>登录页面，调查问卷</a></div>
                </div>
            </div>
        </div>

        <div class="content-login" style="background-color: #323234;">
            <div class="w">
                <div class="content-activity">
                    <a href="javascript:;"><img src="/statics/img/temp/login-activity-001.jpg" alt=""></a>
                </div>
                <div class="content-login-form">
                    <div class="content-login-form-header"><h3>账户登陆</h3></div>
                    <div class="content-login-form-main">
                        <div class="msg-wrap"></div>
                        <form id="form-login" action="/auth/login" method="post">
                            <input type="hidden" name="_csrf-frontend" value="bU_XS7kyldShjphF65suyUAJ8Em2gJjDt4petsI3hsglCr4mwXfAlfvJ7wC9_WKwcE2zJ8W4yfXHujfDnXX-qQ==">
                            <div class="form-group field-loginform-username required">
                                <div class="input-group"><label class="input-group-addon"><i class="fas fa-user fa-fw"></i></label><input type="text" id="loginform-username" class="form-control" name="LoginForm[username]" placeholder="邮箱/用户名/已验证手机" autocomplete="off" tabindex="1" aria-required="true"></div><p class="help-block help-block-error"></p>
                            </div>
                            <div class="form-group field-loginform-password required">
                                <div class="input-group"><label class="input-group-addon"><i class="fas fa-lock fa-fw"></i></label><input type="password" id="loginform-password" class="form-control" name="LoginForm[password]" placeholder="密码" autocomplete="off" tabindex="2" aria-required="true"></div><p class="help-block help-block-error"></p>
                            </div>
                            <div class="form-checkbox">
                                <input type="checkbox" name="LoginForm[rememberMe]" value="1" checked="checked" id="loginform-checkbox">
                                <label for="loginform-checkbox">自动登录</label>
                                <a href="javascript:;">忘记密码</a>
                            </div>
                            <div class="form-btn">
                                <button type="submit">登&nbsp;&nbsp;录</button>                        </div>
                        </form>                </div>
                    <div class="content-login-form-footer">
                        <div id="w0" class="auth-clients"><ul class="auth-clients"><li><a class="qq auth-link" href="/auth/auth?authclient=qq" title="QQ" data-popup-width="860" data-popup-height="480"><span class="auth-icon qq"></span></a></li><li><a class="weixin auth-link" href="/auth/auth?authclient=weixin" title="WeiXin" data-popup-width="860" data-popup-height="480"><span class="auth-icon weixin"></span></a></li><li><a class="weibo auth-link" href="/auth/auth?authclient=weibo" title="WeiBo" data-popup-width="860" data-popup-height="480"><span class="auth-icon weibo"></span></a></li><li><a class="github auth-link" href="/auth/auth?authclient=github" title="GitHub" data-popup-width="860" data-popup-height="480"><span class="auth-icon github"></span></a></li></ul></div>                    <div class="link"><a href="/auth/register"><i class="icon-chevron-circle-right"></i>立即注册</a></div>
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
                <p>Copyright © 2015 - 2018  eBestMall <a href="http://www.hongyuvip.com/" target="_blank">鸿宇科技</a> 版权所有</p>
            </div>
        </div>
    </div>
@endsection
