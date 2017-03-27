<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Article');
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="article-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create') . Yii::t('app', 'Article'), ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a("批量删除", "javascript:console.log($('#grid').yiiGridView('getSelectedRows'));", ["class" => "btn btn-danger gridview"]) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        "options" => ["class" => "grid-view","style"=>"overflow:auto", "id" => "grid"],
        'columns' => [
            ['class' => 'yii\grid\CheckboxColumn', "name" => "id"],
            //'articleId',
            'articleTitle',
            'articleCatId' => [
                'attribute' => 'articleCatId',
                'value' => function($model){
                    return ($model->articleCatId = \common\models\ArticleCat::findOne($model->articleCatId)->articleCatName);
                },
            ],
            //'articleContent:ntext',
            'articleAuthorAdminUserId',
             'status' => [
                 'attribute' => 'status',
                 'value' => function($model){
                     return ($model->status==1) ? '是' : '否';
                 },
                 'filter' => ['1' => '是' , '0' => '否']
             ],
             //'createdTime:datetime',
             //'updatedTime:datetime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
