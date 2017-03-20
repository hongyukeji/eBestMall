<?php
/**
 * ============================================================================
 * Copyright © 2016-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/3/18 20:28
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use hongyukeji\imperavi\Widget;
$this->title = Yii::t('common', 'Create') . Yii::t('common','Goods');
$this->params['breadcrumbs'][] = ['label' => Yii::t('common','Goods') . Yii::t('common','List'),'url' => ['goods/index']];
$this->params['breadcrumbs'][] = $this->title;

$fieldOptions = [
    'options' => ['class' => 'form-group has-feedback'],
    'labelOptions' => ['class' => 'control-label col-sm-2'],
    'template' => "{label}<div class=\"col-sm-8\">{input}</div>\n<div class=\"col-sm-10 col-sm-offset-2\">{hint}\n{error}</div>",
];

?>
<div class="goods-create">
    <div class="body-content">
        <div class="row">
            <div class="col-md-12">
                <?php $form = ActiveForm::begin(['options' => ['class' => 'form-horizontal', 'enctype' => 'multipart/form-data']]); ?>
                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true"><?= Yii::t('common', 'Basic').Yii::t('common', 'Info') ?></a></li>
                        <li><a href="#tab_2" data-toggle="tab" aria-expanded="false">详细描述</a></li>
                        <li><a href="#tab_3" data-toggle="tab" aria-expanded="false">图片</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <div class="box-body">
                                <?= $form->field($model, 'goodsName', $fieldOptions) ?>
                                <?= $form->field($model, 'categoryId', $fieldOptions) ?>
                                <?= $form->field($model, 'goodsIdentifier', $fieldOptions) ?>
                                <?= $form->field($model, 'goodsDescribe', $fieldOptions)->textarea() ?>
                                <?= $form->field($model, 'goodsPrice', $fieldOptions) ?>
                                <?= $form->field($model, 'goodsMarketPrice', $fieldOptions) ?>
                                <?= $form->field($model, 'goodsNumber', $fieldOptions) ?>
                                <?= $form->field($model, 'goodsSort', $fieldOptions)->textInput(['value' => '100']) ?>
                                <?= $form->field($model, 'status', $fieldOptions)->dropDownList([ '1' => '上架', '0' => '下架'])  ?>

                            </div>

                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_2">
                            <div class="box-body">
                                <?= $form->field($model, 'goodsIntroduce', $fieldOptions)->widget(Widget::className(), [
                                    'settings' => [
                                        'lang' => 'zh_cn',
                                        'minHeight' => 200,
                                        'plugins' => [
                                            'clips',
                                            'fullscreen'
                                        ]
                                    ]
                                ]) ?>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_3">
                            <div class="box-body">
<!--                                --><?//= $form->field($model, 'goodsCoverImage', $fieldOptions)->fileInput()  ?>
<!--                                --><?//= $form->field($model, 'goodsAllImage', $fieldOptions)->fileInput(['multiple' => true, 'accept' => 'image/*'])  ?>

                                <?= $form->field($model, 'goodsId', $fieldOptions) ?>


                                <?= $form->field($model, 'goodsSalesVolume', $fieldOptions) ?>

                                <?= $form->field($model, 'goodsIsSale', $fieldOptions)->dropDownList(['1' => '是', '0' => '否'],['prompt' => '请选择']) ?>
                                <?= $form->field($model, 'goodsIsHot', $fieldOptions)->dropDownList(['1' => '是', '0' => '否'],['prompt' => '请选择']) ?>

                            </div>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="box-body">
                            <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <?= Html::submitButton(Yii::t('common', 'Submit'), ['class' => 'btn btn-primary']) ?>
                                    <?= Html::a(Yii::t('common', 'Return'), ['goods/index'], ['class' => 'btn btn-default']) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- nav-tabs-custom -->
                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>
</div><!-- setting-index -->
