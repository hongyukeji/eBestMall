<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('system', 'Categories');
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('system', 'Create Category'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'cat_id',
            'cat_name',
            'parent_id' =>[
                'attribute' => 'parent_id',
                'value' => function($model){
                    return \common\models\Category::find()->select(['cat_name'])->where(['cat_id'=>$model->parent_id])->scalar() ? \common\models\Category::find()->select(['cat_name'])->where(['cat_id'=>$model->parent_id])->scalar() : Yii::t('system', 'Parent Class');
                },
            ],
            'sort_order',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
