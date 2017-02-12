<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Goods */

$this->title = $model->goodsId;
$this->params['breadcrumbs'][] = ['label' => 'Goods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="goods-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->goodsId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->goodsId], [
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
            'goodsId',
            'goodsName',
            'goodsBrief',
            'goodsPrice',
            'goodsMarketPrice',
            'goodsNumber',
            'goodsSalesVolume',
            'goodsImage',
            'goodsIntroduce:ntext',
            'goodsStatus',
            'createdTime:datetime',
            'updatedTime:datetime',
        ],
    ]) ?>

</div>
