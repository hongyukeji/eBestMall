<?php
/**
 * ============================================================================
 * Copyright © 2016-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/4/1 16:16
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */

use yii\helpers\Html;
use ebestmall\assets\EbmAsset;

EbmAsset::register($this);

$baseUrl = $this->assetBundles[EbmAsset::className()]->baseUrl;
$this->registerCssFile($baseUrl .'/css/cart.css', ['depends' => EbmAsset::className()]);
$this->registerJsFile($baseUrl .'/js/cart.js',['depends' => EbmAsset::className()]);

$this->title = Yii::$app->params['site']['name'];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app','Order'),'url' => ['order/index']];
$this->params['breadcrumbs'][] = Yii::t('app', 'My') . Yii::t('app', 'Order');
?>
<div class="order-index"></div>