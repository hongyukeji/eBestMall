<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Article');
$this->params['breadcrumbs'][] = $this->title;

$this->registerJs("
    $('#DeleteAll').on('click', function () {
        var keys = $('#grid').yiiGridView('getSelectedRows');
        var url = $(this).attr('data-url');
        console.log(keys);
        $.post(url, keys, function () {},'json');
    });
",View::POS_END);

?>
<div class="article-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create') . Yii::t('app', 'Article'), ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a("批量删除", "javascript:;", ["data-method" => "post", "class" => "btn btn-danger gridview", "id" => "DeleteAll", "data-url" => Yii::$app->urlManager->createUrl(['article/delete-all'])]) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        "options" => ["class" => "grid-view","style"=>"overflow:auto", "id" => "grid"],
        'columns' => [
            ['class' => 'yii\grid\CheckboxColumn', "name" => "id"],
            'articleId',
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
                     return ($model->status==1) ? '显示' : '隐藏';
                 },
                 'filter' => ['1' => '显示' , '0' => '隐藏']
             ],
             'createdTime:datetime',
             //'updatedTime:datetime',

            [
                'class' => 'yii\grid\ActionColumn',
                'header' => Yii::t('app', 'operation'),
            ],
        ],
    ]); ?>
</div>
<script type="text/javascript">
//console.log($('#grid').yiiGridView('getSelectedRows'));
</script>
