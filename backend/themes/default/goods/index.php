<?php
/**
 * ============================================================================
 * Copyright © 2016-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/2/12 20:25
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = Yii::t('common','Goods') . Yii::t('common','List');
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
                <a type="button" class="btn btn-danger btn-flat pull-right">批量删除</a>
                <a type="button" class="btn bg-yellow btn-flat pull-right" style="margin-right: 5px">批量下架</a>
                <a type="button" class="btn bg-teal btn-flat pull-right" style="margin: 0 5px">批量上架</a>
                <a href="<?= Url::to(['goods/create'])?>" type="button" class="btn bg-olive btn-flat pull-right">添加商品</a>
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
            <?php foreach ($countries as $list): ?>
                <tr>
                    <td class="text-center"><input type="checkbox" name="selected[]" value="<?= Html::encode($list->goodsId) ?>"></td>
                    <td><?= Html::encode($list->goodsId) ?></td>
                    <td class="table-td-goods-name"><a href="javascript:;"><?= Html::encode($list->goodsName) ?></a></td>
                    <td class="text-center"><?= Html::encode($list->goodsIdentifier) ?></td>
                    <td class="text-right"><?= Html::encode($list->goodsPrice) ?></td>
                    <td class="text-right"><?= Html::encode($list->goodsNumber) ?></td>
                    <td class="text-right"><?= Html::encode($list->goodsSalesVolume) ?></td>
                    <td class="text-center"><?= Html::encode($list->goodsSort) ?></td>
                    <td class="text-center"><?php if($list->status == '0'){echo "否";}else{echo "是";} ?></td>
                    <td class="text-center"><a class="btn btn-xs btn-flat btn-info" style="margin: 0 5px">编辑</a><a class="btn btn-flat btn-danger btn-xs">删除</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- /.box-body -->
    <div class="box-footer clearfix">
        <?= LinkPager::widget([
                'pagination' => $pagination,
                'options' => ['class' => 'pagination pagination-sm no-margin pull-right'],
        ]) ?>
    </div>
</div>
