@extends('frontend.layouts.app')

@section('title')
    成功提交订单 - eBestMall
@stop

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('static/css/cart.css') }}">
@stop

@section('javascript')
    <script src="{{ asset('static/js/cart.js') }}"></script>
@stop

@section('content')
    <div class="cart-create">
        <ul class="breadcrumb">
            <li><a href="/">首页</a></li>
            <li><a href="/cart">我的购物车</a></li>
            <li><a href="/order">确认订单信息</a></li>
            <li class="active">成功提交订单</li>
        </ul>
        <div class="my-cart">
            <div class="cart-title">
                <div class="see-cart"><span>1</span>我的购物车<div class="back"></div></div>
                <div class="firm-order"><div class="front"></div><span>2</span>确认订单信息<div class="back"></div></div>
                <div class="place-order active"><div class="front"></div><span>3</span>成功提交订单</div>
            </div>
            <div class="cart-content">
                <div class="order-info">
                    <div class="order-info-wrap">
                        <div class="order-info-left">
                            <h3>订单提交成功，请您尽快付款！ 订单号：20178888888</h3>
                            <p>请您在<span>24小时</span>完成支付，否则订单会被自动取消（库存紧俏商品支付时限以订单详情页为准）。</p>
                        </div>
                        <div class="order-info-right">
                            <p>应付金额<strong>￥499.00</strong>元</p>
                            <p>
                                <a href="javascript:;">订单详情</a>
                                <!--<a href="javascript:;">收起详情</a>-->
                            </p>
                        </div>
                    </div>
                    <div class="order-info-list hide">
                        <p>
                            <span>收货地址：北京 北京市 朝阳区 望京路1288号A-8-8</span>
                            <span>收货人：Shadow</span>
                            <span>138****8000</span>
                        </p>
                        <p>
                            <span>商品名称：TP-LINK TL-WAR1200L 1200M双频企业级无线路由器 千兆端口/wifi穿墙</span>
                        </p>
                    </div>
                </div>
                <div class="order-payment">
                    <div class="order-payment-title">
                        <div class="order-payment-title-logo">
                            <div class="order-payment-title-logo-e">余额支付</div>
                        </div>
                        <div class="order-payment-title-text">以下支付方式由平台余额支付提供</div>
                    </div>
                    <div class="order-payment-body">
                        <div class="order-payment-list">
                            <div class="order-payment-list-title">
                                <input type="checkbox">
                                <span>余额支付</span>
                            </div>
                            <div class="order-payment-list-body">可用额度<span>|</span>999999.00&nbsp;元</div>
                        </div>
                    </div>
                </div>
                <div class="order-payment payment-other">
                    <div class="order-payment-title">
                        <div class="order-payment-title-logo">
                            <div class="order-payment-title-logo-e">其它支付</div>
                        </div>
                        <div class="order-payment-title-text">以下支付方式不支持合并支付</div>
                    </div>
                    <div class="order-payment-body">
                        <div class="order-payment-list-ul">
                            <a href="javascript:;">支付宝</a><span>|</span>
                            <a href="javascript:;">微信支付</a><span>|</span>
                            <a href="javascript:;">中国银联</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection