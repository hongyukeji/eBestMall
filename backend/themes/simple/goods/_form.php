<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Goods */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="goods-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'categoryId')->textInput() ?>

    <?= $form->field($model, 'goodsIdentifier')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'goodsName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'goodsDescribe')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'goodsPrice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'goodsMarketPrice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'goodsNumber')->textInput() ?>

    <?= $form->field($model, 'goodsSalesVolume')->textInput() ?>

    <?= $form->field($model, 'goodsCoverImage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'goodsAllImage')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'goodsIntroduce')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'goodsIsSale')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'goodsIsHot')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'goodsSort')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'createdTime')->textInput() ?>

    <?= $form->field($model, 'updatedTime')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
