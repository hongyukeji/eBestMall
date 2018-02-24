<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->registerCssFile('/statics/css/demo.css', ['depends' => frontend\assets\AppAsset::className()]);
$this->registerJsFile('/statics/js/demo.js',['depends' => frontend\assets\AppAsset::className()]);

$this->title = 'Demo';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app','Demo'),'url' => ['/demo/index']];
$this->params['breadcrumbs'][] = $this->title;
?>