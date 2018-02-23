@extends('admin.layouts.app')

@section('title', '商品列表 - eBestMall 管理中心')

@section('content')
    <div class="goods-index">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                商品列表
                <small>商品管理</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <div class="box-title">
                                <div class="btn-group">
                                    <a class="btn btn-flat btn-sm btn-success ebm-margin-r-10">添加商品</a>
                                </div>
                            </div>
                            <div class="box-tools">
                                {{-- 暂时隐藏 --}}
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered">
                                <tbody>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>商品名称</th>
                                    <th class="text-center">价格</th>
                                    <th class="text-center">库存</th>
                                    <th class="text-center">新品</th>
                                    <th class="text-center">精品</th>
                                    <th class="text-center">推荐</th>
                                    <th class="text-center">自营</th>
                                    <th class="text-center">排序</th>
                                    <th class="text-center" style="width: 80px">状态</th>
                                    <th class="text-center" style="width: 80px">操作</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>测试商品</td>
                                    <td class="text-right">
                                        299.99
                                    </td>
                                    <td class="text-right">999999</td>
                                    <td class="text-center">
                                        <span class="badge bg-green">是</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge bg-green">是</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge bg-red">否</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge bg-green">是</span>
                                    </td>
                                    <td class="text-center">1000</td>
                                    <td class="text-center">
                                        <span class="label label-success">上架</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="/admin/message-board/0" class="ebm-margin-r-5">
                                            <i class="fa fa-search"></i>
                                        </a>
                                        <a href="/admin/message-board/0/edit" class="ebm-margin-r-5">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="javascript:void(0);" data-id="0" class="ebm-margin-r-5">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix">
                            <div class="pull-left">
                                <select class="form-control ebm-select-item">
                                    <option>批量操作</option>
                                    <option>删除</option>
                                    <option>上架</option>
                                    <option>下架</option>
                                </select>
                            </div>
                            <ul class="pagination pagination-sm no-margin pull-right">
                                <li><a href="#">«</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">»</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
