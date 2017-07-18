<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use ebestmall\assets\EbmAsset;

EbmAsset::register($this);

$baseUrl = $this->assetBundles[EbmAsset::className()]->baseUrl;
$this->registerCssFile($baseUrl .'/css/404.css', ['depends' => EbmAsset::className()]);

$name = Yii::t('app/error', 'The page you visited does not exist') . Yii::$app->params['name'];
$this->title = $name;
?>
<div class="site-error">
    <!--    --><?//= nl2br(Html::encode($message)) ?>
    <div class="content-404">
        <div class="content-404-l">
            <a href="javascript:;" target="_blank">
                <img class="try-text" src="<?= Html::encode($baseUrl) ?>/img/temp/temp-41.png">
                <img class="try-img" src="<?= Html::encode($baseUrl) ?>/img/temp/temp-40.png">
            </a>
        </div>
        <div class="content-404-m">
            <img src="<?= Html::encode($baseUrl) ?>/img/public/error_shade.png">
        </div>
        <div class="content-404-r">
            <img class="error-img" src="<?= Html::encode($baseUrl) ?>/img/public/error_default.png">
            <p>抱歉!&nbsp;&nbsp;您访问的页面<span>失联</span>啦...</p>
            <span class="other">您可以逛逛&nbsp;&nbsp;:
                    <a class="a-item" href="javascript:;" target="_blank">首页</a>
                    <a class="a-item" href="javascript:;" target="_blank">试用</a>
                    <a href="javascript:;" target="_blank">会员</a>
                </span>
        </div>
    </div>
</div>
