<?php
/**
 * ============================================================================
 * Copyright © 2016-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/4/3 13:26
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */

use yii\helpers\Html;
use ebestmall\assets\EbmAsset;

EbmAsset::register($this);
/*<?= Html::encode($baseUrl) ?>*/
$baseUrl = $this->assetBundles[EbmAsset::className()]->baseUrl;
$this->registerCssFile($baseUrl .'/css/cart.css', ['depends' => EbmAsset::className()]);
$this->registerJsFile($baseUrl .'/js/cart.js',['depends' => EbmAsset::className()]);

$js = <<<JS
    $(function () {
        alert(1);
    });
JS;
$this->registerJs($js, \yii\web\View::POS_END);

$this->title = Yii::$app->params['site']['name'];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app','Demo'),'url' => ['demo/index']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Demo');


?>
<div class="demo-index">
    <p>
        static replace <?= Html::encode($baseUrl) ?>
    </p>
</div>

<script type="text/javascript"></script>

