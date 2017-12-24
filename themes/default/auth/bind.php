<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$str = '_' . Yii::$app->security->generateRandomString(6);
/* @var $this yii\web\View */
/* @var $model app\models\form\BindForm */
/* @var $form ActiveForm */
?>
<div class="auth-bind">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'username')->textInput(['value' => $userinfo['username'] . $str]) ?>
    <?= $form->field($model, 'password') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- auth-bind -->
