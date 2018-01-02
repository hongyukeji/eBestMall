<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = '在线制作ICO图标';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tools'), 'url' => ['/tools']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">在线制作ICO图标</h3>
    </div>
    <div class="panel-body">
        <div class="col-lg-12">
            <?php $form = ActiveForm::begin([
                'id' => 'ico-form',
                'action' => ['/tools/ico'],
                'method' => 'post',
                //'enableAjaxValidation' => true,
                'options' => ['class' => 'form-horizontal', 'autocomplete' => 'off'],
            ]); ?>
            <?= $form->field($model, 'primaryImage', [
                //'options'=>['class' => 'form-group'],
                //'labelOptions' => ['label' => 'Nick name','class' => 'your own class']
                'template' => '<div class="col-lg-1">{label}</div><div class="col-lg-6">{input}</div><div class="col-lg-5">{hint}{error}</div>',
            ])
                ->hint('支持格式：png、jpg、gif')
                ->fileInput(['class' => 'btn btn-default col-lg-12'])
                ->label('选择图片') ?>
            <?= $form->field($model, 'size', [

                'template' => '<div class="col-lg-1">{label}</div><div class="col-lg-6">{input}</div><div class="col-lg-5">{hint}{error}</div>',
            ])
                ->radioList(['16' => '16*16', '32' => '32*32', '48' => '48*48'])->label('选择尺寸')
            ?>

            <?= $form->field($model, 'verifyCode',
                [
                    'template' => '<div class="col-lg-1 control-label">{label}</div><div class="col-lg-6">{input}</div><div class="col-lg-5">{hint}{error}</div>',
                    'labelOptions' => [
                        'label' => '验证码',
                        //'class' => 'col-lg-1 control-label'],
                    ]
                ])->widget(Captcha::className(), [
                'captchaAction' => 'tools/captcha',
                'options' => [
                    'class' => 'form-control',
                    'placeholder' => '请输入验证码',
                ],
                'imageOptions' => [
                    //'id' => 'captchaimg',
                    'title' => '换一个', 'alt' => '换一个',
                    'style' => 'cursor:pointer;',
                ],
                'template' => '<div class="row"><div class="col-lg-2">{image}</div><div class="col-lg-4">{input}</div></div>',
            ]) ?>


            <div class="form-group">
                <div class="col-lg-1"></div>
                <div class="col-lg-11">
                    <?= Html::resetButton('重置', ['class' => 'btn btn-default col-lg-1']) ?>
                    <?= Html::submitButton('生成', ['class' => 'btn btn-success col-lg-1 col-md-offset-1']) ?>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>

    </div>
</div>

<?php if (!empty($errors) or !empty($output)): ?>
    <p class="form-horizontal panel panel-default margin-t-10 b-img">
    <p class="panel-heading margin-b-10">
    <p class="pull-left">
            <span class="g-bg glyphicon glyphicon-wrench margin-r-2" aria-hidden="true">
            </span>生成结果</p>
    <p class="clearfix"></p>
    </p>
    <?php if (!empty($errors)): ?>
        <p class="form-group">
            <label class="col-lg-2 text-right">生成失败</label>
        <p class="col-lg-5">
            <?php foreach ($errors as $e): ?>
                <?php echo $e; ?><br>
            <?php endforeach; ?>
        </p>
        </p>
    <?php endif; ?>
    <?PHP if (!empty($output)): ?>
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'ico-form',
            'htmlOptions' => array(
                'id' => 'view_table',
                'class' => 'add-form padding-10',
            ),
            'action' => '/tool/icoDownload',
            'enableAjaxValidation' => false
        ));
        ?>
        <?php echo Html::hiddenField('filePath', $output); ?>
        <p class="form-group">
            <label class="col-lg-2 text-right">成功生成</label>
        <p class="col-lg-5">
            <img alt="在线制作ICO图标_favicon.ico" src="<?php echo $output; ?>" class="margin-r-10">
            <input type="submit" value="立即下载" class="btn btn-sm btn-success margin-l-10">
        </p>
        </p>
        <?php $this->endWidget(); ?>
    <?php endif; ?>
    </p>
<?php endif; ?>
</p>
<!-- form -->