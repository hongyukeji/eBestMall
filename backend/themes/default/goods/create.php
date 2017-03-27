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
use kartik\file\FileInput;

$this->title = Yii::t('app', 'Create') . Yii::t('app','Goods');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app','Goods') . Yii::t('app','List'),'url' => ['goods/index']];
$this->params['breadcrumbs'][] = $this->title;

$fieldOptions = [
    'options' => ['class' => 'form-group has-feedback'],
    'labelOptions' => ['class' => 'control-label col-sm-2'],
    'template' => "{label}<div class=\"col-sm-8\">{input}</div>\n<div class=\"col-sm-10 col-sm-offset-2\">{hint}\n{error}</div>",
];

/*
 *  <?= $form->field($model, 'goodsAllImage[]', $fieldOptions)->fileInput(['class' => 'form-control', 'multiple' => true, 'accept' => 'image/*'])  ?>
 */

?>
<div class="goods-create">
    <div class="body-content">
        <div class="row">
            <div class="col-md-12">
                <?php $form = ActiveForm::begin(['options' => ['class' => 'form-horizontal', 'enctype' => 'multipart/form-data'], 'enableClientValidation' => true]); ?>
                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true"><?= Yii::t('app', 'Basic').Yii::t('app', 'Info') ?></a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <div class="box-body">

                                <?= $form->field($model, 'goodsName', $fieldOptions) ?>
                                <?= $form->field($model, 'goodsIdentifier', $fieldOptions)->textInput(['placeholder'=>'默认生成一个唯一的商品编号。']) ?>
                                <?= $form->field($model, 'categoryId', $fieldOptions) ?>
                                <?= $form->field($model, 'goodsDescribe', $fieldOptions)->textarea() ?>
                                <?= $form->field($model, 'goodsPrice', $fieldOptions) ?>
                                <?= $form->field($model, 'goodsMarketPrice', $fieldOptions)->textInput(['placeholder'=>'默认为商品价格的 2%']) ?>
                                <?= $form->field($model, 'goodsNumber', $fieldOptions) ?>

                                <?= $form->field($model, 'goodsCoverImage', $fieldOptions)->fileInput(['class' => 'form-control'])  ?>

                                <?= $form->field($model, 'goodsAllImage[]', $fieldOptions)->widget(FileInput::classname(), [
                                    'name' => 'goodsAllImage[]',
                                    'language' => 'zh',
                                    'options' => [
                                        'multiple' => true
                                    ],
                                    'pluginOptions' => [
                                        'showUpload' => false,  // 是否显示上传按钮，指input上面的上传按钮，非具体图片上的上传按钮
                                        'fileActionSettings' => [
                                            'showZoom' => true,    // 设置具体图片的查看属性为false,默认为true
                                            'showUpload' => false,   // 设置具体图片的上传属性为true,默认为true
                                            'showRemove' => true,   // 设置具体图片的移除属性为true,默认为true
                                        ],
                                        'uploadUrl' => Url::toRoute(['goods/file-upload']),
                                        'uploadExtraData' => [
                                            'goods_id' => '7',
                                        ],
                                        'uploadAsync' => true,
                                        'maxFileCount' => 10,
                                    ],
                                ])?>

                                <?= $form->field($model, 'goodsIntroduce', $fieldOptions)->widget(Widget::className(), [
                                    'settings' => [
                                        'lang' => 'zh_cn',
                                        'minHeight' => 400,
                                        'imageManagerJson' => Url::to(['goods/file-upload']),
                                        'plugins' => [
                                            //'clips',
                                            'fullscreen',
                                        ]
                                    ]
                                ]) ?>

                                <?= $form->field($model, 'goodsIsSale', $fieldOptions)->dropDownList(['1' => '是', '0' => '否'],['prompt' => '请选择']) ?>
                                <?= $form->field($model, 'goodsIsHot', $fieldOptions)->dropDownList(['1' => '是', '0' => '否'],['prompt' => '请选择']) ?>
                                <?= $form->field($model, 'goodsSalesVolume', $fieldOptions) ?>
                                <?= $form->field($model, 'goodsSort', $fieldOptions)->textInput(['value' => '100']) ?>
                                <?= $form->field($model, 'status', $fieldOptions)->dropDownList([ '1' => '上架', '0' => '下架'])  ?>

                            </div>

                        </div>
                        <!-- /.tab-pane -->
                        <div class="box-body">
                            <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
                                    <?= Html::a(Yii::t('app', 'Return'), ['goods/index'], ['class' => 'btn btn-default']) ?>
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
