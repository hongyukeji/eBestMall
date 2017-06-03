<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Category */

$this->title = Yii::t('system', 'Update {modelClass}: ', [
    'modelClass' => Yii::t('system', 'Category'),
]) . $model->categoryId;
$this->params['breadcrumbs'][] = ['label' => Yii::t('system', 'Goods Category'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->categoryId, 'url' => ['view', 'id' => $model->categoryId]];
$this->params['breadcrumbs'][] = Yii::t('system', 'Update');
?>
<div class="category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
