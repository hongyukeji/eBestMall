@extends("admin.layouts.content")

@section("content")
    <div class="row">
        <div class="col-sm-3">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <span class="label label-success pull-right">今天</span>
                    <h5>收入</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">40 886,200</h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i>
                    </div>
                    <small>销售额</small>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <span class="label label-info pull-right">今天</span>
                    <h5>订单</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">275,800</h1>
                    <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i>
                    </div>
                    <small>新订单</small>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <span class="label label-primary pull-right">今天</span>
                    <h5>访客</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">106,120</h1>
                    <div class="stat-percent font-bold text-navy">44% <i class="fa fa-level-up"></i>
                    </div>
                    <small>新访客</small>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <span class="label label-danger pull-right">今天</span>
                    <h5>会员</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">80,600</h1>
                    <div class="stat-percent font-bold text-danger">38% <i class="fa fa-level-down"></i>
                    </div>
                    <small>注册会员</small>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>系统信息</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">

                    <table class="table">
                        <thead>
                        <tr>
                            <th>名称</th>
                            <th>值</th>
                            <th>名称</th>
                            <th>值</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>服务器系统：</td>
                            <td>{{ PHP_OS }}（{{ GetHostByName($_SERVER['SERVER_NAME']) }}）</td>
                            <td>Web服务器：</td>
                            <td>{{  $_SERVER['SERVER_SOFTWARE']  }}</td>
                        </tr>
                        <tr>
                            <td>PHP版本：</td>
                            <td>{{ PHP_VERSION }}</td>
                            <td>MySQL版本：</td>
                            <td>{{ json_decode(json_encode(\Illuminate\Support\Facades\DB::select('select version()')[0]), True)['version()'] }}</td>
                        </tr>
                        <tr>
                            <td>语言：</td>
                            <td>{{ config('app.locale') }}</td>
                            <td>时区：</td>
                            <td>{{ config('app.timezone') }}</td>
                        </tr>
                        <tr>
                            <td>Laravel版本号：</td>
                            <td>{{ app()::VERSION }}</td>
                            <td>{{ config('system.name') }}版本号：</td>
                            <td>{{ config('system.version') }}</td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection