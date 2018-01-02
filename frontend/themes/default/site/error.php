<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */

/* @var $exception Exception */

use yii\helpers\Html;
use yii\helpers\Url;

$this->registerCssFile('statics/css/404.css', ['depends' => frontend\assets\AppAsset::className()]);

$name = Yii::t('app/error', 'The page you visited does not exist');
$this->title = $name . ' - ' . 'eBestMall';
?>
<div class="site-error">
    <div class="content-404">
        <div class="content-404-l">
            <a href="javascript:;" target="_blank">
                <img class="try-text" src="/statics/img/temp/temp-41.png">
                <img class="try-img" src="/statics/img/temp/temp-40.png">
            </a>
        </div>
        <div class="content-404-m">
            <img src="/statics/img/public/error_shade.png">
        </div>
        <div class="content-404-r">
            <img class="error-img" src="/statics/img/public/error_default.png">
            <p>抱歉!&nbsp;&nbsp;您访问的页面<span>失联</span>啦...</p>
            <?php if ($message): ?>
            <div class="alert alert-danger">
                <?= nl2br(Html::encode($message)) ?>
            </div>
            <?php endif; ?>
            <span class="other">您可以逛逛&nbsp;&nbsp;:
                    <a class="a-item" href="javascript:;" target="_blank">首页</a>
                    <a class="a-item" href="javascript:;" target="_blank">试用</a>
                    <a href="javascript:;" target="_blank">会员</a>
                </span>
        </div>
    </div>
</div>
