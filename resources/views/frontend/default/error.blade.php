@extends('frontend.layouts.main')

@section('title')
    您访问的页面不存在 - eBestMall
@stop

@section('stylesheet')
    <link href="/static/css/error.css" rel="stylesheet">
@stop

@section('javascript')

@stop

@section('content')
    <div class="default-error">
        <div class="content-404">
            <div class="content-404-l">
                <a href="javascript:;" target="_blank">
                    <img class="try-text" src="/static/img/temp/temp-41.png">
                    <img class="try-img" src="/static/img/temp/temp-40.png">
                </a>
            </div>
            <div class="content-404-m">
                <img src="/static/img/public/error_shade.png">
            </div>
            <div class="content-404-r">
                <img class="error-img" src="/static/img/public/error_default.png">
                <p>抱歉!&nbsp;&nbsp;您访问的页面<span>失联</span>啦...</p>
                <div class="alert alert-warning">
                    出错啦！
                </div>
                <span class="other">您可以逛逛&nbsp;&nbsp;:
                    <a class="a-item" href="javascript:;" target="_blank">首页</a>
                    <a class="a-item" href="javascript:;" target="_blank">试用</a>
                    <a href="javascript:;" target="_blank">会员</a>
                </span>
            </div>
        </div>
    </div>

@endsection