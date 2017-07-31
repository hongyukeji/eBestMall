<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ArticleCat */

$this->title = 'Update Article Cat: ' . $model->articleCatId;
$this->params['breadcrumbs'][] = ['label' => 'Article Cats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->articleCatId, 'url' => ['view', 'id' => $model->articleCatId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="article-cat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
