<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ProductSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'product_id') ?>

    <?= $form->field($model, 'product_name') ?>

    <?= $form->field($model, 'product_describe') ?>

    <?= $form->field($model, 'product_detail') ?>

    <?= $form->field($model, 'product_cover') ?>

    <?php // echo $form->field($model, 'product_code') ?>

    <?php // echo $form->field($model, 'cat_id') ?>

    <?php // echo $form->field($model, 'sku_id_default') ?>

    <?php // echo $form->field($model, 'store_id') ?>

    <?php // echo $form->field($model, 'spu_sales_volume') ?>

    <?php // echo $form->field($model, 'comment') ?>

    <?php // echo $form->field($model, 'is_best') ?>

    <?php // echo $form->field($model, 'is_new') ?>

    <?php // echo $form->field($model, 'is_hot') ?>

    <?php // echo $form->field($model, 'sort_order') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'create_time') ?>

    <?php // echo $form->field($model, 'update_time') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('system', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('system', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
