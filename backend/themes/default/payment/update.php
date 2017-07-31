<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Payment */

$this->title = 'Update Payment: ' . $model->paymentId;
$this->params['breadcrumbs'][] = ['label' => 'Payments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->paymentId, 'url' => ['view', 'id' => $model->paymentId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="payment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
