<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ShippingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shipping-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'shippingId') ?>

    <?= $form->field($model, 'shippingName') ?>

    <?= $form->field($model, 'shippingDescribe') ?>

    <?= $form->field($model, 'shippingPrice') ?>

    <?= $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
