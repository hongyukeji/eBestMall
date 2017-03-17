<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SystemSetting */
/* @var $form ActiveForm */

$this->title = Yii::t('common', '基本设置');

$this->params['breadcrumbs'][] = '系统设置';
$this->params['breadcrumbs'][] = '商城设置';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="setting-index">
    <div class="body-content">
        <div class="row">
            <div class="col-md-12">
                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">基本设置</a></li>
                        <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">显示设置</a></li>
                        <li><a href="#tab_3" data-toggle="tab">支付设置</a></li>
                        <li><a href="#tab_4" data-toggle="tab">配送方式</a></li>
                        <li><a href="#tab_5" data-toggle="tab">短信设置</a></li>
                        <li><a href="#tab_5" data-toggle="tab">入驻商设置</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <?php $form = ActiveForm::begin(); ?>

                            <?= $form->field($model, 'name') ?>

                            <?= $form->field($model, 'title') ?>

                            <?= $form->field($model, 'keywords') ?>

                            <?= $form->field($model, 'description')->textarea() ?>

                            <?= $form->field($model, 'copyright') ?>

                            <div class="form-group">
                                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
                            </div>
                            <?php ActiveForm::end(); ?>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_2">
                            显示设置
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_3">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            It has survived not only five centuries, but also the leap into electronic typesetting,
                            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                            like Aldus PageMaker including versions of Lorem Ipsum.
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_4">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            It has survived not only five centuries, but also the leap into electronic typesetting,
                            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                            like Aldus PageMaker including versions of Lorem Ipsum.
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_5">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            It has survived not only five centuries, but also the leap into electronic typesetting,
                            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                            like Aldus PageMaker including versions of Lorem Ipsum.
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_6">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            It has survived not only five centuries, but also the leap into electronic typesetting,
                            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                            like Aldus PageMaker including versions of Lorem Ipsum.
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- nav-tabs-custom -->
            </div>
        </div>
    </div>
</div><!-- setting-index -->
