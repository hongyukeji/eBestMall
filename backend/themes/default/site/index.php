<?php

/* @var $this yii\web\View */

$this->title = Yii::t('app', 'Dashboard');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
    <div class="body-content">

        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>1288</h3>

                        <p>新订单</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        查看更多 <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>88<sup style="font-size: 20px">%</sup></h3>

                        <p>销售额</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-bar-chart"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        查看更多 <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>1080</h3>

                        <p>新增用户</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user-plus"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        查看更多 <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>1888</h3>

                        <p>访客</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-pie-chart"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        查看更多 <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <!-- ./col -->
        </div>

        <div class="row">
            <div class="col-md-12">
                <!-- Custom Tabs (Pulled to the right) -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs pull-right">
                        <li class="active"><a href="#tab_1-1" data-toggle="tab" aria-expanded="true">待处理</a></li>
                        <li class=""><a href="#tab_2-2" data-toggle="tab" aria-expanded="false">最新订单</a></li>
                        <li class=""><a href="#tab_3-2" data-toggle="tab" aria-expanded="false">热销商品</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">快速访问 <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">菜单01</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">菜单02</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">菜单03</a></li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">菜单</a></li>
                            </ul>
                        </li>
                        <li class="pull-left header"><i class="fa fa-bar-chart"></i> 今日统计</li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1-1">
                            <!--待处理订单-->
                            <div class="box box-info">
                                <div class="box-header with-border">
                                    <h3 class="box-title">待处理订单</h3>
                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body" style="display: block;">
                                    <div class="table-responsive">
                                        <table class="table no-margin table-hover table-bordered">
                                            <thead>
                                            <tr>
                                                <th class="text-center">订单号</th>
                                                <th class="text-center table-th-goods-name">商品名称</th>
                                                <th class="text-center">金额</th>
                                                <th class="text-center">状态</th>
                                                <th class="text-center">备注</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><a href="javascript:;">20170211221836</a></td>
                                                <td class="table-td-goods-name"><a href="javascript:;">苹果（Apple ）iPhone 7 移动联通电信4G手机 金色 128GB</a></td>
                                                <td class="text-right">6888.00</td>
                                                <td class="text-center"><span class="label label-info">待发货</span></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td><a href="javascript:;">20170211221668</a></td>
                                                <td class="table-td-goods-name"><a href="javascript:;">Lanking 85H1B智能播放影院85英寸大屏液晶4K安卓平板高清电视机</a></td>
                                                <td class="text-right">28888.00</td>
                                                <td class="text-center"><span class="label label-info">待发货</span></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td><a href="javascript:;">20170211221669</a></td>
                                                <td class="table-td-goods-name"><a href="javascript:;">联想(Lenovo)小新Air13 Pro 13.3英寸14.8mm超轻薄笔记本电脑（i7 8G 256G PCIE SSD 940MX 2G FHD IPS）银</a></td>
                                                <td class="text-right">5888.00</td>
                                                <td class="text-center"><span class="label label-warning">申请售后</span></td>
                                                <td>七天无理由退换货</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer clearfix" style="display: block;">
                                    <!--<a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>-->
                                    <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">查看所有</a>
                                </div>
                                <!-- /.box-footer -->
                            </div>

                            <!--入驻商申请-->
                            <div class="box box-info">
                                <div class="box-header with-border">
                                    <h3 class="box-title">入驻商申请</h3>
                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body" style="display: block;">
                                    <div class="table-responsive">
                                        <table class="table no-margin table-hover table-bordered">
                                            <thead>
                                            <tr>
                                                <th class="text-center">会员名称</th>
                                                <th class="text-center">商家名称</th>
                                                <th class="text-center">商家等级</th>
                                                <th class="text-center">联系电话</th>
                                                <th class="text-center">申请资料</th>
                                                <th class="text-center">状态</th>
                                                <th class="text-center">备注</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><a href="javascript:;">shadow</a></td>
                                                <td>eBestMall</td>
                                                <td class="text-center">钻石</td>
                                                <td class="text-center">13800138000</td>
                                                <td class="text-center"><a href="javascript:;">查看</a></td>
                                                <td class="text-center"><span class="label label-info">待审核</span></td>
                                                <td>待管理员审核</td>
                                            </tr>
                                            <tr>
                                                <td><a href="javascript:;">shop</a></td>
                                                <td>天天欢乐买</td>
                                                <td class="text-center">白银</td>
                                                <td class="text-center">13800138000</td>
                                                <td class="text-center"><a href="javascript:;">查看</a></td>
                                                <td class="text-center"><span class="label label-warning">复审</span></td>
                                                <td>资料提供不完整,重新提交</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer clearfix" style="display: block;">
                                    <!--<a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>-->
                                    <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">查看所有</a>
                                </div>
                                <!-- /.box-footer -->
                            </div>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_2-2">
                            <div class="box box-info">
                                <div class="box-body" style="display: block;">
                                    <div class="table-responsive">
                                        <table class="table no-margin table-hover table-bordered">
                                            <thead>
                                            <tr>
                                                <th class="text-center">订单号</th>
                                                <th class="text-center table-th-goods-name">商品名称</th>
                                                <th class="text-center">金额</th>
                                                <th class="text-center">状态</th>
                                                <th class="text-center">备注</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><a href="javascript:;">20170211221889</a></td>
                                                <td class="table-td-goods-name"><a href="javascript:;">联想(Lenovo)小新Air13 Pro 13.3英寸14.8mm超轻薄笔记本电脑（i7 8G 256G PCIE SSD 940MX 2G FHD IPS）银</a></td>
                                                <td class="text-right">1288.00</td>
                                                <td class="text-center"><span class="label label-success">已完成</span></td>
                                                <td>VIP客户</td>
                                            </tr>
                                            <tr>
                                                <td><a href="javascript:;">20170211221836</a></td>
                                                <td class="table-td-goods-name"><a href="javascript:;">洋河蓝色经典梦之蓝M9 52度 500ML白酒</a></td>
                                                <td class="text-right">1288.00</td>
                                                <td class="text-center"><span class="label label-warning">申请售后</span></td>
                                                <td>VIP客户</td>
                                            </tr>
                                            <tr>
                                                <td><a href="javascript:;">20170211221337</a></td>
                                                <td class="table-td-goods-name"><a href="javascript:;">Lanking 85H1B智能播放影院85英寸大屏液晶4K安卓平板高清电视机</a></td>
                                                <td class="text-right">1288.00</td>
                                                <td class="text-center"><span class="label label-danger">已取消</span></td>
                                                <td>VIP客户</td>
                                            </tr>
                                            <tr>
                                                <td><a href="javascript:;">20170211221668</a></td>
                                                <td class="table-td-goods-name"><a href="javascript:;">贵州茅台酒 飞天茅台53度500ml 茅台酒53度飞天</a></td>
                                                <td class="text-right">1288.00</td>
                                                <td class="text-center"><span class="label label-info">待发货</span></td>
                                                <td>VIP客户</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer clearfix" style="display: block;">
                                    <!--<a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>-->
                                    <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">查看所有订单</a>
                                </div>
                                <!-- /.box-footer -->
                            </div>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_3-2">
                            <div>
                                <!-- /.box-header -->
                                <div class="box-body" style="display: block;">
                                    <div class="table-responsive">
                                        <table class="table no-margin table-hover table-bordered">
                                            <thead>
                                            <tr>
                                                <th class="text-center">商品编号</th>
                                                <th class="text-center table-th-goods-name">商品名称</th>
                                                <th class="text-center">价格</th>
                                                <th class="text-center">库存</th>
                                                <th class="text-center">销量</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>20170212185888</td>
                                                <td class="table-td-goods-name"><a href="javascript:;">苹果（Apple ）iPhone 7 移动联通电信4G手机 金色 128GB</a></td>
                                                <td class="text-right">6888.00</td>
                                                <td class="text-right">6568</td>
                                                <td class="text-right">8698</td>
                                            </tr>
                                            <tr>
                                                <td>20170212185868</td>
                                                <td class="table-td-goods-name"><a href="javascript:;">Lanking 85H1B智能播放影院85英寸大屏液晶4K安卓平板高清电视机</a></td>
                                                <td class="text-right">28888.00</td>
                                                <td class="text-right">5866</td>
                                                <td class="text-right">8086</td>
                                            </tr>
                                            <tr>
                                                <td>20170212185698</td>

                                                <td class="table-td-goods-name"><a href="javascript:;">贵州茅台酒 飞天茅台53度500ml 茅台酒53度飞天</a></td>
                                                <td class="text-right">1288.00</td>
                                                <td class="text-right">1589</td>
                                                <td class="text-right">8789</td>
                                            </tr>
                                            <tr>
                                                <td>20170212186898</td>
                                                <td class="table-td-goods-name"><a href="javascript:;">洋河蓝色经典梦之蓝M9 52度 500ML白酒</a></td>
                                                <td class="text-right">1999.00</td>
                                                <td class="text-right">3698</td>
                                                <td class="text-right">8858</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer clearfix" style="display: block;">
                                    <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">查看所有订单</a>
                                </div>
                                <!-- /.box-footer -->
                            </div>
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>

        <!--系统信息-->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">系统信息</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <td class="col-lg-1 col-xs-3">服务器系统:</td>
                        <td class="col-lg-1 col-xs-3"><?=\yii\helpers\Html::encode(php_uname('s'))?></td>
                        <td class="col-lg-1 col-xs-3">服务器 IP:</td>
                        <td class="col-lg-1 col-xs-3"><?=\yii\helpers\Html::encode(GetHostByName($_SERVER['SERVER_NAME']))?></td>
                    </tr>
                    <tr>
                        <td class="col-lg-1 col-xs-3">PHP 版本:</td>
                        <td class="col-lg-1 col-xs-3"><?=\yii\helpers\Html::encode(PHP_VERSION)?></td>
                        <td class="col-lg-1 col-xs-3">MySQL 版本:</td>
                        <td class="col-lg-1 col-xs-3"><?=\yii\helpers\Html::encode(Yii::$app->db->pdo->getAttribute(\PDO::ATTR_SERVER_VERSION))?></td>
                    </tr>
                    <tr>
                        <td class="col-lg-1 col-xs-3">系统时区:</td>
                        <td class="col-lg-1 col-xs-3"><?=\yii\helpers\Html::encode(date_default_timezone_get())?></td>
                        <td class="col-lg-1 col-xs-3">文件最大上传限制:</td>
                        <td class="col-lg-1 col-xs-3"><?=\yii\helpers\Html::encode(ini_get('upload_max_filesize'))?></td>
                    </tr>
                    <tr>
                        <td class="col-lg-1 col-xs-3">Yii 框架版本:</td>
                        <td class="col-lg-1 col-xs-3"><?=\yii\helpers\Html::encode(Yii::getVersion())?></td>
                        <td class="col-lg-1 col-xs-3">官方网址:</td>
                        <td class="col-lg-1 col-xs-3"><a href="javascript:;">www.ebestmall.com</a></td>
                    </tr>
                    <tr>
                        <td class="col-lg-1 col-xs-3">eBestMall 版本号:</td>
                        <td class="col-lg-1 col-xs-3"><?=\yii\helpers\Html::encode(Yii::$app->version)?></td>
                        <td class="col-lg-1 col-xs-3">安装日期:</td>
                        <td class="col-lg-1 col-xs-3"><?=\yii\helpers\Html::encode(date('Y-m-d'))?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix"></div>
        </div>

    </div>
</div>
