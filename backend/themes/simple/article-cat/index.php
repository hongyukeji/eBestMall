<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ArticleCatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Article Cats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-cat-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Article Cat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'articleCatId',
            'articleCatName',
            'articleCatParentId',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
