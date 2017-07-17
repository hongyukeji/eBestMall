<?php
use yii\helpers\Html;
?>
<p>You have entered the following information:</p>
<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Text</label>: <?= Html::encode($model->text) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>