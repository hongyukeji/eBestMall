<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ArticleCat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-cat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'articleCatName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'articleCatParentId')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
