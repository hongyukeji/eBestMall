<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>欢迎注册 - eBestMall</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/app.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/register.css') }}" />
    <script type="text/javascript" src="{{ asset('static/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('static/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('static/js/register.js') }}"></script>
</head>
<body>
<div class="auth-register">
    <div class="header-register">
        <div class="w">
            <div class="logo">
                <a href="/"><img src="/static/img/public/logo.png" alt=""></a>
                <span class="logo-salutatory">欢迎注册</span>
                <div class="logo-link">已有账号？ <a href="/auth/login">请登录</a></div>
            </div>
        </div>
    </div>
    <div class="content-register">
        <div class="w">
            <div class="content-register-from">

                <form id="form-register" action="/auth/register" method="post" autocomplete="off">
                    <input type="hidden" name="_csrf-frontend" value="CAkFOdo6tkHdagS0Fprpg5JVCAQcPrIP_vxmoikSu05ke1p8u0vkIuQ8M8Z59Ib34CxcNFFx-Ha6kSvTXz_vfA==">
                    <div class="form-item field-registerform-username required">
                        <label class="control-label" for="registerform-username">用户名</label>
                        <input type="text" id="registerform-username" class="form-control" name="RegisterForm[username]" placeholder="您的账户名和登录名" aria-required="true">

                        <p class="help-block help-block-error"></p>
                    </div>
                    <div class="form-item field-registerform-password required">
                        <label class="control-label" for="registerform-password">密码</label>
                        <input type="password" id="registerform-password" class="form-control" name="RegisterForm[password]" placeholder="建议至少使用两种字符组合" aria-required="true">

                        <p class="help-block help-block-error"></p>
                    </div>
                    <div class="form-item field-registerform-re_password required">
                        <label class="control-label" for="registerform-re_password">确认密码</label>
                        <input type="password" id="registerform-re_password" class="form-control" name="RegisterForm[re_password]" placeholder="请再次输入密码" aria-required="true">

                        <p class="help-block help-block-error"></p>
                    </div>
                    <div class="form-item field-register-mobile-phone required">
                        <label class="control-label" for="register-mobile-phone">手机号</label>
                        <input type="text" id="register-mobile-phone" class="form-control" name="RegisterForm[mobile]" placeholder="建议使用常用手机号" aria-required="true">

                        <p class="help-block help-block-error"></p>
                    </div>
                    <div class="register-options-email-switch" style="height: 25px;text-align: right;margin-top: -25px;">
                        <a class="register-options-email-switch-on" data-on="邮箱验证" data-off="手机验证" style="color: #38f;cursor: pointer">邮箱验证</a>
                    </div>

                    <div class="form-item register-options-email hidden field-registerform-email">
                        <label class="control-label" for="registerform-email">邮箱</label>
                        <input type="text" id="registerform-email" class="form-control" name="RegisterForm[email]" placeholder="建议使用常用邮箱">

                        <p class="help-block help-block-error"></p>
                    </div>
                    <div class="form-item verify-code-item field-registerform-verify_code required">
                        <label class="control-label" for="registerform-verify_code">验证码</label>
                        <div class="col-lg-5 verify-code-item-div"><input type="text" id="registerform-verify_code" name="RegisterForm[verify_code]" placeholder="请输入验证码" aria-required="true"></div><img id="captchaimg" src="/auth/captcha?v=5ac70fb01f592" alt="" title="换一换" style="cursor:pointer;float: right;margin: 3px;height: 44px;wid 100px;">

                        <p class="help-block help-block-error"></p>
                    </div>
                    <div class="form-item register-send-sms-code field-registerform-smscode required" data-count-down="60" data-check-mobile-url="http://www.ebestmall.com/auth/check-mobile-exists" data-send-sms-code-url="http://www.ebestmall.com/auth/send-sms-code">
                        <label class="control-label" for="registerform-smscode">手机验证码</label><div class="col-lg-5 verify-code-item-div"><input type="text" id="registerform-smscode" class="form-control" name="RegisterForm[smsCode]" placeholder="请输入手机验证码" aria-required="true"></div><p class="help-block help-block-error"></p><button id="getSmsCode" class="phone-code-btn" data-text-sending="正在发送..." data-text-error="短信发送错误提示" data-text-get="获取验证码" data-text-tips="秒后重发" type="button">获取验证码</button>
                    </div>
                    <div class="form-group has-feedback field-registerform-rememberme">
                        <div class="checkbox">
                            <label for="registerform-rememberme">
                                <input type="hidden" name="RegisterForm[rememberMe]" value="0"><input type="checkbox" id="registerform-rememberme" name="RegisterForm[rememberMe]" value="1" checked=""><span class="pull-right"><a class="user-registration-protocol" data-toggle="modal" data-target="#registrationProtocol">《注册协议》</a></span>
                                阅读并同意
                            </label>
                            <p class="help-block help-block-error"></p>

                        </div>
                    </div>
                    <div class="form-btn">
                        <button type="submit">立即注册</button>                </div>

                </form>
                <div class="content-register-from-link">
                    <div class="auth-clients-event">
                        <a href="javascript:;">
                            <img src="/static/img/temp/temp-20180101115452_thumbnail.jpg">
                        </a>
                    </div>
                    <div class="auth-clients-title">
                        其他方式注册
                    </div>
                    <div id="w0" class="auth-clients"><ul class="auth-clients"><li><a class="qq auth-link" href="/auth/auth?authclient=qq" title="QQ" data-popup-width="860" data-popup-height="480"><span class="auth-icon qq"></span></a></li><li><a class="weixin auth-link" href="/auth/auth?authclient=weixin" title="WeiXin" data-popup-width="860" data-popup-height="480"><span class="auth-icon weixin"></span></a></li><li><a class="weibo auth-link" href="/auth/auth?authclient=weibo" title="WeiBo" data-popup-width="860" data-popup-height="480"><span class="auth-icon weibo"></span></a></li><li><a class="github auth-link" href="/auth/auth?authclient=github" title="GitHub" data-popup-width="860" data-popup-height="480"><span class="auth-icon github"></span></a></li></ul></div>                </div>
            </div>
        </div>
    </div>
    <!-- 用户注册协议 模态框（Modal） -->
    <div class="modal fade" id="registrationProtocol" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="wid 900px;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">注册协议</h4>
                </div>
                <div class="modal-body" style="height:350px;overflow:auto;">
                    <!--注册协议内容-->
                    <div class="protocol-content">
                        <div class="protocol_body" style="font-family: '宋体', Simsun;" mce_style="font-family: '宋体', Simsun;">

                            <p>　　尊敬的用户您好，欢迎您访问eBestMall网站（以下简称：网站）。在您注册成为网站会员之前，请您务必认真阅读和理解《注册协议》（以下简称：协议）中所有的条款。您须完全同意协议中所有的条款，才可以注册成为本网站的会员，使用里面的服务。您在网站的注册和操作均将被视为是您对协议所有条款及内容的自愿接受。<br>
                                <strong>　　第一条</strong> <strong>声明</strong><br>
                                　　（一）网站内在线产品的所有权归eBestMall所有。<br>
                                　　（二）您在网站进行注册时，勾选“阅读并同意《注册协议》 ”按钮，即表示为您已自愿接受协议中所有的条款和内容。<br>
                                　　（三）协议条款的效力范围仅限于本网站，您在网站的行为均受协议的约束。<br>
                                　　（四）您使用网站服务的行为，即被视为您已知悉本网站的相关公告并同意。<br>
                                　　（五）本网站有权在未提前通知您的情况下修改协议的条款，您每次进入网站在使用服务前，都应先查阅一遍协议。<br>
                                　　（六）本网站有权在未提前通知您的情况下修改、暂停网站部分或全部的服务，且不承担由此产生来自您和第三方的任何责任。<br>
                                　　（七）本网站提供免费注册服务，您的注册均是自愿行为，注册成功后，您可以得到网站更加完善的服务。<br>
                                　　（八）您注册成为会员后账户和密码如有灭失，不会影响到您已办理成功业务的效力，本网站可恢复您的注册账户及相关信息但不承担除此以外的其它任何责任。<br>
                                <strong>　　第二条 用户管理</strong><br>
                                　　（一）您在本网站的所有行为都须符合中国的法律法规，您不得利用本网站提供的服务制作、复制、发布、传播以下信息：<br>
                                　　1、反对宪法基本原则的；<br>
                                　　2、危害国家安全、泄露国家秘密、颠覆国家政权、破坏国家统一的；<br>
                                　　3、损害国家荣誉和利益的；<br>
                                　　4、煽动民族仇恨、民族歧视、破坏民族团结的；<br>
                                　　5、破坏国家宗教政策，宣扬邪教和封建迷信的；<br>
                                　　6、散布谣言、扰乱社会秩序、破坏社会稳定的；<br>
                                　　7、散布淫秽、色情、赌博、暴力、凶杀、恐怖内容或者教唆犯罪的；<br>
                                　　8、侮辱或者诽谤他人，侵害他人合法权益的；<br>
                                　　9、以及法律、法规禁止的其他内容；<br>
                                　　（二）您在本网站的行为，还必须符合其它国家和地区的法律规定以及国际法的有关规定。<br>
                                　　（三）不得利用本网站从事以下活动：<br>
                                　　1、未经允许，进入他人计算机信息网络或者使用他人计算机信息网络的资源；<br>
                                　　2、未经允许，对他人计算机信息网络的功能进行删除、修改或增加；<br>
                                　　3、未经允许，对他人计算机信息网络中存储、处理或者传输的数据和应用程序进行删除、修改或者增加；<br>
                                　　4、制作、故意传播计算机病毒等破坏性程序的；<br>
                                　　5、其他危害计算机信息网络安全的行为；<br>
                                　　（四）遵守本网站其他规定和程序：<br>
                                　　1、您对自己在本网站中的行为和操作承担全部责任；<br>
                                　　2、您承担责任的形式包括但不仅限于，对受到侵害者进行赔偿、在本网站首先承担了因您的行为导致的行政处罚或侵权损害赔偿责任后，您应给予本网站的等额赔偿；<br>
                                　　3、如果本网站发现您传输的信息含有本协议<u>第二条所列内容之一的</u>，本网站有权在不通知您的情况下采取包括但不仅限于向国家有关机关报告、保存有关记录、删除该内容及链接地址、关闭服务器、暂停您账号的操作权限、停止向您提供服务等措施；<br>
                                <strong>　　第三条 注册会员权利和义务</strong><br>
                                　　（一）注册会员有权用本网站提供的服务功能。<br>
                                　　（二）注册会员同意遵守包括但不仅限于《中华人民共和国保守国家秘密法》、《中华人民共和国计算机信息系统安全保护条例》、《计算机软件保护条例》、《互联网电子公告服务管理规定》、《互联网信息服务管理办法》等在内的法律、法规。<br>
                                　　（三）您注册时有义务提供完整、真实、的个人信息，信息如有变更，应及时更新。<br>
                                　　（四）您成为注册会员须妥善保管用户名和密码，用户登录后进行的一切活动均视为是您本人的行为和意愿，您负全部责任。<br>
                                　　（五）您在使用本网站服务时，同意且接受本网站提供的各类信息服务。<br>
                                　　（六）您使用本网站时，禁止有以下行为：<br>
                                　　1、上载、张贴、发送电子邮件或以其他方式传送含有违反国家法律、法规的信息或资料，这些资料包括但不仅限于资讯、资料、文字、软件、音乐、照片、图形、等（下同）；<br>
                                　　2、散布淫秽、色情、赌博、暴力、凶杀、恐怖或者教唆犯罪的资料；<br>
                                　　3、冒充任何个人或机构，或以虚伪不实的方式误导他人以为其与任何人或任何机构有关；<br>
                                　　4、通过本网站干扰、破坏或限制他人计算机软件、硬件或通讯设备功能的行为；<br>
                                　　5、通过本网站跟踪或以其他方式骚扰他人；<br>
                                <strong>　　第四条 用户隐私</strong><br>
                                　　我们承诺，对您个人的信息和隐私的安全承担保密义务。未经您授权或同意，本网站不会将您的个人资料信息泄露给第三方，但以下情况除外，且本网站不承担任何责任：<br>
                                　　（一）政府单位按照中华人民共和国的法律、行政法规、部门规章、司法解释等规范性法律文件（统称“法律法规”），要求本网站提供的；<br>
                                　　（二）由于您将用户和密码告知或泄露给他人，由此导致的个人资料泄露；<br>
                                　　（三）包括但不仅限于黑客攻击、计算机病毒侵入或发作、政府管制等不可抗力而造成的用户个人资料泄露、丢失、被盗用或被篡改等；<br>
                                　　（四）您通过本网站链接其他网站造成的个人资料泄露以及由此导致的任何法律争议和后果；<br>
                                　　（五）为免除他人正在遭受威胁到其生命、身体或财产等方面的危险，所采取的措施；<br>
                                　　（六）本网站会与其他网站链接，但不对其他网站的隐私政策及内容负责；<br>
                                　　（七）此外，您若发现有任何非法使用您的用户账号或安全漏洞的情况，应立即通告本网站；<br>
                                　　（八）由于您自身的疏忽、大意等过错所导致的；<br>
                                　　（九）您在本网站的有关记录有可能成为您违反法律法规和本协议的证据；<br>
                                <strong>　　第五条 知识产权</strong><br>
                                　　本网站所有的域名、商号、商标、文字、视像及声音内容、图形及图像均受有关所有权和知识产权法律的保护，未经本网站事先以书面明确允许，任何个人或单位，均不得进行复制和使用。<br>
                                <strong>　　第六条 法律适用</strong><br>
                                　　（一）协议由本网站的所有人负责修订，并通过本网站公布，您的注册行为即被视为您自愿接受协议的全部条款，受其约束。<br>
                                　　（二）协议的生效、履行、解释及争议的解决均适用中华人民共和国法律。<br>
                                　　（三）您使用网站提供的服务如产生争议，原则上双方协商解决，协商不成可向本网站所有人所在的仲裁机构、人民法院进行调解或提起诉讼。<br>
                                　　（四）协议的条款如与法律相抵触，本网站可进行重新解析，而其他条款则保持对您产生法律效力和约束。<br>
                                &nbsp;</p>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    <button type="button" class="btn btn-success" data-dismiss="modal">知道了</button>
                </div>
            </div>
        </div>
    </div>
    <!-- 短信提示 模态框（Modal） -->
    <div class="modal fade" id="registerTipsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">注册提示</h4>
                </div>
                <div class="modal-body">
                    <div class="register-tips-content">
                        <p>手机号已存在，请更换手机号</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    <button type="button" class="btn btn-success" data-dismiss="modal">知道了</button>
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
            <p>Copyright © 2015 - 2018 eBestMall <a href="http://www.hongyuvip.com/" target="_blank">鸿宇科技</a> 版权所有</p>
        </div>
    </div>
</div>
</body>
</html>