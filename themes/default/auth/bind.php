<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$css = <<< CSS
.form-auth-bind{
    margin: 20px;
}
.form-auth-bind .avatar{
    border-radius: 100%;
    -webkit-box-shadow: 0 0 5px 0 #e0e0e0;
    -moz-box-shadow: 0 0 5px 0 #e0e0e0;
    box-shadow: 0 0 5px 0 #e0e0e0;
}
CSS;

$this->registerCss($css);

$js = <<< JS

JS;

$this->registerJs($js);

$username = $userInfo['client_key'] . '_' . $userInfo['username'] . '_' . Yii::$app->security->generateRandomString(2);

$this->title = 'eBestMall - 账户绑定';

?>
<div class="auth-bind">

    <?php $form = ActiveForm::begin(['options' => ['class' => 'form-auth-bind', 'autocomplete' => 'off']]); ?>

    <div class="form-group text-center">
        <img class="avatar" src="<?= $userInfo['avatar_url'] ?>" alt="">
    </div>

    <?= $form->field($model, 'username')->textInput(['value' => $username]) ?>
    <?= $form->field($model, 'password')->passwordInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-success btn-block']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- auth-bind -->
