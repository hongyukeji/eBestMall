<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\GoodsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="goods-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'goodsId') ?>

    <?= $form->field($model, 'goodsName') ?>

    <?= $form->field($model, 'goodsBrief') ?>

    <?= $form->field($model, 'goodsPrice') ?>

    <?= $form->field($model, 'goodsMarketPrice') ?>

    <?php // echo $form->field($model, 'goodsNumber') ?>

    <?php // echo $form->field($model, 'goodsSalesVolume') ?>

    <?php // echo $form->field($model, 'goodsImage') ?>

    <?php // echo $form->field($model, 'goodsIntroduce') ?>

    <?php // echo $form->field($model, 'goodsStatus') ?>

    <?php // echo $form->field($model, 'createdTime') ?>

    <?php // echo $form->field($model, 'updatedTime') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
