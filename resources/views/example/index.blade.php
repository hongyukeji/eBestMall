@extends('layouts.app')

@section('title', 'eBestMall（鸿宇V8） - B2B2C商城系统')

@push('styles')
    <link href="/statics/css/example.css" rel="stylesheet">
@endpush

@push('scripts')
    <script src="/statics/js/example.js"></script>
@endpush

@section('content')
    <ul class="breadcrumb">
        <li><a href="/">首页</a></li>
        <li><a href="javascript:;"></a></li>
        <li class="active"></li>
    </ul>

    <div class="example-index"></div>
@endsection