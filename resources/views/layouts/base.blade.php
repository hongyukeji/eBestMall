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
    <link rel="stylesheet"  type="text/css" href="{{ asset('statics/css/bootstrap.min.css') }}" />
    <link rel="stylesheet"  type="text/css" href="{{ asset('statics/css/app.css') }}" />
    @stack('styles')
    @show
</head>
<body>

@yield('content')

@section('app_scripts')
<script type="text/javascript" src="{{ asset('statics/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('statics/js/app.js') }}"></script>
@stack('scripts')
@show

</body>
</html>