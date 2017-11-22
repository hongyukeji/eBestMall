<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->registerCssFile('/static/css/demo.css', ['depends' => app\assets\AppAsset::className()]);
$this->registerJsFile('/static/js/demo.js',['depends' => app\assets\AppAsset::className()]);

$this->title = 'Demo';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app','Demo'),'url' => ['/demo/index']];
$this->params['breadcrumbs'][] = $this->title;
?>