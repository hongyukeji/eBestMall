<?php
/**
 * ============================================================================
 * Copyright © 2016-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/3/15 20:01
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */

$this->title = Yii::t('common', 'Demo');
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="goods-index box">
    <div class="box-header with-border">
        <div class="row">
            <div class="col-md-5 col-sm-5 col-lg-4">
                <div class="input-group">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-flat btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">全部商品&nbsp;<span class="fa fa-caret-down"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">商品名称</a></li>
                            <li><a href="#">商品编号</a></li>
                            <li class="divider"></li>
                            <li><a href="#">高级筛选</a></li>
                        </ul>
                    </div>
                    <!-- /btn-group -->
                    <input type="text" class="form-control" placeholder="关键字">
                    <span class="input-group-btn">
              <button type="button" class="btn btn-info btn-flat">搜索</button>
            </span>
                </div>
            </div>
            <div class="col-md-7 col-sm-7 col-lg-8 pull-right">
                <button type="button" class="btn btn-danger btn-flat pull-right">批量删除</button>
                <button type="button" class="btn bg-yellow btn-flat pull-right" style="margin-right: 5px">批量下架</button>
                <button type="button" class="btn bg-teal btn-flat pull-right" style="margin: 0 5px">批量上架</button>
                <button type="button" class="btn bg-olive btn-flat pull-right">添加商品</button>
            </div>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table class="table table-bordered">
            <tbody>
            <tr>
                <th class="text-center table-th-checkbox"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked',this.checked);"></th>
                <th class="text-center">ID</th>
                <th class="text-center table-th-goods-name">商品名称</th>
                <th class="text-center">商品编号</th>
                <th class="text-center">价格</th>
                <th class="text-center">库存</th>
                <th class="text-center">销量</th>
                <th class="text-center">排序</th>
                <th class="text-center">上下架</th>
                <th class="text-center">操作</th>
            </tr>
            <tr>
                <td class="text-center"><input type="checkbox" name="selected[]" value="1"></td>
                <td>1</td>
                <td class="table-td-goods-name"><a href="javascript:;">eBestMall</a></td>
                <td class="text-center">ebm20170315888</td>
                <td class="text-right">1288.00</td>
                <td class="text-right">999999999</td>
                <td class="text-right">66888</td>
                <td class="text-center">100</td>
                <td class="text-center">是</td>
                <td class="text-center"><a class="btn btn-xs btn-flat btn-info" style="margin: 0 5px">编辑</a><a class="btn btn-flat btn-danger btn-xs">删除</a></td>
            </tr>
            <tr>
                <td class="text-center"><input type="checkbox" name="selected[]" value="2"></td>
                <td>2</td>
                <td class="table-td-goods-name"><a href="javascript:;">eBestMall</a></td>
                <td class="text-center">ebm20170315888</td>
                <td class="text-right">1288.00</td>
                <td class="text-right">999999999</td>
                <td class="text-right">66888</td>
                <td class="text-center">100</td>
                <td class="text-center">是</td>
                <td class="text-center"><a class="btn btn-xs btn-flat btn-info" style="margin: 0 5px">编辑</a><a class="btn btn-flat btn-danger btn-xs">删除</a></td>
            </tr>
            <tr>
                <td class="text-center"><input type="checkbox" name="selected[]" value="3"></td>
                <td>3</td>
                <td class="table-td-goods-name"><a href="javascript:;">eBestMall</a></td>
                <td class="text-center">ebm20170315888</td>
                <td class="text-right">1288.00</td>
                <td class="text-right">999999999</td>
                <td class="text-right">66888</td>
                <td class="text-center">100</td>
                <td class="text-center">是</td>
                <td class="text-center"><a class="btn btn-xs btn-flat btn-info" style="margin: 0 5px">编辑</a><a class="btn btn-flat btn-danger btn-xs">删除</a></td>
            </tr>
            <tr>
                <td class="text-center"><input type="checkbox" name="selected[]" value="4"></td>
                <td>4</td>
                <td class="table-td-goods-name"><a href="javascript:;">eBestMall</a></td>
                <td class="text-center">ebm20170315888</td>
                <td class="text-right">1288.00</td>
                <td class="text-right">999999999</td>
                <td class="text-right">66888</td>
                <td class="text-center">100</td>
                <td class="text-center">是</td>
                <td class="text-center"><a class="btn btn-xs btn-flat btn-info" style="margin: 0 5px">编辑</a><a class="btn btn-flat btn-danger btn-xs">删除</a></td>
            </tr>
            <tr>
                <td class="text-center"><input type="checkbox" name="selected[]" value="5"></td>
                <td>5</td>
                <td class="table-td-goods-name"><a href="javascript:;">eBestMall</a></td>
                <td class="text-center">ebm20170315888</td>
                <td class="text-right">1288.00</td>
                <td class="text-right">999999999</td>
                <td class="text-right">66888</td>
                <td class="text-center">100</td>
                <td class="text-center">是</td>
                <td class="text-center"><a class="btn btn-xs btn-flat btn-info" style="margin: 0 5px">编辑</a><a class="btn btn-flat btn-danger btn-xs">删除</a></td>
            </tr>
            <tr>
                <td class="text-center"><input type="checkbox" name="selected[]" value="6"></td>
                <td>6</td>
                <td class="table-td-goods-name"><a href="javascript:;">eBestMall</a></td>
                <td class="text-center">ebm20170315888</td>
                <td class="text-right">1288.00</td>
                <td class="text-right">999999999</td>
                <td class="text-right">66888</td>
                <td class="text-center">100</td>
                <td class="text-center">是</td>
                <td class="text-center"><a class="btn btn-xs btn-flat btn-info" style="margin: 0 5px">编辑</a><a class="btn btn-flat btn-danger btn-xs">删除</a></td>
            </tr>
            <tr>
                <td class="text-center"><input type="checkbox" name="selected[]" value="7"></td>
                <td>7</td>
                <td class="table-td-goods-name"><a href="javascript:;">eBestMall</a></td>
                <td class="text-center">ebm20170315888</td>
                <td class="text-right">1288.00</td>
                <td class="text-right">999999999</td>
                <td class="text-right">66888</td>
                <td class="text-center">100</td>
                <td class="text-center">是</td>
                <td class="text-center"><a class="btn btn-xs btn-flat btn-info" style="margin: 0 5px">编辑</a><a class="btn btn-flat btn-danger btn-xs">删除</a></td>
            </tr>
            <tr>
                <td class="text-center"><input type="checkbox" name="selected[]" value="8"></td>
                <td>8</td>
                <td class="table-td-goods-name"><a href="javascript:;">eBestMall</a></td>
                <td class="text-center">ebm20170315888</td>
                <td class="text-right">1288.00</td>
                <td class="text-right">999999999</td>
                <td class="text-right">66888</td>
                <td class="text-center">100</td>
                <td class="text-center">是</td>
                <td class="text-center"><a class="btn btn-xs btn-flat btn-info" style="margin: 0 5px">编辑</a><a class="btn btn-flat btn-danger btn-xs">删除</a></td>
            </tr>
            <tr>
                <td class="text-center"><input type="checkbox" name="selected[]" value="9"></td>
                <td>9</td>
                <td class="table-td-goods-name"><a href="javascript:;">eBestMall</a></td>
                <td class="text-center">ebm20170315888</td>
                <td class="text-right">1288.00</td>
                <td class="text-right">999999999</td>
                <td class="text-right">66888</td>
                <td class="text-center">100</td>
                <td class="text-center">是</td>
                <td class="text-center"><a class="btn btn-xs btn-flat btn-info" style="margin: 0 5px">编辑</a><a class="btn btn-flat btn-danger btn-xs">删除</a></td>
            </tr>
            <tr>
                <td class="text-center"><input type="checkbox" name="selected[]" value="10"></td>
                <td>10</td>
                <td class="table-td-goods-name"><a href="javascript:;">eBestMall</a></td>
                <td class="text-center">ebm20170315888</td>
                <td class="text-right">1288.00</td>
                <td class="text-right">999999999</td>
                <td class="text-right">66888</td>
                <td class="text-center">100</td>
                <td class="text-center">是</td>
                <td class="text-center"><a class="btn btn-xs btn-flat btn-info" style="margin: 0 5px">编辑</a><a class="btn btn-flat btn-danger btn-xs">删除</a></td>
            </tr>
            <tr>
                <td class="text-center"><input type="checkbox" name="selected[]" value="11"></td>
                <td>11</td>
                <td class="table-td-goods-name"><a href="javascript:;">eBestMall</a></td>
                <td class="text-center">ebm20170315888</td>
                <td class="text-right">1288.00</td>
                <td class="text-right">999999999</td>
                <td class="text-right">66888</td>
                <td class="text-center">100</td>
                <td class="text-center">是</td>
                <td class="text-center"><a class="btn btn-xs btn-flat btn-info" style="margin: 0 5px">编辑</a><a class="btn btn-flat btn-danger btn-xs">删除</a></td>
            </tr>
            <tr>
                <td class="text-center"><input type="checkbox" name="selected[]" value="12"></td>
                <td>12</td>
                <td class="table-td-goods-name"><a href="javascript:;">eBestMall</a></td>
                <td class="text-center">ebm20170315888</td>
                <td class="text-right">1288.00</td>
                <td class="text-right">999999999</td>
                <td class="text-right">66888</td>
                <td class="text-center">100</td>
                <td class="text-center">是</td>
                <td class="text-center"><a class="btn btn-xs btn-flat btn-info" style="margin: 0 5px">编辑</a><a class="btn btn-flat btn-danger btn-xs">删除</a></td>
            </tr>
            <tr>
                <td class="text-center"><input type="checkbox" name="selected[]" value="13"></td>
                <td>13</td>
                <td class="table-td-goods-name"><a href="javascript:;">eBestMall</a></td>
                <td class="text-center">ebm20170315888</td>
                <td class="text-right">1288.00</td>
                <td class="text-right">999999999</td>
                <td class="text-right">66888</td>
                <td class="text-center">100</td>
                <td class="text-center">是</td>
                <td class="text-center"><a class="btn btn-xs btn-flat btn-info" style="margin: 0 5px">编辑</a><a class="btn btn-flat btn-danger btn-xs">删除</a></td>
            </tr>
            <tr>
                <td class="text-center"><input type="checkbox" name="selected[]" value="14"></td>
                <td>14</td>
                <td class="table-td-goods-name"><a href="javascript:;">eBestMall</a></td>
                <td class="text-center">ebm20170315888</td>
                <td class="text-right">1288.00</td>
                <td class="text-right">999999999</td>
                <td class="text-right">66888</td>
                <td class="text-center">100</td>
                <td class="text-center">是</td>
                <td class="text-center"><a class="btn btn-xs btn-flat btn-info" style="margin: 0 5px">编辑</a><a class="btn btn-flat btn-danger btn-xs">删除</a></td>
            </tr>
            <tr>
                <td class="text-center"><input type="checkbox" name="selected[]" value="15"></td>
                <td>15</td>
                <td class="table-td-goods-name"><a href="javascript:;">eBestMall</a></td>
                <td class="text-center">ebm20170315888</td>
                <td class="text-right">1288.00</td>
                <td class="text-right">999999999</td>
                <td class="text-right">66888</td>
                <td class="text-center">100</td>
                <td class="text-center">是</td>
                <td class="text-center"><a class="btn btn-xs btn-flat btn-info" style="margin: 0 5px">编辑</a><a class="btn btn-flat btn-danger btn-xs">删除</a></td>
            </tr>
            <tr>
                <td class="text-center"><input type="checkbox" name="selected[]" value="16"></td>
                <td>16</td>
                <td class="table-td-goods-name"><a href="javascript:;">eBestMall</a></td>
                <td class="text-center">ebm20170315888</td>
                <td class="text-right">1288.00</td>
                <td class="text-right">999999999</td>
                <td class="text-right">66888</td>
                <td class="text-center">100</td>
                <td class="text-center">是</td>
                <td class="text-center"><a class="btn btn-xs btn-flat btn-info" style="margin: 0 5px">编辑</a><a class="btn btn-flat btn-danger btn-xs">删除</a></td>
            </tr>
            <tr>
                <td class="text-center"><input type="checkbox" name="selected[]" value="17"></td>
                <td>17</td>
                <td class="table-td-goods-name"><a href="javascript:;">eBestMall</a></td>
                <td class="text-center">ebm20170315888</td>
                <td class="text-right">1288.00</td>
                <td class="text-right">999999999</td>
                <td class="text-right">66888</td>
                <td class="text-center">100</td>
                <td class="text-center">是</td>
                <td class="text-center"><a class="btn btn-xs btn-flat btn-info" style="margin: 0 5px">编辑</a><a class="btn btn-flat btn-danger btn-xs">删除</a></td>
            </tr>
            <tr>
                <td class="text-center"><input type="checkbox" name="selected[]" value="18"></td>
                <td>18</td>
                <td class="table-td-goods-name"><a href="javascript:;">eBestMall</a></td>
                <td class="text-center">ebm20170315888</td>
                <td class="text-right">1288.00</td>
                <td class="text-right">999999999</td>
                <td class="text-right">66888</td>
                <td class="text-center">100</td>
                <td class="text-center">是</td>
                <td class="text-center"><a class="btn btn-xs btn-flat btn-info" style="margin: 0 5px">编辑</a><a class="btn btn-flat btn-danger btn-xs">删除</a></td>
            </tr>
            <tr>
                <td class="text-center"><input type="checkbox" name="selected[]" value="19"></td>
                <td>19</td>
                <td class="table-td-goods-name"><a href="javascript:;">eBestMall</a></td>
                <td class="text-center">ebm20170315888</td>
                <td class="text-right">1288.00</td>
                <td class="text-right">999999999</td>
                <td class="text-right">66888</td>
                <td class="text-center">100</td>
                <td class="text-center">是</td>
                <td class="text-center"><a class="btn btn-xs btn-flat btn-info" style="margin: 0 5px">编辑</a><a class="btn btn-flat btn-danger btn-xs">删除</a></td>
            </tr>
            <tr>
                <td class="text-center"><input type="checkbox" name="selected[]" value="20"></td>
                <td>20</td>
                <td class="table-td-goods-name"><a href="javascript:;">eBestMall</a></td>
                <td class="text-center">ebm20170315888</td>
                <td class="text-right">1288.00</td>
                <td class="text-right">999999999</td>
                <td class="text-right">66888</td>
                <td class="text-center">100</td>
                <td class="text-center">是</td>
                <td class="text-center"><a class="btn btn-xs btn-flat btn-info" style="margin: 0 5px">编辑</a><a class="btn btn-flat btn-danger btn-xs">删除</a></td>
            </tr>
            </tbody>
        </table>
    </div>
    <!-- /.box-body -->
    <div class="box-footer clearfix">
        <ul class="pagination pagination-sm no-margin pull-right"><li class="prev disabled"><span>«</span></li>
            <li class="active"><a href="/admin.php?r=goods%2Findex&amp;page=1" data-page="0">1</a></li>
            <li><a href="/admin.php?r=goods%2Findex&amp;page=2" data-page="1">2</a></li>
            <li class="next"><a href="/admin.php?r=goods%2Findex&amp;page=2" data-page="1">»</a></li>
        </ul>
    </div>
</div>
