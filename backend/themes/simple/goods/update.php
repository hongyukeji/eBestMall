<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Goods */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Goods',
]) . $model->goodsId;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Goods'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->goodsId, 'url' => ['view', 'id' => $model->goodsId]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="goods-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
