<?php
use leandrogehlen\treegrid\TreeGrid;
?>
<?= TreeGrid::widget([
    'dataProvider' => $dataProvider,
    'keyColumnName' => 'cate_id',
    'parentColumnName' => 'parent_id',
    'parentRootValue' => '0', //first parentId value
    'pluginOptions' => [
        'initialState' => 'collapsed',
    ],
    'columns' => [
        'cate_name',
        'cate_id',
        'parent_id',
        ['class' => 'yii\grid\ActionColumn']
    ]
]); ?>