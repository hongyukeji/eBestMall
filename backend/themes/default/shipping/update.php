<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Shipping */

$this->title = 'Update Shipping: ' . $model->shippingId;
$this->params['breadcrumbs'][] = ['label' => 'Shippings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->shippingId, 'url' => ['view', 'id' => $model->shippingId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shipping-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
