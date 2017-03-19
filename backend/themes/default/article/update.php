<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Article */

$this->title = Yii::t('common', 'Update') . Yii::t('common', 'Article') . ': ' . $model->articleTitle;
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'Article'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->articleTitle, 'url' => ['view', 'id' => $model->articleId]];
$this->params['breadcrumbs'][] = Yii::t('common', 'Update');
?>
<div class="article-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
