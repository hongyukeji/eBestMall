@extends('admin.layouts.app')

@section('title', '仪表盘 - eBestMall 管理中心')

@section('content')
    <div class="home-index">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                仪表盘
                <small>概览</small>
            </h1>
            <ol class="breadcrumb hidden">
                <li><a href="#"><i class="fa fa-dashboard"></i> 仪表盘</a></li>
                <li class="active">概览</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>¥ 999999 <sup style="font-size: 20px">元</sup></h3>

                            <p>销售总额</p>
                        </div>
                        <a href="#" class="small-box-footer">
                            更多信息 <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>9999<sup style="font-size: 20px">个</sup></h3>

                            <p>订单数</p>
                        </div>
                        <a href="#" class="small-box-footer">
                            更多信息 <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>999<sup style="font-size: 20px">人</sup></h3>

                            <p>注册会员</p>
                        </div>
                        <a href="#" class="small-box-footer">
                            更多信息 <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-teal-active">
                        <div class="inner">
                            <h3>99<sup style="font-size: 20px">条</sup></h3>

                            <p>入驻申请</p>
                        </div>
                        <a href="#" class="small-box-footer">
                            更多信息 <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->
            </div>

            <div class="row">
                <section class="invoice" style="margin: 10px 15px;">
                    <!-- title row -->
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="page-header">
                                <i class="fa fa-globe"></i> 系统信息
                                <small class="pull-right">更新时间：{{ date("Y-m-d H:i",time()) }}</small>
                            </h2>
                        </div>
                        <!-- /.col -->
                    </div>

                    <div class="row">
                        <!-- accepted payments column -->

                        <!-- /.col -->
                        <div class="col-xs-6">
                            <p class="lead" style="font-size: 14px;font-weight: bold;text-align: center;">服务器信息</p>

                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td style="width:50%">服务器域名：</td>
                                        <td>{{ $_SERVER['SERVER_NAME'] }}</td>
                                    </tr>
                                    <tr>
                                        <td>服务器IP：</td>
                                        <td>{{ gethostbyname($_SERVER['SERVER_NAME']) }}</td>
                                    </tr>
                                    <tr>
                                        <td>操作系统：</td>
                                        <td>{{ PHP_OS }}</td>
                                    </tr>
                                    <tr>
                                        <td>运行环境：</td>
                                        <td>{{ $_SERVER["SERVER_SOFTWARE"] }}</td>
                                    </tr>
                                    <tr>
                                        <td>PHP版本：</td>
                                        <td>{{ PHP_VERSION }}</td>
                                    </tr>
                                    <tr>
                                        <td>MySQL版本：</td>
                                        <td>{{ json_decode(json_encode((\Illuminate\Support\Facades\DB::select('select version()')[0])),true)['version()'] }}</td>
                                    </tr>

                                    <tr>
                                        <td>上传附件限制：</td>
                                        <td>{{ ini_get('upload_max_filesize') }}</td>
                                    </tr>
                                    <tr>
                                        <td>执行时间限制：</td>
                                        <td>{{ ini_get('max_execution_time') }} 秒</td>
                                    </tr>
                                    <tr>
                                        <td>剩余空间：</td>
                                        <td>{{ round((disk_free_space(".")/(1024*1024)),2) }} M</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <p class="lead" style="font-size: 14px;font-weight: bold;text-align: center;">程序信息</p>

                            <div class="table-responsive">
                                <table class="table">
                                    <tbody><tr>
                                        <td style="width:50%">程序名称：</td>
                                        <td>eBestMall</td>
                                    </tr>
                                    <tr>
                                        <td>程序版本：</td>
                                        <td>v8.0</td>
                                    </tr>
                                    <tr>
                                        <td>安装日期：</td>
                                        <td>2018-02-18 13:39</td>
                                    </tr>
                                    <tr>
                                        <td>Laravel框架版本：</td>
                                        <td>{{ app()::VERSION }}</td>
                                    </tr>
                                    <tr>
                                        <td>官网：</td>
                                        <td>www.ebestmall.com</td>
                                    </tr>
                                    <tr>
                                        <td>论坛：</td>
                                        <td>bbs.ebestmall.com</td>
                                    </tr>
                                    <tr>
                                        <td>帮助文档：</td>
                                        <td>help.ebestmall.com</td>
                                    </tr>
                                    <tr>
                                        <td>QQ交流群：</td>
                                        <td>90664526</td>
                                    </tr>
                                    <tr>
                                        <td>联系QQ：</td>
                                        <td>1527200768</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </section>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
