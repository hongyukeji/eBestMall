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

    <?= $form->field($model, 'categoryId') ?>

    <?= $form->field($model, 'goodsIdentifier') ?>

    <?= $form->field($model, 'goodsName') ?>

    <?= $form->field($model, 'goodsDescribe') ?>

    <?php // echo $form->field($model, 'goodsPrice') ?>

    <?php // echo $form->field($model, 'goodsMarketPrice') ?>

    <?php // echo $form->field($model, 'goodsNumber') ?>

    <?php // echo $form->field($model, 'goodsSalesVolume') ?>

    <?php // echo $form->field($model, 'goodsCoverImage') ?>

    <?php // echo $form->field($model, 'goodsAllImage') ?>

    <?php // echo $form->field($model, 'goodsIntroduce') ?>

    <?php // echo $form->field($model, 'goodsIsSale') ?>

    <?php // echo $form->field($model, 'goodsIsHot') ?>

    <?php // echo $form->field($model, 'goodsSort') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'createdTime') ?>

    <?php // echo $form->field($model, 'updatedTime') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
