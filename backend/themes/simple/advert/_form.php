<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Advert */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="advert-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'advertName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'advertCode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'advertLocation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'advertImage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'advertUrl')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
