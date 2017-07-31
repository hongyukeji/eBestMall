<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Shipping */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shipping-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'shippingName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shippingDescribe')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shippingPrice')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
