<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Goods */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="goods-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'goodsName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'goodsBrief')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'goodsPrice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'goodsMarketPrice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'goodsNumber')->textInput() ?>

    <?= $form->field($model, 'goodsSalesVolume')->textInput() ?>

    <?= $form->field($model, 'goodsImage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'goodsIntroduce')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'goodsStatus')->textInput() ?>

    <?= $form->field($model, 'createdTime')->textInput() ?>

    <?= $form->field($model, 'updatedTime')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
