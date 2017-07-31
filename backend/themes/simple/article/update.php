<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Article */

$this->title = Yii::t('app', 'Update') . Yii::t('app', 'Article') . ': ' . $model->articleTitle;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Article'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->articleTitle, 'url' => ['view', 'id' => $model->articleId]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="article-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
