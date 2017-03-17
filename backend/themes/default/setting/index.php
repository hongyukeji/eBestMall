<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SystemSetting */
/* @var $form ActiveForm */

$this->title = Yii::t('common', '基本设置');

$this->params['breadcrumbs'][] = '系统设置';
$this->params['breadcrumbs'][] = '商城设置';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="setting-index">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name') ?>

        <?= $form->field($model, 'title') ?>

        <?= $form->field($model, 'keywords') ?>

        <?= $form->field($model, 'description')->textarea() ?>

        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- setting-index -->
