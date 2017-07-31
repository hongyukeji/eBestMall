<?php
/**
 * ============================================================================
 * Copyright © 2016-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/3/15 22:53
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use dmstr\widgets\Alert;

$this->title = 'Retrieve Password';

$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-user form-control-feedback'></span>"
];

$fieldOptions2 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-envelope form-control-feedback'></span>"
];

?>
<div class="retrieve-password-box login-box">
    <div class="login-logo">
        <a href="#"><b><?= Yii::$app->name ?></b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Reset password</p>

        <?php $form = ActiveForm::begin(['id' => 'retrieve-password-form', 'enableClientValidation' => true]); ?>

        <?= Alert::widget() ?>

        <?= $form->field($model, 'password')->passwordInput(['autoFocus' => true, 'placeholder' => $model->getAttributeLabel('请输入新密码')]) ?>

        <?= $form->field($model, 'repassword')->passwordInput(['autoFocus' => true, 'placeholder' => $model->getAttributeLabel('请再次输入新密码')]) ?>

        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox">
                    <a href="<?= \yii\helpers\Url::to(['site/login']) ?>">Return login</a>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
            </div>
            <!-- /.col -->
        </div>

        <?php ActiveForm::end(); ?>

    </div>
    <!-- /.login-box-body -->
</div><!-- /.login-box -->
