<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ArticleCat */

$this->title = 'Create Article Cat';
$this->params['breadcrumbs'][] = ['label' => 'Article Cats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-cat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
