<?php
use yii\helpers\Html;
?>
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <?= Html::csrfMetaTags() ?>
    <?php if (Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id == 'index') { ?>
        <title><?= Html::encode(Yii::$app->params['site']['title']) ?></title>
    <?php } else { ?>
        <title><?= Html::encode($this->title) ?> - <?= Html::encode(Yii::$app->params['site']['name']) ?></title>
    <?php } ?>
    <?php $this->head() ?>
</head>