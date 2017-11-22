<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->registerCssFile('css/site.css', ['depends' => app\assets\AppAsset::className()]);
$this->registerJsFile('js/site.js',['depends' => app\assets\AppAsset::className()]);

$this->title = 'Demo';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app','Demo'),'url' => ['/demo/index']];
$this->params['breadcrumbs'][] = $this->title;
?>