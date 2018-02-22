@extends('layouts.app')

@section('title', 'eBestMall（鸿宇V8） - B2B2C商城系统')

@push('styles')
    <link href="{{ asset('statics/css/cart.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('statics/js/cart.js') }}"></script>
@endpush

@section('content')
    <ul class="breadcrumb">
        <li><a href="/">首页</a></li>
        <li><a href="javascript:;">我的购物车</a></li>
        <li class="active">确认订单信息</li>
    </ul>

    <div class="order-index">
        <div class="my-cart">
            <div class="cart-title">
                <div class="see-cart"><span>1</span>我的购物车<div class="back"></div></div>
                <div class="firm-order active"><div class="front"></div><span>2</span>确认订单信息<div class="back"></div></div>
                <div class="place-order"><div class="front"></div><span>3</span>成功提交订单</div>
            </div>
            <div class="cart-order-wrap">
                <div class="cart-order">
                    <div class="consignee-info-title">
                        <h3>收货人信息</h3>
                        <div class="consignee-info-create"><a href="javascript:;">新增收货地址</a></div>
                    </div>
                    <div class="consignee-info-content">
                        <div class="consignee-address">
                            <div class="consignee-address-list">
                                <ul>
                                    <li>
                                        <div class="consignee-address-list-name">Shadow<span class="item-selected"></span></div>
                                        <div class="consignee-address-list-detail">
                                            <div class="consignee-address-list-detail-name">Shadow</div>
                                            <div class="consignee-address-list-detail-info">北京 北京市 朝阳区 望京路1288号A-8-8</div>
                                            <div class="consignee-address-list-detail-tel">138****8000</div>
                                            <div class="consignee-address-list-detail-default">默认地址</div>
                                        </div>
                                        <div class="consignee-address-list-detail-operation">
                                            <a href="javascript:;">编辑</a>
                                            <a href="javascript:;">删除</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="consignee-address-list-name">Shadow</div>
                                        <div class="consignee-address-list-detail">
                                            <div class="consignee-address-list-detail-name">Shadow</div>
                                            <div class="consignee-address-list-detail-info">北京 北京市 朝阳区 望京路1288号A-8-8</div>
                                            <div class="consignee-address-list-detail-tel">138****8000</div>
                                        </div>
                                        <div class="consignee-address-list-detail-operation">
                                            <a href="javascript:;">设为默认地址</a>
                                            <a href="javascript:;">编辑</a>
                                            <a href="javascript:;">删除</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="consignee-address-list-name">Shadow</div>
                                        <div class="consignee-address-list-detail">
                                            <div class="consignee-address-list-detail-name">Shadow</div>
                                            <div class="consignee-address-list-detail-info">北京 北京市 朝阳区 望京路1288号A-8-8</div>
                                            <div class="consignee-address-list-detail-tel">138****8000</div>
                                        </div>
                                        <div class="consignee-address-list-detail-operation">
                                            <a href="javascript:;">设为默认地址</a>
                                            <a href="javascript:;">编辑</a>
                                            <a href="javascript:;">删除</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="consignee-address-list-name">Shadow</div>
                                        <div class="consignee-address-list-detail">
                                            <div class="consignee-address-list-detail-name">Shadow</div>
                                            <div class="consignee-address-list-detail-info">北京 北京市 朝阳区 望京路1288号A-8-8</div>
                                            <div class="consignee-address-list-detail-tel">138****8000</div>
                                        </div>
                                        <div class="consignee-address-list-detail-operation">
                                            <a href="javascript:;">设为默认地址</a>
                                            <a href="javascript:;">编辑</a>
                                            <a href="javascript:;">删除</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="consignee-address-list-name">Shadow</div>
                                        <div class="consignee-address-list-detail">
                                            <div class="consignee-address-list-detail-name">Shadow</div>
                                            <div class="consignee-address-list-detail-info">北京 北京市 朝阳区 望京路1288号A-8-8</div>
                                            <div class="consignee-address-list-detail-tel">138****8000</div>
                                        </div>
                                        <div class="consignee-address-list-detail-operation">
                                            <a href="javascript:;">设为默认地址</a>
                                            <a href="javascript:;">编辑</a>
                                            <a href="javascript:;">删除</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="consignee-address-more-btn">
                            <a href="javascript:;">更多地址 >></a>
                        </div>
                        <div class="consignee-address-more-btn hide">
                            <a href="javascript:;">收起地址 >></a>
                        </div>
                    </div>
                    <div class="hr"></div>
                    <div class="consignee-info-content-body">
                        <div class="consignee-info-title">
                            <h3>支付方式</h3>
                        </div>
                        <div class="consignee-info-content">
                            <div class="consignee-payment-list">
                                <ul>
                                    <li class="item active">货到付款<span class="item-selected"></span></li>
                                    <li class="invalid">在线支付</li>
                                    <li class="item">微信支付</li>
                                    <li class="item">支付宝</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="hr"></div>
                    <div class="consignee-info-content-body">
                        <div class="consignee-info-title">
                            <h3>送货清单</h3>
                            <div class="consignee-info-create"><a href="javascript:;">返回购物车</a></div>
                        </div>
                        <div class="consignee-info-content">
                            <div class="delivery-list-wrap">
                                <div class="delivery-list">
                                    <div class="dis-modes">
                                        <div class="delivery-list-shipping">
                                            <h4>配送方式</h4>
                                            <div class="delivery-list-shipping-list">
                                                <ul>
                                                    <li class="item active">快递运输<span class="item-selected"></span></li>
                                                </ul>
                                            </div>
                                            <div class="delivery-list-shipping-introduce">
                                                <span class="delivery-list-shipping-introduce-title">配送时间：</span>
                                                <span class="delivery-list-shipping-introduce-content">工作日、双休日与节假日均可送货</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="goods-list">
                                        <div class="goods-list-title"><h4>商家：佳沪数码手机旗舰店</h4></div>
                                        <div class="goods-items">
                                            <div class="goods-items-img">
                                                <a href="javascript:;"><img src="/statics/img/temp/temp-goods_002.jpg" width="88" height="88" alt=""></a>
                                            </div>
                                            <div class="goods-items-info">
                                                <div class="goods-items-info-name"><a href="javascript:;">苹果Apple iPhone7 手机 黑色 移动联通 128GB</a></div>
                                                <div class="goods-items-info-list">
                                                    <strong class="goods-items-info-price">￥ 5299.00</strong>
                                                    <span class="goods-items-info-number">x1</span>
                                                    <span class="goods-items-info-state">有货</span>
                                                </div>
                                                <div class="goods-items-info-extend">
                                                    <div class="goods-item-info-extend-item"><a href="javascript:;"><i class="icon-shield"></i>支持7天无理由退货</a></div>
                                                </div>
                                                <div class="goods-items-info-extend">
                                                    <p><span class="goods-items-info-extend-item">【赠品】 苹果品牌钢化膜（图片仅供参考） iPhone 7 ×1</span>&nbsp;&nbsp;<a href="javascript:;">查看价格</a></p>
                                                    <p><span class="goods-items-info-extend-item">【赠品】 苹果品牌软胶套（图片仅供参考） iPhone7 ×1</span>&nbsp;&nbsp;<a href="javascript:;">查看价格</a></p>
                                                    <p><span class="goods-items-info-extend-item">【赠品】 手机指环扣 （请以实物为准） 颜色随机发 ×1</span>&nbsp;&nbsp;<a href="javascript:;">查看价格</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="delivery-list-wrap order-remarks-wrap">
                                <div class="order-remarks-title">添加订单备注</div>
                                <div class="order-remarks-content">
                                    <input type="text" placeholder="限45个字（定制类商品，请将购买需求在备注中做详细说明）">
                                    <span>提示：请勿填写有关支付、收货、发票方面的信息</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="cart-order-footer-wrap">
                <div class="cart-order-footer">
                    <div class="order-summary">
                        <div class="order-summary-item">
                            <span><em class="order-summary-item-num">1</em>&nbsp;件商品，总商品金额：</span>
                            <em>￥5299.00</em>
                        </div>
                        <div class="order-summary-item">
                            <span>运费：</span>
                            <em>￥0.00</em>
                        </div>
                    </div>
                </div>
                <div class="cart-order-footer-detail">
                    <div class="cart-order-footer-detail-price">
                        <p>应付总额：<strong class="price-num">￥5299.00</strong></p>
                    </div>
                    <div class="cart-order-footer-detail-consignee-info">
                        <span class="cart-order-footer-detail-address">北京 北京市 朝阳区 望京路1288号A-8-8</span>
                        <span class="cart-order-footer-detail-contact">收货人：Shadow 138****8000</span>
                    </div>
                </div>
                <div class="cart-order-footer-btn">
                    <a type="submit">提交订单</a>
                </div>
            </div>
        </div>
    </div>
@endsection