<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\AdminUser */

$this->title = 'Create Admin User';
$this->params['breadcrumbs'][] = ['label' => 'Admin Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
