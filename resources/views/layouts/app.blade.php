<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <title>@yield('title', 'eBestMall - B2B2C商城系统')</title>
    <meta name="description" content="eBestMall是国内电子商务系统及服务解决方案新创品牌。为传统企业及创业者提供零售网店系统、网上商城系统、分销系统、B2B2C商城系统、微信分销系统、行业ERP等产品和解决方案。">
    <meta name="keyword" content="eBestMall,鸿宇商城,鸿宇分销,网店系统,网上商城系统,分销系统,B2B2C商城系统,微信分销系统">

    @section('app_styles')
    <link rel="stylesheet"  type="text/css" href="/statics/css/bootstrap.min.css" />
    <link rel="stylesheet"  type="text/css" href="/statics/css/app.css" />
    @stack('styles')
    @show
</head>
<body>

@section('body')

<!-- Public-Header Top-Images -->
<div class="header-event hidden" style="display: block;background-color: #f80a20;">
    <div class="w">
        <a class="header-event-bar" href="https://hongyuweb.taobao.com/" target="_blank"><img src="/statics/img/temp/header-top.jpg" /> </a>
        <a class="close-event" href="javascript:;"><span class="icon-close"></span></a>
    </div>
</div>

<!-- Public-Header -->
@include('layouts._header')

<!-- Public-Content -->
<div id="content">

    <!-- Content-Main -->
    <div class="content">

        <!-- Content -->
        @yield('content')

    </div>

</div>

<!-- Public-Footer -->
@include('layouts._footer')

<!-- Public-SideBar -->
@include('layouts._sidebar')

<!-- Public-Widget -->
@include('layouts._widget')

<!-- Public-Modal-Frame -->
@include('layouts._modal-frame')

@show

@section('app_scripts')
<script type="text/javascript" src="/statics/js/jquery.min.js"></script>
<script type="text/javascript" src="/statics/js/app.js"></script>
@stack('scripts')
@show

</body>
</html>