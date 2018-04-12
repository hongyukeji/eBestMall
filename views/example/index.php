<?php

use yii\helpers\Url;

$this->registerCssFile('/static/css/example.css', ['depends' => 'app\assets\AppAsset']);
$this->registerJsFile('/static/js/example.js',['depends' => 'app\assets\AppAsset']);

$this->title = 'eBestMall';
$this->params['breadcrumbs'][] = $this->title;
?>
