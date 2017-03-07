<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

use ebestmall\web\EbmAsset;
EbmAsset::register($this);
$baseUrl = $this->assetBundles[EbmAsset::className()]->baseUrl . '/';
$this->registerCssFile($baseUrl .'static/css/goods.css', ['depends' => EbmAsset::className()]);

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the About page. You may modify the following file to customize its content:</p>

    <code><?= __FILE__ ?></code>
</div>
