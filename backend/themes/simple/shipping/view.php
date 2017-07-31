<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Shipping */

$this->title = $model->shippingId;
$this->params['breadcrumbs'][] = ['label' => 'Shippings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shipping-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->shippingId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->shippingId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'shippingId',
            'shippingName',
            'shippingDescribe',
            'shippingPrice',
            'status',
        ],
    ]) ?>

</div>
