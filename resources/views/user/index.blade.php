@extends('layouts.main')

@section('title')
    会员中心
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('static/css/user.css') }}" />
@endsection

@section('content')
    <ul class="breadcrumb"><li><a href="javascript:;">首页</a></li>
        <li class="active">会员中心</li>
    </ul>

    <!--Begin 用户中心 Begin -->
    <div class="m_content">
        <div class="m_left">
            <div class="left_n"><a href="javascript:;">会员中心</a></div>
            <div class="left_m">
                <div class="left_m_t"><i class="icon-edit"></i>订单中心</div>
                <ul>
                    <li><a href="javascript:;">我的订单</a></li>
                    <li><a href="javascript:;">收货地址</a></li>
                    <li><a href="javascript:;">缺货登记</a></li>
                    <li><a href="javascript:;">跟踪订单</a></li>
                </ul>
            </div>
            <div class="left_m">
                <div class="left_m_t"><i class="icon-user-o"></i>会员信息</div>
                <ul>
                    <!--<li><a class="active" href="javascript:;">用户信息</a></li>-->
                    <li><a href="javascript:;">用户信息</a></li>
                    <li><a href="javascript:;">我的收藏</a></li>
                    <li><a href="javascript:;">我的留言</a></li>
                    <li><a href="javascript:;">推广链接</a></li>
                    <li><a href="javascript:;">我的评论</a></li>
                </ul>
            </div>
            <div class="left_m">
                <div class="left_m_t"><i class="icon-coin-yen"></i>账户中心</div>
                <ul>
                    <li><a href="javascript:;">账户安全</a></li>
                    <li><a href="javascript:;">我的红包</a></li>
                    <li><a href="javascript:;">资金管理</a></li>
                </ul>
            </div>
            <div class="left_m">
                <div class="left_m_t"><i class="icon-banknote"></i>分销中心</div>
                <ul>
                    <li><a href="javascript:;">我的会员</a></li>
                    <li><a href="javascript:;">我的业绩</a></li>
                    <li><a href="javascript:;">我的佣金</a></li>
                    <li><a href="javascript:;">申请提现</a></li>
                </ul>
            </div>
        </div>
        <div class="m_right">
            <div class="m_des">
                <table border="0" cellspacing="0" cellpadding="0">
                    <tr valign="top">
                        <td width="115"><img src="{{ Auth::user()->avatar }}" width="90" height="90" /></td>
                        <td>
                            <div class="m_user">{{ Auth::user()->name }}</div>
                            <p>
                                等级：注册用户 <br />
                                您还没有通过邮件认证 <a href="javascript:;" style="color:#ff4e00;">点此发送认证邮件</a>
                            </p>
                            <div class="m_notice"><i class="icon-megaphone"></i>
                                用户中心公告！
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="mem_t">资产信息</div>
            <table border="0" class="mon_tab" style="width:870px; margin-bottom:20px;" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="33%">用户等级：<span style="color:#555555;">钻石会员</span></td>
                    <td width="33%">消费金额：<span>￥200元</span></td>
                    <td width="33%">返还积分：<span>{{ Auth::user()->info->score }}</span></td>
                </tr>
                <tr>
                    <td>账户余额：<span>￥{{ Auth::user()->info->money }}元</span></td></td>
                    <td>红包个数：<span style="color:#555555;">3个</span></td></td>
                    <td>红包价值：<span>￥50元</span></td></td>
                </tr>
                <tr>
                    <td colspan="3">订单提醒：
                        <font style="font-family:'宋体';">待付款(<span>0</span>) &nbsp; &nbsp; &nbsp; &nbsp; 待收货(<span>2</span>) &nbsp; &nbsp; &nbsp; &nbsp; 待评论(<span>1</span>)</font>
                    </td>
                </tr>
            </table>

            <div class="mem_t">账号信息</div>
            <table border="0" class="acc_tab" style="width:870px;" cellspacing="0" cellpadding="0">
                <tr>
                    <td class="td_l">手&nbsp;机&nbsp;号：</td>
                    <td>{{ Auth::user()->mobile_phone }}</td>
                </tr>
                <tr>
                    <td class="td_l">邮　　箱： </td>
                    <td>{{ Auth::user()->email }}</td>
                </tr>
                <tr>
                    <td class="td_l">注册时间：</td>
                    <td>{{ Auth::user()->info->created_at->toDateString() }}</td>
                </tr>
            </table>

        </div>
    </div>
    <!--End 用户中心 End-->
@endsection