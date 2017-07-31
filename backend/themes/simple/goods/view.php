<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Goods */

$this->title = $model->goodsId;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Goods'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="goods-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->goodsId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->goodsId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'goodsId',
            'categoryId',
            'goodsIdentifier',
            'goodsName',
            'goodsDescribe',
            'goodsPrice',
            'goodsMarketPrice',
            'goodsNumber',
            'goodsSalesVolume',
            'goodsCoverImage',
            'goodsAllImage:ntext',
            'goodsIntroduce:ntext',
            'goodsIsSale',
            'goodsIsHot',
            'goodsSort',
            'status',
            'createdTime:datetime',
            'updatedTime:datetime',
        ],
    ]) ?>

</div>
