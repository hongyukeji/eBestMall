<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use ebestmall\assets\EbmAsset;

EbmAsset::register($this);
$baseUrl = $this->assetBundles[EbmAsset::className()]->baseUrl;

$this->registerCssFile($baseUrl .'/css/index.css', ['depends' => EbmAsset::className()]);
$this->registerJsFile($baseUrl .'/js/index.js',['depends' => EbmAsset::className()]);

$this->title = Yii::$app->params['site']['title'];
?>
<div class="site-index">
    <div class="content-body">
            <!-- Content-焦点区 -->
            <div class="content-focus">
                <div class="content-focus-left">
                    <div class="content-focus-left-classify">
                        <ul>
                            <li class="item">
                                <ul>
                                    <li><span class="item-line">/</span><a href="javascript:;">家用电器</a></li>
                                </ul>
                                <div class="list">
                                    <div class="content-focus-classify-sub-category">
                                        <div class="content-focus-classify-sub-category-left">
                                            <ul class="content-focus-classify-sub-category-left-channel">
                                                <li><a href="javascript:;">家电馆<i class="icon-navigate_next"></i></a></li>
                                                <li><a href="javascript:;">品牌日<i class="icon-navigate_next"></i></a></li>
                                                <li><a href="javascript:;">智能生活馆<i class="icon-navigate_next"></i></a></li>
                                            </ul>
                                            <div class="content-focus-classify-sub-category-content">
                                                <dl>
                                                    <dt><a href="javascript:;">电视<i class="icon-navigate_next"></i></a></dt>
                                                    <dd>
                                                        <a href="javascript:;">合资品牌</a>
                                                        <a href="javascript:;">国产品牌</a>
                                                        <a href="javascript:;">互联网品牌</a>
                                                    </dd>
                                                </dl>
                                                <dl>
                                                    <dt><a href="javascript:;">电视<i class="icon-navigate_next"></i></a></dt>
                                                    <dd>
                                                        <a href="javascript:;">合资品牌</a>
                                                        <a href="javascript:;">国产品牌</a>
                                                        <a href="javascript:;">互联网品牌</a>
                                                        <a href="javascript:;">合资品牌</a>
                                                        <a href="javascript:;">国产品牌</a>
                                                        <a href="javascript:;">互联网品牌</a>
                                                        <a href="javascript:;">合资品牌</a>
                                                        <a href="javascript:;">国产品牌</a>
                                                        <a href="javascript:;">互联网品牌</a>
                                                        <a href="javascript:;">合资品牌</a>
                                                        <a href="javascript:;">国产品牌</a>
                                                        <a href="javascript:;">互联网品牌</a>
                                                        <a href="javascript:;">合资品牌</a>
                                                        <a href="javascript:;">国产品牌</a>
                                                        <a href="javascript:;">互联网品牌</a>
                                                        <a href="javascript:;">合资品牌</a>
                                                        <a href="javascript:;">国产品牌</a>
                                                        <a href="javascript:;">互联网品牌</a>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </div>
                                        <div class="content-focus-classify-sub-category-right">
                                            <div class="content-focus-classify-sub-category-brand">
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                            </div>
                                            <div class="content-focus-classify-sub-category-promotion">
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_promotion_01.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_promotion_01.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class="item">
                                <ul>
                                    <li><span class="item-line">/</span><a href="javascript:;">手机数码</a></li>
                                    <li><span class="item-line">/</span><a href="javascript:;">运营商</a></li>
                                    <li><span class="item-line">/</span><a href="javascript:;">数码</a></li>
                                </ul>
                                <div class="list">
                                    <div class="content-focus-classify-sub-category">
                                        <div class="content-focus-classify-sub-category-left">
                                            <ul class="content-focus-classify-sub-category-left-channel">
                                                <li><a href="javascript:;">家电馆<i class="icon-navigate_next"></i></a></li>
                                                <li><a href="javascript:;">品牌日<i class="icon-navigate_next"></i></a></li>
                                                <li><a href="javascript:;">智能生活馆<i class="icon-navigate_next"></i></a></li>
                                            </ul>
                                            <div class="content-focus-classify-sub-category-content">
                                                <dl>
                                                    <dt><a href="javascript:;">电视<i class="icon-navigate_next"></i></a></dt>
                                                    <dd>
                                                        <a href="javascript:;">合资品牌</a>
                                                        <a href="javascript:;">国产品牌</a>
                                                        <a href="javascript:;">互联网品牌</a>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </div>
                                        <div class="content-focus-classify-sub-category-right">
                                            <div class="content-focus-classify-sub-category-brand">
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                            </div>
                                            <div class="content-focus-classify-sub-category-promotion">
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_promotion_01.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_promotion_01.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class="item">
                                <ul>
                                    <li><span class="item-line">/</span><a href="javascript:;">电脑办公</a></li>
                                </ul>
                                <div class="list">
                                    <div class="content-focus-classify-sub-category">
                                        <div class="content-focus-classify-sub-category-left">
                                            <ul class="content-focus-classify-sub-category-left-channel">
                                                <li><a href="javascript:;">家电馆<i class="icon-navigate_next"></i></a></li>
                                                <li><a href="javascript:;">品牌日<i class="icon-navigate_next"></i></a></li>
                                                <li><a href="javascript:;">智能生活馆<i class="icon-navigate_next"></i></a></li>
                                            </ul>
                                            <div class="content-focus-classify-sub-category-content">
                                                <dl>
                                                    <dt><a href="javascript:;">电视<i class="icon-navigate_next"></i></a></dt>
                                                    <dd>
                                                        <a href="javascript:;">合资品牌</a>
                                                        <a href="javascript:;">国产品牌</a>
                                                        <a href="javascript:;">互联网品牌</a>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </div>
                                        <div class="content-focus-classify-sub-category-right">
                                            <div class="content-focus-classify-sub-category-brand">
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                            </div>
                                            <div class="content-focus-classify-sub-category-promotion">
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_promotion_01.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_promotion_01.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class="item">
                                <ul>
                                    <li><span class="item-line">/</span><a href="javascript:;">家居</a></li>
                                    <li><span class="item-line">/</span><a href="javascript:;">家具</a></li>
                                    <li><span class="item-line">/</span><a href="javascript:;">家装</a></li>
                                    <li><span class="item-line">/</span><a href="javascript:;">厨具</a></li>
                                </ul>
                                <div class="list">
                                    <div class="content-focus-classify-sub-category">
                                        <div class="content-focus-classify-sub-category-left">
                                            <ul class="content-focus-classify-sub-category-left-channel">
                                                <li><a href="javascript:;">家电馆<i class="icon-navigate_next"></i></a></li>
                                                <li><a href="javascript:;">品牌日<i class="icon-navigate_next"></i></a></li>
                                                <li><a href="javascript:;">智能生活馆<i class="icon-navigate_next"></i></a></li>
                                            </ul>
                                            <div class="content-focus-classify-sub-category-content">
                                                <dl>
                                                    <dt><a href="javascript:;">电视<i class="icon-navigate_next"></i></a></dt>
                                                    <dd>
                                                        <a href="javascript:;">合资品牌</a>
                                                        <a href="javascript:;">国产品牌</a>
                                                        <a href="javascript:;">互联网品牌</a>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </div>
                                        <div class="content-focus-classify-sub-category-right">
                                            <div class="content-focus-classify-sub-category-brand">
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                            </div>
                                            <div class="content-focus-classify-sub-category-promotion">
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_promotion_01.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_promotion_01.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class="item">
                                <ul>
                                    <li><span class="item-line">/</span><a href="javascript:;">男装</a></li>
                                    <li><span class="item-line">/</span><a href="javascript:;">女装</a></li>
                                    <li><span class="item-line">/</span><a href="javascript:;">童装</a></li>
                                    <li><span class="item-line">/</span><a href="javascript:;">内衣</a></li>
                                </ul>
                                <div class="list">
                                    <div class="content-focus-classify-sub-category">
                                        <div class="content-focus-classify-sub-category-left">
                                            <ul class="content-focus-classify-sub-category-left-channel">
                                                <li><a href="javascript:;">家电馆<i class="icon-navigate_next"></i></a></li>
                                                <li><a href="javascript:;">品牌日<i class="icon-navigate_next"></i></a></li>
                                                <li><a href="javascript:;">智能生活馆<i class="icon-navigate_next"></i></a></li>
                                            </ul>
                                            <div class="content-focus-classify-sub-category-content">
                                                <dl>
                                                    <dt><a href="javascript:;">电视<i class="icon-navigate_next"></i></a></dt>
                                                    <dd>
                                                        <a href="javascript:;">合资品牌</a>
                                                        <a href="javascript:;">国产品牌</a>
                                                        <a href="javascript:;">互联网品牌</a>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </div>
                                        <div class="content-focus-classify-sub-category-right">
                                            <div class="content-focus-classify-sub-category-brand">
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                            </div>
                                            <div class="content-focus-classify-sub-category-promotion">
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_promotion_01.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_promotion_01.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class="item">
                                <ul>
                                    <li><span class="item-line">/</span><a href="javascript:;">个护化妆</a></li>
                                    <li><span class="item-line">/</span><a href="javascript:;">清洁用品</a></li>
                                    <li><span class="item-line">/</span><a href="javascript:;">宠物</a></li>
                                </ul>
                                <div class="list">
                                    <div class="content-focus-classify-sub-category">
                                        <div class="content-focus-classify-sub-category-left">
                                            <ul class="content-focus-classify-sub-category-left-channel">
                                                <li><a href="javascript:;">家电馆<i class="icon-navigate_next"></i></a></li>
                                                <li><a href="javascript:;">品牌日<i class="icon-navigate_next"></i></a></li>
                                                <li><a href="javascript:;">智能生活馆<i class="icon-navigate_next"></i></a></li>
                                            </ul>
                                            <div class="content-focus-classify-sub-category-content">
                                                <dl>
                                                    <dt><a href="javascript:;">电视<i class="icon-navigate_next"></i></a></dt>
                                                    <dd>
                                                        <a href="javascript:;">合资品牌</a>
                                                        <a href="javascript:;">国产品牌</a>
                                                        <a href="javascript:;">互联网品牌</a>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </div>
                                        <div class="content-focus-classify-sub-category-right">
                                            <div class="content-focus-classify-sub-category-brand">
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                            </div>
                                            <div class="content-focus-classify-sub-category-promotion">
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_promotion_01.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_promotion_01.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class="item">
                                <ul>
                                    <li><span class="item-line">/</span><a href="javascript:;">鞋靴</a></li>
                                    <li><span class="item-line">/</span><a href="javascript:;">箱包</a></li>
                                    <li><span class="item-line">/</span><a href="javascript:;">珠宝</a></li>
                                    <li><span class="item-line">/</span><a href="javascript:;">奢侈品</a></li>
                                </ul>
                                <div class="list">
                                    <div class="content-focus-classify-sub-category">
                                        <div class="content-focus-classify-sub-category-left">
                                            <ul class="content-focus-classify-sub-category-left-channel">
                                                <li><a href="javascript:;">家电馆<i class="icon-navigate_next"></i></a></li>
                                                <li><a href="javascript:;">品牌日<i class="icon-navigate_next"></i></a></li>
                                                <li><a href="javascript:;">智能生活馆<i class="icon-navigate_next"></i></a></li>
                                            </ul>
                                            <div class="content-focus-classify-sub-category-content">
                                                <dl>
                                                    <dt><a href="javascript:;">电视<i class="icon-navigate_next"></i></a></dt>
                                                    <dd>
                                                        <a href="javascript:;">合资品牌</a>
                                                        <a href="javascript:;">国产品牌</a>
                                                        <a href="javascript:;">互联网品牌</a>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </div>
                                        <div class="content-focus-classify-sub-category-right">
                                            <div class="content-focus-classify-sub-category-brand">
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                            </div>
                                            <div class="content-focus-classify-sub-category-promotion">
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_promotion_01.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_promotion_01.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class="item">
                                <ul>
                                    <li><span class="item-line">/</span><a href="javascript:;">运动</a></li>
                                    <li><span class="item-line">/</span><a href="javascript:;">户外</a></li>
                                    <li><span class="item-line">/</span><a href="javascript:;">钟表</a></li>
                                </ul>
                                <div class="list">
                                    <div class="content-focus-classify-sub-category">
                                        <div class="content-focus-classify-sub-category-left">
                                            <ul class="content-focus-classify-sub-category-left-channel">
                                                <li><a href="javascript:;">家电馆<i class="icon-navigate_next"></i></a></li>
                                                <li><a href="javascript:;">品牌日<i class="icon-navigate_next"></i></a></li>
                                                <li><a href="javascript:;">智能生活馆<i class="icon-navigate_next"></i></a></li>
                                            </ul>
                                            <div class="content-focus-classify-sub-category-content">
                                                <dl>
                                                    <dt><a href="javascript:;">电视<i class="icon-navigate_next"></i></a></dt>
                                                    <dd>
                                                        <a href="javascript:;">合资品牌</a>
                                                        <a href="javascript:;">国产品牌</a>
                                                        <a href="javascript:;">互联网品牌</a>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </div>
                                        <div class="content-focus-classify-sub-category-right">
                                            <div class="content-focus-classify-sub-category-brand">
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                            </div>
                                            <div class="content-focus-classify-sub-category-promotion">
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_promotion_01.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_promotion_01.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class="item">
                                <ul>
                                    <li><span class="item-line">/</span><a href="javascript:;">汽车</a></li>
                                    <li><span class="item-line">/</span><a href="javascript:;">汽车用品</a></li>
                                </ul>
                                <div class="list">
                                    <div class="content-focus-classify-sub-category">
                                        <div class="content-focus-classify-sub-category-left">
                                            <ul class="content-focus-classify-sub-category-left-channel">
                                                <li><a href="javascript:;">家电馆<i class="icon-navigate_next"></i></a></li>
                                                <li><a href="javascript:;">品牌日<i class="icon-navigate_next"></i></a></li>
                                                <li><a href="javascript:;">智能生活馆<i class="icon-navigate_next"></i></a></li>
                                            </ul>
                                            <div class="content-focus-classify-sub-category-content">
                                                <dl>
                                                    <dt><a href="javascript:;">电视<i class="icon-navigate_next"></i></a></dt>
                                                    <dd>
                                                        <a href="javascript:;">合资品牌</a>
                                                        <a href="javascript:;">国产品牌</a>
                                                        <a href="javascript:;">互联网品牌</a>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </div>
                                        <div class="content-focus-classify-sub-category-right">
                                            <div class="content-focus-classify-sub-category-brand">
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                            </div>
                                            <div class="content-focus-classify-sub-category-promotion">
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_promotion_01.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_promotion_01.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class="item">
                                <ul>
                                    <li><span class="item-line">/</span><a href="javascript:;">母婴</a></li>
                                    <li><span class="item-line">/</span><a href="javascript:;">玩具乐器</a></li>
                                </ul>
                                <div class="list">
                                    <div class="content-focus-classify-sub-category">
                                        <div class="content-focus-classify-sub-category-left">
                                            <ul class="content-focus-classify-sub-category-left-channel">
                                                <li><a href="javascript:;">家电馆<i class="icon-navigate_next"></i></a></li>
                                                <li><a href="javascript:;">品牌日<i class="icon-navigate_next"></i></a></li>
                                                <li><a href="javascript:;">智能生活馆<i class="icon-navigate_next"></i></a></li>
                                            </ul>
                                            <div class="content-focus-classify-sub-category-content">
                                                <dl>
                                                    <dt><a href="javascript:;">电视<i class="icon-navigate_next"></i></a></dt>
                                                    <dd>
                                                        <a href="javascript:;">合资品牌</a>
                                                        <a href="javascript:;">国产品牌</a>
                                                        <a href="javascript:;">互联网品牌</a>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </div>
                                        <div class="content-focus-classify-sub-category-right">
                                            <div class="content-focus-classify-sub-category-brand">
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                            </div>
                                            <div class="content-focus-classify-sub-category-promotion">
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_promotion_01.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_promotion_01.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class="item">
                                <ul>
                                    <li><span class="item-line">/</span><a href="javascript:;">食品</a></li>
                                    <li><span class="item-line">/</span><a href="javascript:;">酒类</a></li>
                                    <li><span class="item-line">/</span><a href="javascript:;">生鲜</a></li>
                                    <li><span class="item-line">/</span><a href="javascript:;">特产</a></li>
                                </ul>
                                <div class="list">
                                    <div class="content-focus-classify-sub-category">
                                        <div class="content-focus-classify-sub-category-left">
                                            <ul class="content-focus-classify-sub-category-left-channel">
                                                <li><a href="javascript:;">家电馆<i class="icon-navigate_next"></i></a></li>
                                                <li><a href="javascript:;">品牌日<i class="icon-navigate_next"></i></a></li>
                                                <li><a href="javascript:;">智能生活馆<i class="icon-navigate_next"></i></a></li>
                                            </ul>
                                            <div class="content-focus-classify-sub-category-content">
                                                <dl>
                                                    <dt><a href="javascript:;">电视<i class="icon-navigate_next"></i></a></dt>
                                                    <dd>
                                                        <a href="javascript:;">合资品牌</a>
                                                        <a href="javascript:;">国产品牌</a>
                                                        <a href="javascript:;">互联网品牌</a>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </div>
                                        <div class="content-focus-classify-sub-category-right">
                                            <div class="content-focus-classify-sub-category-brand">
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                            </div>
                                            <div class="content-focus-classify-sub-category-promotion">
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_promotion_01.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_promotion_01.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class="item">
                                <ul>
                                    <li><span class="item-line">/</span><a href="javascript:;">医药保健</a></li>
                                </ul>
                                <a href="javascript:;"></a>
                                <div class="list">
                                    <div class="content-focus-classify-sub-category">
                                        <div class="content-focus-classify-sub-category-left">
                                            <ul class="content-focus-classify-sub-category-left-channel">
                                                <li><a href="javascript:;">家电馆<i class="icon-navigate_next"></i></a></li>
                                                <li><a href="javascript:;">品牌日<i class="icon-navigate_next"></i></a></li>
                                                <li><a href="javascript:;">智能生活馆<i class="icon-navigate_next"></i></a></li>
                                            </ul>
                                            <div class="content-focus-classify-sub-category-content">
                                                <dl>
                                                    <dt><a href="javascript:;">电视<i class="icon-navigate_next"></i></a></dt>
                                                    <dd>
                                                        <a href="javascript:;">合资品牌</a>
                                                        <a href="javascript:;">国产品牌</a>
                                                        <a href="javascript:;">互联网品牌</a>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </div>
                                        <div class="content-focus-classify-sub-category-right">
                                            <div class="content-focus-classify-sub-category-brand">
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                            </div>
                                            <div class="content-focus-classify-sub-category-promotion">
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_promotion_01.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_promotion_01.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class="item">
                                <ul>
                                    <li><span class="item-line">/</span><a href="javascript:;">图书</a></li>
                                    <li><span class="item-line">/</span><a href="javascript:;">音像</a></li>
                                    <li><span class="item-line">/</span><a href="javascript:;">电子书</a></li>
                                </ul>
                                <div class="list">
                                    <div class="content-focus-classify-sub-category">
                                        <div class="content-focus-classify-sub-category-left">
                                            <ul class="content-focus-classify-sub-category-left-channel">
                                                <li><a href="javascript:;">家电馆<i class="icon-navigate_next"></i></a></li>
                                                <li><a href="javascript:;">品牌日<i class="icon-navigate_next"></i></a></li>
                                                <li><a href="javascript:;">智能生活馆<i class="icon-navigate_next"></i></a></li>
                                            </ul>
                                            <div class="content-focus-classify-sub-category-content">
                                                <dl>
                                                    <dt><a href="javascript:;">电视<i class="icon-navigate_next"></i></a></dt>
                                                    <dd>
                                                        <a href="javascript:;">合资品牌</a>
                                                        <a href="javascript:;">国产品牌</a>
                                                        <a href="javascript:;">互联网品牌</a>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </div>
                                        <div class="content-focus-classify-sub-category-right">
                                            <div class="content-focus-classify-sub-category-brand">
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                            </div>
                                            <div class="content-focus-classify-sub-category-promotion">
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_promotion_01.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_promotion_01.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class="item">
                                <ul>
                                    <li><span class="item-line">/</span><a href="javascript:;">机票</a></li>
                                    <li><span class="item-line">/</span><a href="javascript:;">酒店</a></li>
                                    <li><span class="item-line">/</span><a href="javascript:;">旅游</a></li>
                                    <li><span class="item-line">/</span><a href="javascript:;">生活</a></li>
                                </ul>
                                <div class="list">
                                    <div class="content-focus-classify-sub-category">
                                        <div class="content-focus-classify-sub-category-left">
                                            <ul class="content-focus-classify-sub-category-left-channel">
                                                <li><a href="javascript:;">家电馆<i class="icon-navigate_next"></i></a></li>
                                                <li><a href="javascript:;">品牌日<i class="icon-navigate_next"></i></a></li>
                                                <li><a href="javascript:;">智能生活馆<i class="icon-navigate_next"></i></a></li>
                                            </ul>
                                            <div class="content-focus-classify-sub-category-content">
                                                <dl>
                                                    <dt><a href="javascript:;">电视<i class="icon-navigate_next"></i></a></dt>
                                                    <dd>
                                                        <a href="javascript:;">合资品牌</a>
                                                        <a href="javascript:;">国产品牌</a>
                                                        <a href="javascript:;">互联网品牌</a>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </div>
                                        <div class="content-focus-classify-sub-category-right">
                                            <div class="content-focus-classify-sub-category-brand">
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                            </div>
                                            <div class="content-focus-classify-sub-category-promotion">
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_promotion_01.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_promotion_01.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class="item">
                                <ul>
                                    <li><span class="item-line">/</span><a href="javascript:;">理财</a></li>
                                    <li><span class="item-line">/</span><a href="javascript:;">众筹</a></li>
                                    <li><span class="item-line">/</span><a href="javascript:;">白条</a></li>
                                    <li><span class="item-line">/</span><a href="javascript:;">保险</a></li>
                                </ul>
                                <div class="list">
                                    <div class="content-focus-classify-sub-category">
                                        <div class="content-focus-classify-sub-category-left">
                                            <ul class="content-focus-classify-sub-category-left-channel">
                                                <li><a href="javascript:;">家电馆<i class="icon-navigate_next"></i></a></li>
                                                <li><a href="javascript:;">品牌日<i class="icon-navigate_next"></i></a></li>
                                                <li><a href="javascript:;">智能生活馆<i class="icon-navigate_next"></i></a></li>
                                            </ul>
                                            <div class="content-focus-classify-sub-category-content">
                                                <dl>
                                                    <dt><a href="javascript:;">电视<i class="icon-navigate_next"></i></a></dt>
                                                    <dd>
                                                        <a href="javascript:;">合资品牌</a>
                                                        <a href="javascript:;">国产品牌</a>
                                                        <a href="javascript:;">互联网品牌</a>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </div>
                                        <div class="content-focus-classify-sub-category-right">
                                            <div class="content-focus-classify-sub-category-brand">
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_brand_midea.jpg" alt=""></a>
                                            </div>
                                            <div class="content-focus-classify-sub-category-promotion">
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_promotion_01.jpg" alt=""></a>
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-cat_promotion_01.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="content-focus-middle ">
                    <div class="content-focus-middle-slider">
                        <div id="sliderBar">
                            <ul class="slides">
                                <li>
                                    <a href="javascript:;">
                                        <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-01.jpg" alt=""/>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-02.jpg" alt=""/>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-03.jpg" alt=""/>
                                    </a>
                                </li>
                            </ul>
                            <ul class="slider-direction-nav">
                                <li><a class="slider-prev" href="javascript:;"><i class="icon-navigate_before"></i></a></li>
                                <li><a class="slider-next" href="javascript:;"><i class="icon-navigate_next"></i></a></li>
                            </ul>
                            <ol id="sliderIndicator" class="slider-control-nav slider-control-btn">
                                <li><a>1</a></li>
                                <li><a>2</a></li>
                                <li><a>3</a></li>
                            </ol>
                        </div>
                    </div>
                    <div class="content-focus-middle-slider-extend">
                        <div class="content-focus-middle-slider-extend-left">
                            <a href="javascript:;">
                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-extend-left.jpg" />
                            </a>
                        </div>
                        <div class="content-focus-middle-slider-extend-middle"></div>
                        <div class="content-focus-middle-slider-extend-right">
                            <a href="javascript:;">
                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-extend-right.jpg" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="content-focus-right ">
                    <div class="content-focus-right-user">
                        <div class="content-focus-right-user-info_avatar">
                            <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/public/user/no_login_default_avatar.jpg" alt=""></a>
                        </div>
                        <div class="content-focus-right-user-info_show">
                            <?php if(Yii::$app->user->isGuest) : ?>
                            <p>Hi，欢迎来到eBestMall</p>
                            <p>
                                <a href="<?= Url::to(['site/login']) ?>">登录</a>
                                <a href="<?= Url::to(['site/signup']) ?>">注册</a>
                            </p>
                            <?php else : ?>
                                <p>Hi，<?= Html::encode(Yii::$app->user->identity->username);?></p>
                                <p>
                                    <a href="<?= Url::to(['user/index']) ?>">会员中心</a>
                                    <a href="<?= Url::to(['site/logout']) ?>" data-method="post">退出</a>
                                </p>
                            <?php endif; ?>
                        </div>
                        <div class="content-focus-right-user-profit">
                            <a href="javascript:;" target="_blank">新人福利</a>
                            <a href="javascript:;" target="_blank">PLUS会员</a>
                        </div>
                    </div>
                    <!--Tab切换-->
                    <div class="content-focus-right-middle">
                        <div class="content-focus-right-middle-tab">
                            <div class="content-focus-right-middle-tab-title">
                                <ul>
                                    <li><a class="active" href="javascript:;">促销</a> </li>
                                    <li><a href="javascript:;">公告</a> </li>
                                </ul>
                                <div class="content-focus-right-middle-tab-title-more"><a href="javascript:;">更多</a> </div>
                            </div>
                            <div class="content-focus-right-middle-tab-body">
                                <ul>
                                    <li><a href="javascript:;">春节好礼 抽1000元E卡</a> </li>
                                    <li><a href="javascript:;">过年吃点儿好的！</a> </li>
                                    <li><a href="javascript:;">全场满888元 减！减！减！</a> </li>
                                    <li><a href="javascript:;">过年了对自己好点！</a> </li>
                                </ul>
                                <ul>
                                    <li><a href="javascript:;">eBestMall商城即将上线啦！</a> </li>
                                    <li><a href="javascript:;">关于系统版权声明</a> </li>
                                    <li><a href="javascript:;">提供永久免费售后更新</a> </li>
                                    <li><a href="javascript:;">承接各种在本系统上的二开</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--常用导航-->
                    <div class="content-focus-right-service">
                        <ul>
                            <li class="item"><a href="javascript:;"><div><i class="icon-shop"></i></div><span>商家</span></a></li>
                            <li class="item"><a href="javascript:;"><div><i class="icon-diamond"></i></div><span>会员</span></a></li>
                            <li class="item"><a href="javascript:;"><div><i class="icon-megaphone"></i></div><span>通知</span></a></li>
                            <li class="item"><a href="javascript:;"><div><i class="icon-truck3"></i></div><span>运输</span></a></li>
                            <li class="item"><a href="javascript:;"><div><i class="icon-banknote"></i></div><span>充值</span></a></li>
                            <li class="item"><a href="javascript:;"><div><i class="icon-paperplane"></i></div><span>旅行</span></a></li>
                            <li class="item"><a href="javascript:;"><div><i class="icon-bubble"></i></div><span>大家说</span></a></li>
                            <li class="item"><a href="javascript:;"><div><i class="icon-note"></i></div><span>新闻</span></a></li>
                            <li class="item"><a href="javascript:;"><div><i class="icon-camera"></i></div><span>拍照</span></a></li>
                            <li class="item"><a href="javascript:;"><div><i class="icon-study"></i></div><span>学习</span></a></li>
                            <li class="item"><a href="javascript:;"><div><i class="icon-heart"></i></div><span>喜欢</span></a></li>
                            <li class="item"><a href="javascript:;"><div><i class="icon-cloud"></i></div><span>云端</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Content-秒杀 -->
            <div class="content-sec-kill">
                <div class="content-sec-kill-hd">
                    <div class="content-sec-kill-hd-col-left">
                        <i class="content-sec-kill-hd-dec"></i>
                        <i class="content-sec-kill-hd-icon"></i>
                        <h3 class="content-sec-kill-hd-title">限时秒杀</h3>
                    </div>
                    <div class="content-sec-kill-hd-col-right"><a href="javascript:;" target="_blank" class="content-sec-kill-hd-more">总有你想不到的低价<i class="content-sec-kill-hd-more-arrow"></i></a></div>
                </div>
                <div class="content-sec-kill-body">
                    <div class="content-sec-kill-body-list-wrapper">
                        <ul>
                            <li class="item">
                                <div>
                                    <div class="content-sec-kill-body-list-wrapper-tag">
                                        <b></b>
                                        <span>测试商品</span>
                                    </div>
                                    <a href="<?= Url::to(["product/index","id" => 1]) ?>"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-06.jpg" alt="eBestMall 测试商品">
                                        <p>eBestMall 测试商品</p>
                                    </a>
                                    <span></span>
                                </div>
                                <p>
                                    <span class="content-sec-kill-body-list-wrapper-price-new"><i>¥</i><span>1288.88</span></span>
                                    <span class="content-sec-kill-body-list-wrapper-price-origin"><i>¥</i><del>1210.90</del></span>
                                </p>
                            </li>
                            <li class="item">
                                <div>
                                    <div class="content-sec-kill-body-list-wrapper-tag">
                                        <b></b>
                                        <span>测试商品</span>
                                    </div>
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-06.jpg" alt="eBestMall 测试商品">
                                        <p>eBestMall 测试商品</p>
                                    </a>
                                    <span></span>
                                </div>
                                <p>
                                    <span class="content-sec-kill-body-list-wrapper-price-new"><i>¥</i><span>1288.88</span></span>
                                    <span class="content-sec-kill-body-list-wrapper-price-origin"><i>¥</i><del>1210.90</del></span>
                                </p>
                            </li>
                            <li class="item">
                                <div>
                                    <div class="content-sec-kill-body-list-wrapper-tag">
                                        <b></b>
                                        <span>超值</span>
                                    </div>
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-06.jpg" alt="">
                                        <p>麦博（microlab） M200十周年纪念版 2.1多媒体音箱 音响</p>
                                    </a>
                                    <span></span>
                                </div>
                                <p>
                                    <span class="content-sec-kill-body-list-wrapper-price-new"><i>¥</i><span>159.00</span></span>
                                    <span class="content-sec-kill-body-list-wrapper-price-origin"><i>¥</i><del>359.00</del></span>
                                </p>
                            </li>
                            <li class="item">
                                <div>
                                    <div class="content-sec-kill-body-list-wrapper-tag">
                                        <b></b>
                                        <span>推荐</span>
                                    </div>
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-06.jpg" alt="">
                                        <p>麦博（microlab） M200十周年纪念版 2.1多媒体音箱 音响</p>
                                    </a>
                                    <span></span>
                                </div>
                                <p>
                                    <span class="content-sec-kill-body-list-wrapper-price-new"><i>¥</i><span>159.00</span></span>
                                    <span class="content-sec-kill-body-list-wrapper-price-origin"><i>¥</i><del>359.00</del></span>
                                </p>
                            </li>
                            <li class="item">
                                <div>
                                    <div class="content-sec-kill-body-list-wrapper-tag hide">
                                        <b></b>
                                        <span>推荐</span>
                                    </div>
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-06.jpg" alt="">
                                        <p>麦博（microlab） M200十周年纪念版 2.1多媒体音箱 音响</p>
                                    </a>
                                    <span></span>
                                </div>
                                <p>
                                    <span class="content-sec-kill-body-list-wrapper-price-new"><i>¥</i><span>159.00</span></span>
                                    <span class="content-sec-kill-body-list-wrapper-price-origin"><i>¥</i><del>359.00</del></span>
                                </p>
                            </li>
                            <li class="item">
                                <div>
                                    <div class="content-sec-kill-body-list-wrapper-tag hide">
                                        <b></b>
                                        <span>推荐</span>
                                    </div>
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-06.jpg" alt="">
                                        <p>麦博（microlab） M200十周年纪念版 2.1多媒体音箱 音响</p>
                                    </a>
                                    <span></span>
                                </div>
                                <p>
                                    <span class="content-sec-kill-body-list-wrapper-price-new"><i>¥</i><span>159.00</span></span>
                                    <span class="content-sec-kill-body-list-wrapper-price-origin"><i>¥</i><del>359.00</del></span>
                                </p>
                            </li>

                            <li class="item">
                                <div>
                                    <div class="content-sec-kill-body-list-wrapper-tag">
                                        <b></b>
                                        <span>值得买</span>
                                    </div>
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-06.jpg" alt="">
                                        <p>麦博（microlab） M200十周年纪念版 2.1多媒体音箱 音响</p>
                                    </a>
                                    <span></span>
                                </div>
                                <p>
                                    <span class="content-sec-kill-body-list-wrapper-price-new"><i>¥</i><span>159.00</span></span>
                                    <span class="content-sec-kill-body-list-wrapper-price-origin"><i>¥</i><del>359.00</del></span>
                                </p>
                            </li>
                            <li class="item">
                                <div>
                                    <div class="content-sec-kill-body-list-wrapper-tag">
                                        <b></b>
                                        <span>超值</span>
                                    </div>
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-06.jpg" alt="">
                                        <p>麦博（microlab） M200十周年纪念版 2.1多媒体音箱 音响</p>
                                    </a>
                                    <span></span>
                                </div>
                                <p>
                                    <span class="content-sec-kill-body-list-wrapper-price-new"><i>¥</i><span>159.00</span></span>
                                    <span class="content-sec-kill-body-list-wrapper-price-origin"><i>¥</i><del>359.00</del></span>
                                </p>
                            </li>
                            <li class="item">
                                <div>
                                    <div class="content-sec-kill-body-list-wrapper-tag">
                                        <b></b>
                                        <span>推荐</span>
                                    </div>
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-06.jpg" alt="">
                                        <p>麦博（microlab） M200十周年纪念版 2.1多媒体音箱 音响</p>
                                    </a>
                                    <span></span>
                                </div>
                                <p>
                                    <span class="content-sec-kill-body-list-wrapper-price-new"><i>¥</i><span>159.00</span></span>
                                    <span class="content-sec-kill-body-list-wrapper-price-origin"><i>¥</i><del>359.00</del></span>
                                </p>
                            </li>
                            <li class="item">
                                <div>
                                    <div class="content-sec-kill-body-list-wrapper-tag hide">
                                        <b></b>
                                        <span>推荐</span>
                                    </div>
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-06.jpg" alt="">
                                        <p>麦博（microlab） M200十周年纪念版 2.1多媒体音箱 音响</p>
                                    </a>
                                    <span></span>
                                </div>
                                <p>
                                    <span class="content-sec-kill-body-list-wrapper-price-new"><i>¥</i><span>159.00</span></span>
                                    <span class="content-sec-kill-body-list-wrapper-price-origin"><i>¥</i><del>359.00</del></span>
                                </p>
                            </li>
                            <li class="item">
                                <div>
                                    <div class="content-sec-kill-body-list-wrapper-tag hide">
                                        <b></b>
                                        <span>推荐</span>
                                    </div>
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-06.jpg" alt="">
                                        <p>麦博（microlab） M200十周年纪念版 2.1多媒体音箱 音响</p>
                                    </a>
                                    <span></span>
                                </div>
                                <p>
                                    <span class="content-sec-kill-body-list-wrapper-price-new"><i>¥</i><span>159.00</span></span>
                                    <span class="content-sec-kill-body-list-wrapper-price-origin"><i>¥</i><del>359.00</del></span>
                                </p>
                            </li>

                            <li class="item">
                                <div>
                                    <div class="content-sec-kill-body-list-wrapper-tag">
                                        <b></b>
                                        <span>值得买</span>
                                    </div>
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-06.jpg" alt="">
                                        <p>麦博（microlab） M200十周年纪念版 2.1多媒体音箱 音响</p>
                                    </a>
                                    <span></span>
                                </div>
                                <p>
                                    <span class="content-sec-kill-body-list-wrapper-price-new"><i>¥</i><span>159.00</span></span>
                                    <span class="content-sec-kill-body-list-wrapper-price-origin"><i>¥</i><del>359.00</del></span>
                                </p>
                            </li>
                            <li class="item">
                                <div>
                                    <div class="content-sec-kill-body-list-wrapper-tag">
                                        <b></b>
                                        <span>超值</span>
                                    </div>
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-06.jpg" alt="">
                                        <p>麦博（microlab） M200十周年纪念版 2.1多媒体音箱 音响</p>
                                    </a>
                                    <span></span>
                                </div>
                                <p>
                                    <span class="content-sec-kill-body-list-wrapper-price-new"><i>¥</i><span>159.00</span></span>
                                    <span class="content-sec-kill-body-list-wrapper-price-origin"><i>¥</i><del>359.00</del></span>
                                </p>
                            </li>
                            <li class="item">
                                <div>
                                    <div class="content-sec-kill-body-list-wrapper-tag">
                                        <b></b>
                                        <span>推荐</span>
                                    </div>
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-06.jpg" alt="">
                                        <p>麦博（microlab） M200十周年纪念版 2.1多媒体音箱 音响</p>
                                    </a>
                                    <span></span>
                                </div>
                                <p>
                                    <span class="content-sec-kill-body-list-wrapper-price-new"><i>¥</i><span>159.00</span></span>
                                    <span class="content-sec-kill-body-list-wrapper-price-origin"><i>¥</i><del>359.00</del></span>
                                </p>
                            </li>
                            <li class="item">
                                <div>
                                    <div class="content-sec-kill-body-list-wrapper-tag hide">
                                        <b></b>
                                        <span>推荐</span>
                                    </div>
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-06.jpg" alt="">
                                        <p>麦博（microlab） M200十周年纪念版 2.1多媒体音箱 音响</p>
                                    </a>
                                    <span></span>
                                </div>
                                <p>
                                    <span class="content-sec-kill-body-list-wrapper-price-new"><i>¥</i><span>159.00</span></span>
                                    <span class="content-sec-kill-body-list-wrapper-price-origin"><i>¥</i><del>359.00</del></span>
                                </p>
                            </li>
                            <li class="item">
                                <div>
                                    <div class="content-sec-kill-body-list-wrapper-tag hide">
                                        <b></b>
                                        <span>推荐</span>
                                    </div>
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-06.jpg" alt="">
                                        <p>麦博（microlab） M200十周年纪念版 2.1多媒体音箱 音响</p>
                                    </a>
                                    <span></span>
                                </div>
                                <p>
                                    <span class="content-sec-kill-body-list-wrapper-price-new"><i>¥</i><span>159.00</span></span>
                                    <span class="content-sec-kill-body-list-wrapper-price-origin"><i>¥</i><del>359.00</del></span>
                                </p>
                            </li>

                            <li class="item">
                                <div>
                                    <div class="content-sec-kill-body-list-wrapper-tag">
                                        <b></b>
                                        <span>值得买</span>
                                    </div>
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-06.jpg" alt="">
                                        <p>麦博（microlab） M200十周年纪念版 2.1多媒体音箱 音响</p>
                                    </a>
                                    <span></span>
                                </div>
                                <p>
                                    <span class="content-sec-kill-body-list-wrapper-price-new"><i>¥</i><span>159.00</span></span>
                                    <span class="content-sec-kill-body-list-wrapper-price-origin"><i>¥</i><del>359.00</del></span>
                                </p>
                            </li>
                            <li class="item">
                                <div>
                                    <div class="content-sec-kill-body-list-wrapper-tag">
                                        <b></b>
                                        <span>超值</span>
                                    </div>
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-06.jpg" alt="">
                                        <p>麦博（microlab） M200十周年纪念版 2.1多媒体音箱 音响</p>
                                    </a>
                                    <span></span>
                                </div>
                                <p>
                                    <span class="content-sec-kill-body-list-wrapper-price-new"><i>¥</i><span>159.00</span></span>
                                    <span class="content-sec-kill-body-list-wrapper-price-origin"><i>¥</i><del>359.00</del></span>
                                </p>
                            </li>
                            <li class="item">
                                <div>
                                    <div class="content-sec-kill-body-list-wrapper-tag">
                                        <b></b>
                                        <span>推荐</span>
                                    </div>
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-06.jpg" alt="">
                                        <p>麦博（microlab） M200十周年纪念版 2.1多媒体音箱 音响</p>
                                    </a>
                                    <span></span>
                                </div>
                                <p>
                                    <span class="content-sec-kill-body-list-wrapper-price-new"><i>¥</i><span>159.00</span></span>
                                    <span class="content-sec-kill-body-list-wrapper-price-origin"><i>¥</i><del>359.00</del></span>
                                </p>
                            </li>
                            <li class="item">
                                <div>
                                    <div class="content-sec-kill-body-list-wrapper-tag hide">
                                        <b></b>
                                        <span>推荐</span>
                                    </div>
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-06.jpg" alt="">
                                        <p>麦博（microlab） M200十周年纪念版 2.1多媒体音箱 音响</p>
                                    </a>
                                    <span></span>
                                </div>
                                <p>
                                    <span class="content-sec-kill-body-list-wrapper-price-new"><i>¥</i><span>159.00</span></span>
                                    <span class="content-sec-kill-body-list-wrapper-price-origin"><i>¥</i><del>359.00</del></span>
                                </p>
                            </li>
                            <li class="item">
                                <div>
                                    <div class="content-sec-kill-body-list-wrapper-tag hide">
                                        <b></b>
                                        <span>推荐</span>
                                    </div>
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-06.jpg" alt="">
                                        <p>麦博（microlab） M200十周年纪念版 2.1多媒体音箱 音响</p>
                                    </a>
                                    <span></span>
                                </div>
                                <p>
                                    <span class="content-sec-kill-body-list-wrapper-price-new"><i>¥</i><span>159.00</span></span>
                                    <span class="content-sec-kill-body-list-wrapper-price-origin"><i>¥</i><del>359.00</del></span>
                                </p>
                            </li>

                            <li class="item">
                                <div>
                                    <div class="content-sec-kill-body-list-wrapper-tag">
                                        <b></b>
                                        <span>值得买</span>
                                    </div>
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-06.jpg" alt="">
                                        <p>麦博（microlab） M200十周年纪念版 2.1多媒体音箱 音响</p>
                                    </a>
                                    <span></span>
                                </div>
                                <p>
                                    <span class="content-sec-kill-body-list-wrapper-price-new"><i>¥</i><span>159.00</span></span>
                                    <span class="content-sec-kill-body-list-wrapper-price-origin"><i>¥</i><del>359.00</del></span>
                                </p>
                            </li>
                            <li class="item">
                                <div>
                                    <div class="content-sec-kill-body-list-wrapper-tag">
                                        <b></b>
                                        <span>超值</span>
                                    </div>
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-06.jpg" alt="">
                                        <p>麦博（microlab） M200十周年纪念版 2.1多媒体音箱 音响</p>
                                    </a>
                                    <span></span>
                                </div>
                                <p>
                                    <span class="content-sec-kill-body-list-wrapper-price-new"><i>¥</i><span>159.00</span></span>
                                    <span class="content-sec-kill-body-list-wrapper-price-origin"><i>¥</i><del>359.00</del></span>
                                </p>
                            </li>
                            <li class="item">
                                <div>
                                    <div class="content-sec-kill-body-list-wrapper-tag">
                                        <b></b>
                                        <span>推荐</span>
                                    </div>
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-06.jpg" alt="">
                                        <p>麦博（microlab） M200十周年纪念版 2.1多媒体音箱 音响</p>
                                    </a>
                                    <span></span>
                                </div>
                                <p>
                                    <span class="content-sec-kill-body-list-wrapper-price-new"><i>¥</i><span>159.00</span></span>
                                    <span class="content-sec-kill-body-list-wrapper-price-origin"><i>¥</i><del>359.00</del></span>
                                </p>
                            </li>
                            <li class="item">
                                <div>
                                    <div class="content-sec-kill-body-list-wrapper-tag hide">
                                        <b></b>
                                        <span>推荐</span>
                                    </div>
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-06.jpg" alt="">
                                        <p>麦博（microlab） M200十周年纪念版 2.1多媒体音箱 音响</p>
                                    </a>
                                    <span></span>
                                </div>
                                <p>
                                    <span class="content-sec-kill-body-list-wrapper-price-new"><i>¥</i><span>159.00</span></span>
                                    <span class="content-sec-kill-body-list-wrapper-price-origin"><i>¥</i><del>359.00</del></span>
                                </p>
                            </li>
                            <li class="item">
                                <div>
                                    <div class="content-sec-kill-body-list-wrapper-tag hide">
                                        <b></b>
                                        <span>推荐</span>
                                    </div>
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-06.jpg" alt="">
                                        <p>麦博（microlab） M200十周年纪念版 2.1多媒体音箱 音响</p>
                                    </a>
                                    <span></span>
                                </div>
                                <p>
                                    <span class="content-sec-kill-body-list-wrapper-price-new"><i>¥</i><span>159.00</span></span>
                                    <span class="content-sec-kill-body-list-wrapper-price-origin"><i>¥</i><del>359.00</del></span>
                                </p>
                            </li>
                        </ul>
                        <div class="content-sec-kill-body-list-wrapper-navigate">
                            <a class="content-sec-kill-body-list-wrapper-navigate-prev" href="javascript:;"><i class="icon-navigate_before"></i></a>
                            <a class="content-sec-kill-body-list-wrapper-navigate-next" href="javascript:;"><i class="icon-navigate_next"></i></a>
                        </div>
                    </div>
                    <a class="content-sec-kill-body-special" href="javascript:;">
                        <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-05.jpg" alt="">
                    </a>
                </div>
            </div>

            <!-- Content-领券 -->
            <div class="content-coupons">
                <div class="content-coupons-head">
                    <a href="javascript:;">
                        <h3>领券中心</h3>
                        <span class="content-coupons-head-transverse"></span>
                        <p>没抢到？</p>
                        <p>可以去看看更多优惠券</p>
                        <span class="content-coupons-head-btn">前往领券中心<i></i></span>
                    </a>
                </div>
                <div class="content-coupons-body">
                    <ul>
                        <li>
                            <a href="javascript:;" title="仅可购买进口食品部分商品">
                                <div>
                                    <p class="content-coupons-body-mod-price content-coupons-body-coupon-price"><i>¥</i>100</p>
                                    <p class="content-coupons-body-coupon-desc">
                                        <i class="content-coupons-body-mod-ver"></i>
                                        <span class="content-coupons-bodycoupon-desc-txt">仅可购买进口食品部分商品</span>
                                    </p>
                                    <p class="content-coupons-body-coupon-limit">
                                        <i class="content-coupons-body-mod-ver"></i>
                                        <span class="content-coupons-body-coupon-limit-txt">消费满188元可用</span>
                                    </p>
                                    <p class="content-coupons-body-coupon-more">更多好券</p>
                                </div>
                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-09.jpg" alt="仅可购买进口食品部分商品">
                            </a>
                            <span class="content-coupons-body-coupon-item-shadow"></span>
                        </li>
                        <li>
                            <a href="javascript:;" title="仅可购买自营男包、腰带部分商品">
                                <div>
                                    <p class="content-coupons-body-mod-price content-coupons-body-coupon-price"><i>¥</i>100</p>
                                    <p class="content-coupons-body-coupon-desc">
                                        <i class="content-coupons-body-mod-ver"></i>
                                        <span class="content-coupons-bodycoupon-desc-txt">仅可购买自营男包、腰带部分商品</span>
                                    </p>
                                    <p class="content-coupons-body-coupon-limit">
                                        <i class="content-coupons-body-mod-ver"></i>
                                        <span class="content-coupons-body-coupon-limit-txt">消费满188元可用</span>
                                    </p>
                                    <p class="content-coupons-body-coupon-more">更多好券</p>
                                </div>
                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-09.jpg" alt="仅可购买自营男包、腰带部分商品">
                            </a>
                            <span class="content-coupons-body-coupon-item-shadow"></span>
                        </li>
                        <li>
                            <a href="javascript:;" title="仅可购买合生元自营指定商品">
                                <div>
                                    <p class="content-coupons-body-mod-price content-coupons-body-coupon-price"><i>¥</i>100</p>
                                    <p class="content-coupons-body-coupon-desc">
                                        <i class="content-coupons-body-mod-ver"></i>
                                        <span class="content-coupons-bodycoupon-desc-txt">仅可购买合生元自营指定商品</span>
                                    </p>
                                    <p class="content-coupons-body-coupon-limit">
                                        <i class="content-coupons-body-mod-ver"></i>
                                        <span class="content-coupons-body-coupon-limit-txt">消费满188元可用</span>
                                    </p>
                                    <p class="content-coupons-body-coupon-more">更多好券</p>
                                </div>
                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-09.jpg" alt="仅可购买合生元自营指定商品">
                            </a>
                            <span class="content-coupons-body-coupon-item-shadow"></span>
                        </li>
                        <li>
                            <a href="javascript:;" title="仅可购买中兴天机7系列部分商品商品">
                                <div>
                                    <p class="content-coupons-body-mod-price content-coupons-body-coupon-price"><i>¥</i>100</p>
                                    <p class="content-coupons-body-coupon-desc">
                                        <i class="content-coupons-body-mod-ver"></i>
                                        <span class="content-coupons-bodycoupon-desc-txt">仅可购买中兴天机7系列部分商品商品</span>
                                    </p>
                                    <p class="content-coupons-body-coupon-limit">
                                        <i class="content-coupons-body-mod-ver"></i>
                                        <span class="content-coupons-body-coupon-limit-txt">消费满188元可用</span>
                                    </p>
                                    <p class="content-coupons-body-coupon-more">更多好券</p>
                                </div>
                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-09.jpg" alt="仅可购买中兴天机7系列部分商品商品">
                            </a>
                            <span class="content-coupons-body-coupon-item-shadow"></span>
                        </li>
                        <li>
                            <a href="javascript:;" title="仅可购买进口食品部分商品">
                                <div>
                                    <p class="content-coupons-body-mod-price content-coupons-body-coupon-price"><i>¥</i>100</p>
                                    <p class="content-coupons-body-coupon-desc">
                                        <i class="content-coupons-body-mod-ver"></i>
                                        <span class="content-coupons-bodycoupon-desc-txt">仅可购买进口食品部分商品</span>
                                    </p>
                                    <p class="content-coupons-body-coupon-limit">
                                        <i class="content-coupons-body-mod-ver"></i>
                                        <span class="content-coupons-body-coupon-limit-txt">消费满188元可用</span>
                                    </p>
                                    <p class="content-coupons-body-coupon-more">更多好券</p>
                                </div>
                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-09.jpg" alt="仅可购买进口食品部分商品">
                            </a>
                            <span class="content-coupons-body-coupon-item-shadow"></span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- 发现 品牌 排行榜 -->
            <div class="content-find-brand-hot">
                <div>
                    <div class="content-find-head content-find-brand-hot-head">
                        <i class="content-find-brand-hot-head-arrow"></i>
                        <i class="content-find-head-dec content-find-brand-hot-head-dec"></i>
                        <h3 class="content-find-brand-hot-head-title">发现好货</h3>
                        <a href="javascript:;">发现品质生活<i></i></a>
                    </div>
                    <div class="content-find-brand-hot-body">
                        <ul>
                            <li class="content-find-brand-hot-body-nth-child-1">
                                <a href="javascript:;">
                                    <p>无线音乐系统音箱</p>
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-13.jpg" alt="Bose SoundTouch 30 III 无线音乐系统音箱，多重兼容适合所有智能手机、平板笔记本等设备，小巧的机箱结构为您节省居室空间，音色效果强劲浑厚。" title="Bose SoundTouch 30 III 无线音乐系统音箱，多重兼容适合所有智能手机、平板笔记本等设备，小巧的机箱结构为您节省居室空间，音色效果强劲浑厚。">
                                </a>
                            </li>
                            <li class="content-find-brand-hot-body-nth-child-2">
                                <a href="javascript:;">
                                    <p>海尔 迷你台式电脑主机</p>
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-14.jpg" alt="海尔 迷你台式电脑主机" title="海尔 迷你台式电脑主机">
                                </a>
                            </li>
                            <li class="content-find-brand-hot-body-nth-child-3">
                                <a href="javascript:;">
                                    <p>罗技多设备蓝牙键盘</p>
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-15.jpg" alt="罗技多设备蓝牙键盘" title="罗技多设备蓝牙键盘">
                                </a>
                            </li>
                            <li class="content-find-brand-hot-body-nth-child-4">
                                <a href="javascript:;">
                                    <p>Beats入耳式耳机</p>
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-16.jpg" alt="Beats入耳式耳机" title="Beats入耳式耳机">
                                </a>
                            </li>
                            <li class="content-find-brand-hot-body-nth-child-5">
                                <a href="javascript:;">
                                    <p>外星人水冷游戏主机</p>
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-17.jpg" alt="外星人水冷游戏主机" title="外星人水冷游戏主机">
                                </a>
                            </li>
                            <li class="content-find-brand-hot-body-nth-child-6">
                                <a href="javascript:;">
                                    <p>ikbc c104 樱桃轴机械键盘</p>
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-18.jpg" alt="ikbc c104 樱桃轴机械键盘" title="ikbc c104 樱桃轴机械键盘">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="content-find-brand-hot-two">
                    <div class="content-brand-head content-find-brand-hot-head">
                        <i class="content-find-brand-hot-head-arrow"></i>
                        <i class="content-brand-head-dec content-find-brand-hot-head-dec"></i>
                        <h3 class="content-find-brand-hot-head-title">品牌头条</h3>
                        <a href="javascript:;">大牌资讯全掌握<i></i></a>
                    </div>
                    <div class="content-find-brand-hot-body">
                        <div class="content-find-brand-hot-body-up">
                            <div>
                                <a href="javascript:;">
                                    <p class="content-find-brand-hot-body-up-name">李宁盛典</p>
                                    <p class="content-find-brand-hot-body-up-desc">爆款直降 满259减20</p>
                                    <div class="content-find-brand-hot-body-up-split"></div>
                                    <div class="content-find-brand-hot-body-up-img">
                                        <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-10.jpg" alt="李宁盛典" title="李宁盛典">
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="javascript:;">
                                    <p class="content-find-brand-hot-body-up-name">大牌试用</p>
                                    <p class="content-find-brand-hot-body-up-desc">钛度电竞者智能版游戏鼠标</p>
                                    <div class="content-find-brand-hot-body-up-split"></div>
                                    <div class="content-find-brand-hot-body-up-img">
                                        <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-11.jpg" alt="大牌试用" title="大牌试用">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="content-find-brand-hot-body-dn">
                            <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-12.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="content-hot-head content-find-brand-hot-head">
                        <i class="content-find-brand-hot-head-arrow"></i>
                        <i class="content-hot-head-dec content-find-brand-hot-head-dec"></i>
                        <h3 class="content-find-brand-hot-head-title">排行榜</h3>
                        <a href="javascript:;">热卖爆款集结<i></i></a>
                    </div>
                    <div class="content-find-brand-hot-body">
                        <div class="content-hot-content-title">
                            <ul>
                                <li><a class="active" href="javascript:;">手机</a></li>
                                <li><a href="javascript:;">笔记本</a></li>
                                <li><a href="javascript:;">液晶电视</a></li>
                                <li><a href="javascript:;">白酒</a></li>
                                <li><a href="javascript:;">电脑配件</a></li>
                            </ul>
                        </div>
                        <div class="content-hot-content-body">
                            <ul>
                                <li class="item item-1">
                                    <a class="active" href="javascript:;" title="Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机">
                                        <div class="content-hot-content-body-rank">1</div>
                                        <div class="content-hot-content-body-info"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_002.jpg" alt="Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机"></div>
                                        <p class="content-hot-content-body-name">Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机</p>
                                    </a>
                                </li>
                                <li class="item item-2">
                                    <a class="active" href="javascript:;" title="Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机">
                                        <div class="content-hot-content-body-rank">2</div>
                                        <div class="content-hot-content-body-info"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_002.jpg" alt="Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机"></div>
                                        <p class="content-hot-content-body-name">Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机</p>
                                    </a>
                                </li>
                                <li class="item item-3">
                                    <a class="active" href="javascript:;" title="Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机">
                                        <div class="content-hot-content-body-rank">3</div>
                                        <div class="content-hot-content-body-info"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_002.jpg" alt="Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机"></div>
                                        <p class="content-hot-content-body-name">Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机</p>
                                    </a>
                                </li>
                                <li class="item item-4">
                                    <a class="active" href="javascript:;" title="Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机">
                                        <div class="content-hot-content-body-rank">4</div>
                                        <div class="content-hot-content-body-info"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_002.jpg" alt="Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机"></div>
                                        <p class="content-hot-content-body-name">Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机</p>
                                    </a>
                                </li>
                                <li class="item item-5">
                                    <a class="active" href="javascript:;" title="Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机">
                                        <div class="content-hot-content-body-rank">5</div>
                                        <div class="content-hot-content-body-info"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_002.jpg" alt="Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机"></div>
                                        <p class="content-hot-content-body-name">Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机</p>
                                    </a>
                                </li>
                                <li class="item item-6">
                                    <a class="active" href="javascript:;" title="Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机">
                                        <div class="content-hot-content-body-rank">6</div>
                                        <div class="content-hot-content-body-info"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_002.jpg" alt="Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机"></div>
                                        <p class="content-hot-content-body-name">Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机</p>
                                    </a>
                                </li>
                            </ul>
                            <ul>
                                <li class="item item-1">
                                    <a class="active" href="javascript:;" title="联想(Lenovo)小新Air13 Pro13.3英寸 14.8mm超轻薄笔记本电脑（i5 4G 256G PCIE SSD 940MX 2G FHD IPS）金">
                                        <div class="content-hot-content-body-rank">1</div>
                                        <div class="content-hot-content-body-info"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_002.jpg" alt="联想(Lenovo)小新Air13 Pro13.3英寸 14.8mm超轻薄笔记本电脑（i5 4G 256G PCIE SSD 940MX 2G FHD IPS）金"></div>
                                        <p class="content-hot-content-body-name">联想(Lenovo)小新Air13 Pro13.3英寸 14.8mm超轻薄笔记本电脑（i5 4G 256G PCIE SSD 940MX 2G FHD IPS）金</p>
                                    </a>
                                </li>
                                <li class="item item-2">
                                    <a class="active" href="javascript:;" title="联想(Lenovo)小新Air13 Pro13.3英寸 14.8mm超轻薄笔记本电脑（i5 4G 256G PCIE SSD 940MX 2G FHD IPS）金">
                                        <div class="content-hot-content-body-rank">2</div>
                                        <div class="content-hot-content-body-info"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_002.jpg" alt="联想(Lenovo)小新Air13 Pro13.3英寸 14.8mm超轻薄笔记本电脑（i5 4G 256G PCIE SSD 940MX 2G FHD IPS）金"></div>
                                        <p class="content-hot-content-body-name">联想(Lenovo)小新Air13 Pro13.3英寸 14.8mm超轻薄笔记本电脑（i5 4G 256G PCIE SSD 940MX 2G FHD IPS）金</p>
                                    </a>
                                </li>
                                <li class="item item-3">
                                    <a class="active" href="javascript:;" title="联想(Lenovo)小新Air13 Pro13.3英寸 14.8mm超轻薄笔记本电脑（i5 4G 256G PCIE SSD 940MX 2G FHD IPS）金">
                                        <div class="content-hot-content-body-rank">3</div>
                                        <div class="content-hot-content-body-info"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_002.jpg" alt="联想(Lenovo)小新Air13 Pro13.3英寸 14.8mm超轻薄笔记本电脑（i5 4G 256G PCIE SSD 940MX 2G FHD IPS）金"></div>
                                        <p class="content-hot-content-body-name">联想(Lenovo)小新Air13 Pro13.3英寸 14.8mm超轻薄笔记本电脑（i5 4G 256G PCIE SSD 940MX 2G FHD IPS）金</p>
                                    </a>
                                </li>
                                <li class="item item-4">
                                    <a class="active" href="javascript:;" title="联想(Lenovo)小新Air13 Pro13.3英寸 14.8mm超轻薄笔记本电脑（i5 4G 256G PCIE SSD 940MX 2G FHD IPS）金">
                                        <div class="content-hot-content-body-rank">4</div>
                                        <div class="content-hot-content-body-info"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_002.jpg" alt="联想(Lenovo)小新Air13 Pro13.3英寸 14.8mm超轻薄笔记本电脑（i5 4G 256G PCIE SSD 940MX 2G FHD IPS）金"></div>
                                        <p class="content-hot-content-body-name">联想(Lenovo)小新Air13 Pro13.3英寸 14.8mm超轻薄笔记本电脑（i5 4G 256G PCIE SSD 940MX 2G FHD IPS）金</p>
                                    </a>
                                </li>
                                <li class="item item-5">
                                    <a class="active" href="javascript:;" title="联想(Lenovo)小新Air13 Pro13.3英寸 14.8mm超轻薄笔记本电脑（i5 4G 256G PCIE SSD 940MX 2G FHD IPS）金">
                                        <div class="content-hot-content-body-rank">5</div>
                                        <div class="content-hot-content-body-info"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_002.jpg" alt="联想(Lenovo)小新Air13 Pro13.3英寸 14.8mm超轻薄笔记本电脑（i5 4G 256G PCIE SSD 940MX 2G FHD IPS）金"></div>
                                        <p class="content-hot-content-body-name">联想(Lenovo)小新Air13 Pro13.3英寸 14.8mm超轻薄笔记本电脑（i5 4G 256G PCIE SSD 940MX 2G FHD IPS）金</p>
                                    </a>
                                </li>
                                <li class="item item-6">
                                    <a class="active" href="javascript:;" title="联想(Lenovo)小新Air13 Pro13.3英寸 14.8mm超轻薄笔记本电脑（i5 4G 256G PCIE SSD 940MX 2G FHD IPS）金">
                                        <div class="content-hot-content-body-rank">6</div>
                                        <div class="content-hot-content-body-info"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_002.jpg" alt="联想(Lenovo)小新Air13 Pro13.3英寸 14.8mm超轻薄笔记本电脑（i5 4G 256G PCIE SSD 940MX 2G FHD IPS）金"></div>
                                        <p class="content-hot-content-body-name">联想(Lenovo)小新Air13 Pro13.3英寸 14.8mm超轻薄笔记本电脑（i5 4G 256G PCIE SSD 940MX 2G FHD IPS）金</p>
                                    </a>
                                </li>
                            </ul>
                            <ul>
                                <li class="item item-1">
                                    <a class="active" href="javascript:;" title="Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机">
                                        <div class="content-hot-content-body-rank">1</div>
                                        <div class="content-hot-content-body-info"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_002.jpg" alt="Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机"></div>
                                        <p class="content-hot-content-body-name">Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机</p>
                                    </a>
                                </li>
                                <li class="item item-2">
                                    <a class="active" href="javascript:;" title="Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机">
                                        <div class="content-hot-content-body-rank">2</div>
                                        <div class="content-hot-content-body-info"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_002.jpg" alt="Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机"></div>
                                        <p class="content-hot-content-body-name">Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机</p>
                                    </a>
                                </li>
                                <li class="item item-3">
                                    <a class="active" href="javascript:;" title="Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机">
                                        <div class="content-hot-content-body-rank">3</div>
                                        <div class="content-hot-content-body-info"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_002.jpg" alt="Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机"></div>
                                        <p class="content-hot-content-body-name">Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机</p>
                                    </a>
                                </li>
                                <li class="item item-4">
                                    <a class="active" href="javascript:;" title="Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机">
                                        <div class="content-hot-content-body-rank">4</div>
                                        <div class="content-hot-content-body-info"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_002.jpg" alt="Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机"></div>
                                        <p class="content-hot-content-body-name">Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机</p>
                                    </a>
                                </li>
                                <li class="item item-5">
                                    <a class="active" href="javascript:;" title="Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机">
                                        <div class="content-hot-content-body-rank">5</div>
                                        <div class="content-hot-content-body-info"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_002.jpg" alt="Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机"></div>
                                        <p class="content-hot-content-body-name">Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机</p>
                                    </a>
                                </li>
                                <li class="item item-6">
                                    <a class="active" href="javascript:;" title="Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机">
                                        <div class="content-hot-content-body-rank">6</div>
                                        <div class="content-hot-content-body-info"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_002.jpg" alt="Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机"></div>
                                        <p class="content-hot-content-body-name">Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机</p>
                                    </a>
                                </li>
                            </ul>
                            <ul>
                                <li class="item item-1">
                                    <a class="active" href="javascript:;" title="联想(Lenovo)小新Air13 Pro13.3英寸 14.8mm超轻薄笔记本电脑（i5 4G 256G PCIE SSD 940MX 2G FHD IPS）金">
                                        <div class="content-hot-content-body-rank">1</div>
                                        <div class="content-hot-content-body-info"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_002.jpg" alt="联想(Lenovo)小新Air13 Pro13.3英寸 14.8mm超轻薄笔记本电脑（i5 4G 256G PCIE SSD 940MX 2G FHD IPS）金"></div>
                                        <p class="content-hot-content-body-name">联想(Lenovo)小新Air13 Pro13.3英寸 14.8mm超轻薄笔记本电脑（i5 4G 256G PCIE SSD 940MX 2G FHD IPS）金</p>
                                    </a>
                                </li>
                                <li class="item item-2">
                                    <a class="active" href="javascript:;" title="联想(Lenovo)小新Air13 Pro13.3英寸 14.8mm超轻薄笔记本电脑（i5 4G 256G PCIE SSD 940MX 2G FHD IPS）金">
                                        <div class="content-hot-content-body-rank">2</div>
                                        <div class="content-hot-content-body-info"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_002.jpg" alt="联想(Lenovo)小新Air13 Pro13.3英寸 14.8mm超轻薄笔记本电脑（i5 4G 256G PCIE SSD 940MX 2G FHD IPS）金"></div>
                                        <p class="content-hot-content-body-name">联想(Lenovo)小新Air13 Pro13.3英寸 14.8mm超轻薄笔记本电脑（i5 4G 256G PCIE SSD 940MX 2G FHD IPS）金</p>
                                    </a>
                                </li>
                                <li class="item item-3">
                                    <a class="active" href="javascript:;" title="联想(Lenovo)小新Air13 Pro13.3英寸 14.8mm超轻薄笔记本电脑（i5 4G 256G PCIE SSD 940MX 2G FHD IPS）金">
                                        <div class="content-hot-content-body-rank">3</div>
                                        <div class="content-hot-content-body-info"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_002.jpg" alt="联想(Lenovo)小新Air13 Pro13.3英寸 14.8mm超轻薄笔记本电脑（i5 4G 256G PCIE SSD 940MX 2G FHD IPS）金"></div>
                                        <p class="content-hot-content-body-name">联想(Lenovo)小新Air13 Pro13.3英寸 14.8mm超轻薄笔记本电脑（i5 4G 256G PCIE SSD 940MX 2G FHD IPS）金</p>
                                    </a>
                                </li>
                                <li class="item item-4">
                                    <a class="active" href="javascript:;" title="联想(Lenovo)小新Air13 Pro13.3英寸 14.8mm超轻薄笔记本电脑（i5 4G 256G PCIE SSD 940MX 2G FHD IPS）金">
                                        <div class="content-hot-content-body-rank">4</div>
                                        <div class="content-hot-content-body-info"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_002.jpg" alt="联想(Lenovo)小新Air13 Pro13.3英寸 14.8mm超轻薄笔记本电脑（i5 4G 256G PCIE SSD 940MX 2G FHD IPS）金"></div>
                                        <p class="content-hot-content-body-name">联想(Lenovo)小新Air13 Pro13.3英寸 14.8mm超轻薄笔记本电脑（i5 4G 256G PCIE SSD 940MX 2G FHD IPS）金</p>
                                    </a>
                                </li>
                                <li class="item item-5">
                                    <a class="active" href="javascript:;" title="联想(Lenovo)小新Air13 Pro13.3英寸 14.8mm超轻薄笔记本电脑（i5 4G 256G PCIE SSD 940MX 2G FHD IPS）金">
                                        <div class="content-hot-content-body-rank">5</div>
                                        <div class="content-hot-content-body-info"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_002.jpg" alt="联想(Lenovo)小新Air13 Pro13.3英寸 14.8mm超轻薄笔记本电脑（i5 4G 256G PCIE SSD 940MX 2G FHD IPS）金"></div>
                                        <p class="content-hot-content-body-name">联想(Lenovo)小新Air13 Pro13.3英寸 14.8mm超轻薄笔记本电脑（i5 4G 256G PCIE SSD 940MX 2G FHD IPS）金</p>
                                    </a>
                                </li>
                                <li class="item item-6">
                                    <a class="active" href="javascript:;" title="联想(Lenovo)小新Air13 Pro13.3英寸 14.8mm超轻薄笔记本电脑（i5 4G 256G PCIE SSD 940MX 2G FHD IPS）金">
                                        <div class="content-hot-content-body-rank">6</div>
                                        <div class="content-hot-content-body-info"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_002.jpg" alt="联想(Lenovo)小新Air13 Pro13.3英寸 14.8mm超轻薄笔记本电脑（i5 4G 256G PCIE SSD 940MX 2G FHD IPS）金"></div>
                                        <p class="content-hot-content-body-name">联想(Lenovo)小新Air13 Pro13.3英寸 14.8mm超轻薄笔记本电脑（i5 4G 256G PCIE SSD 940MX 2G FHD IPS）金</p>
                                    </a>
                                </li>
                            </ul>
                            <ul>
                                <li class="item item-1">
                                    <a class="active" href="javascript:;" title="Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机">
                                        <div class="content-hot-content-body-rank">1</div>
                                        <div class="content-hot-content-body-info"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_002.jpg" alt="Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机"></div>
                                        <p class="content-hot-content-body-name">Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机</p>
                                    </a>
                                </li>
                                <li class="item item-2">
                                    <a class="active" href="javascript:;" title="Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机">
                                        <div class="content-hot-content-body-rank">2</div>
                                        <div class="content-hot-content-body-info"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_002.jpg" alt="Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机"></div>
                                        <p class="content-hot-content-body-name">Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机</p>
                                    </a>
                                </li>
                                <li class="item item-3">
                                    <a class="active" href="javascript:;" title="Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机">
                                        <div class="content-hot-content-body-rank">3</div>
                                        <div class="content-hot-content-body-info"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_002.jpg" alt="Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机"></div>
                                        <p class="content-hot-content-body-name">Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机</p>
                                    </a>
                                </li>
                                <li class="item item-4">
                                    <a class="active" href="javascript:;" title="Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机">
                                        <div class="content-hot-content-body-rank">4</div>
                                        <div class="content-hot-content-body-info"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_002.jpg" alt="Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机"></div>
                                        <p class="content-hot-content-body-name">Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机</p>
                                    </a>
                                </li>
                                <li class="item item-5">
                                    <a class="active" href="javascript:;" title="Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机">
                                        <div class="content-hot-content-body-rank">5</div>
                                        <div class="content-hot-content-body-info"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_002.jpg" alt="Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机"></div>
                                        <p class="content-hot-content-body-name">Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机</p>
                                    </a>
                                </li>
                                <li class="item item-6">
                                    <a class="active" href="javascript:;" title="Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机">
                                        <div class="content-hot-content-body-rank">6</div>
                                        <div class="content-hot-content-body-info"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_002.jpg" alt="Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机"></div>
                                        <p class="content-hot-content-body-name">Apple iPhone 7 Plus (A1661) 32G 黑色 移动联通电信4G手机</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 首页-横幅-01 -->
            <div class="content-grid">
                <ul>
                    <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-19.jpg" alt=""></a></li>
                    <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-20.jpg" alt=""></a></li>
                    <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-21.jpg" alt=""></a></li>
                </ul>
            </div>

            <!-- 首页-专题 -->
            <div class="content-special">
                <div class="content-special-head content-index-block-head-title"><h3>享品质</h3></div>
                <div class="content-special-body">
                    <ul>
                        <li class="content-special-body-nth-child-1">
                            <a href="javascript:;">
                                <div style="background:#d58717">
                                    <div>
                                        <h4>厂家直供</h4>
                                        <p>天天促销打折 款款实惠“尽情购”</p>
                                    </div>
                                </div>
                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-22.jpg" >
                            </a>
                        </li>
                        <li class="content-special-body-nth-child-2">
                            <a href="javascript:;">
                                <div style="background:#3b838c">
                                    <div>
                                        <h4>智能生活</h4>
                                        <p>引领智能新风尚</p>
                                    </div>
                                </div>
                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-23.jpg" >
                            </a>
                        </li>
                        <li class="content-special-body-nth-child-3">
                            <a href="javascript:;">
                                <div style="background:#534b5d">
                                    <div>
                                        <h4>奢侈大牌</h4>
                                        <p>尽享品质生活</p>
                                    </div>
                                </div>
                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-24.jpg" >
                            </a>
                        </li>
                        <li class="content-special-body-nth-child-4">
                            <a href="javascript:;">
                                <div style="background:#a93931">
                                    <div>
                                        <h4>设计师推荐</h4>
                                        <p>体验全球好设计</p>
                                    </div>
                                </div>
                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-25.jpg" >
                            </a>
                        </li>
                        <li class="content-special-body-nth-child-5">
                            <a href="javascript:;">
                                <div style="background:#642663">
                                    <div>
                                        <h4>全球尖货</h4>
                                        <p>海外自营好货特惠购</p>
                                    </div>
                                </div>
                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-26.jpg" >
                            </a>
                        </li>
                        <li class="content-special-body-nth-child-6">
                            <a href="javascript:;">
                                <div style="background:#7e5944">
                                    <div>
                                        <h4>白条商城</h4>
                                        <p>上新季，最高12期免息</p>
                                    </div>
                                </div>
                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-27.jpg" >
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- 首页-横幅-02 -->
            <div class="content-grid">
                <ul>
                    <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-19.jpg" alt=""></a></li>
                    <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-20.jpg" alt=""></a></li>
                    <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-21.jpg" alt=""></a></li>
                </ul>
            </div>

            <!-- Content-楼层 -->
            <div class="content-storey-bar">

                <!-- 首页-楼层标题 -->
                <div class="content-index-block-head-title"><h3>爱生活</h3></div>

                <!-- 楼层导航条 -->
                <div class="content-storey-nav-bar">
                    <div class="content-storey-nav">
                        <ul>
                            <li class="item"><a href="javascript:;"><span>1F</span></a></li>
                            <li class="item"><a href="javascript:;"><span>2F</span></a></li>
                            <li class="item"><a href="javascript:;"><span>3F</span></a></li>
                            <li class="item"><a href="javascript:;"><span>4F</span></a></li>
                            <li class="item"><a href="javascript:;"><span>5F</span></a></li>
                            <li class="item"><a href="javascript:;"><span>6F</span></a></li>
                            <li class="item"><a href="javascript:;"><span>7F</span></a></li>
                            <li class="item"><a href="javascript:;"><span>8F</span></a></li>
                            <li class="item"><a href="javascript:;"><span>9F</span></a></li>
                            <li class="item"><a href="javascript:;"><span>10F</span></a></li>
                            <li class="item"><a href="javascript:;"><span>更多</span></a></li>
                            <li class="returnTop"><a href="javascript:;" title="返回顶部"><span class="icon-jump-up"></span></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Content-楼层-01 -->
                <div class="storey-one content-storey">
                    <div class="content-storey-left">
                        <div class="content-storey-head">
                            <h3>爱逛</h3>
                            <div>
                                <a href="javascript:;">杰克琼斯</a>
                                <a href="javascript:;">高跟鞋</a>
                                <a href="javascript:;">欧米茄</a>
                                <a href="javascript:;">珠宝</a>
                                <a href="javascript:;">奢侈品</a>
                                <a href="javascript:;">春季换新装</a>
                            </div>
                        </div>
                        <div class="content-storey-body">
                            <div class="content-storey-body-cover">
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-29.jpg" alt=""></a>
                            </div>
                            <div class="content-storey-body-list">
                                <span class="content-storey-body-list-bar"></span>
                                <span class="content-storey-body-list-line"></span>
                                <ul>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">好“色”先生</p>
                                            <p class="content-storey-body-list-p-title-promo">春装尚新9折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-32.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">女装春尚新</p>
                                            <p class="content-storey-body-list-p-title-promo">新品7折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-34.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">换季清仓</p>
                                            <p class="content-storey-body-list-p-title-promo">2件5折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-33.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">扮美我自己</p>
                                            <p class="content-storey-body-list-p-title-promo">春季新品7折上新</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-30.jpg" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="content-storey-body-more">
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-31.jpg" alt=""></a>
                                <a class="content-storey-body-more-item" href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-36.jpg" alt=""></a>
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-35.jpg" alt=""></a>
                            </div>
                            <div class="content-storey-body-brand">
                                <div class="tab storey-tab-one-left">
                                    <ul class="tab-body">
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-38.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-39.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                    </ul>

                                    <div class="tab-btn">
                                        <a class="prev" href="javascript:;"><i class="icon-navigate_before"></i></a>
                                        <a class="next" href="javascript:;"><i class="icon-navigate_next"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-storey-right">
                        <div class="content-storey-head">
                            <h3>爱美丽</h3>
                            <div>
                                <a href="javascript:;">套装</a>
                                <a href="javascript:;">SK-II</a>
                                <a href="javascript:;">口红</a>
                                <a href="javascript:;">香水</a>
                                <a href="javascript:;">巅峰NBA</a>
                                <a href="javascript:;">洗护大牌</a>
                            </div>
                        </div>
                        <div class="content-storey-body">
                            <div class="content-storey-body-cover">
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-29.jpg" alt=""></a>
                            </div>
                            <div class="content-storey-body-list">
                                <span class="content-storey-body-list-bar"></span>
                                <span class="content-storey-body-list-line"></span>
                                <ul>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">好“色”先生</p>
                                            <p class="content-storey-body-list-p-title-promo">春装尚新9折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-32.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">女装春尚新</p>
                                            <p class="content-storey-body-list-p-title-promo">新品7折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-34.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">换季清仓</p>
                                            <p class="content-storey-body-list-p-title-promo">2件5折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-33.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">扮美我自己</p>
                                            <p class="content-storey-body-list-p-title-promo">春季新品7折上新</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-30.jpg" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="content-storey-body-more">
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-31.jpg" alt=""></a>
                                <a class="content-storey-body-more-item" href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-36.jpg" alt=""></a>
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-35.jpg" alt=""></a>
                            </div>
                            <div class="content-storey-body-brand">
                                <div class="tab storey-tab-one-right">
                                    <ul class="tab-body">
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-38.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-39.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                    </ul>

                                    <div class="tab-btn">
                                        <a class="prev" href="javascript:;"><i class="icon-navigate_before"></i></a>
                                        <a class="next" href="javascript:;"><i class="icon-navigate_next"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content-楼层-02 -->
                <div class="storey-two content-storey">
                    <div class="content-storey-left">
                        <div class="content-storey-head">
                            <h3>家电馆</h3>
                            <div>
                                <a href="javascript:;">洗衣机</a>
                                <a href="javascript:;">厨房小电</a>
                                <a href="javascript:;">冰箱</a>
                                <a href="javascript:;">洗衣机</a>
                            </div>
                        </div>
                        <div class="content-storey-body">
                            <div class="content-storey-body-cover">
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-29.jpg" alt=""></a>
                            </div>
                            <div class="content-storey-body-list">
                                <span class="content-storey-body-list-bar"></span>
                                <span class="content-storey-body-list-line"></span>
                                <ul>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">好“色”先生</p>
                                            <p class="content-storey-body-list-p-title-promo">春装尚新9折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-32.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">女装春尚新</p>
                                            <p class="content-storey-body-list-p-title-promo">新品7折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-34.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">换季清仓</p>
                                            <p class="content-storey-body-list-p-title-promo">2件5折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-33.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">扮美我自己</p>
                                            <p class="content-storey-body-list-p-title-promo">春季新品7折上新</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-30.jpg" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="content-storey-body-more">
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-31.jpg" alt=""></a>
                                <a class="content-storey-body-more-item" href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-36.jpg" alt=""></a>
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-35.jpg" alt=""></a>
                            </div>
                            <div class="content-storey-body-brand">
                                <div class="tab storey-tab-two-left">
                                    <ul class="tab-body">
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-38.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-39.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                    </ul>

                                    <div class="tab-btn">
                                        <a class="prev" href="javascript:;"><i class="icon-navigate_before"></i></a>
                                        <a class="next" href="javascript:;"><i class="icon-navigate_next"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-storey-right">
                        <div class="content-storey-head">
                            <h3>搞机派</h3>
                            <div>
                                <a href="javascript:;">金属机身</a>
                                <a href="javascript:;">快速充电</a>
                                <a href="javascript:;">拍照神器</a>
                                <a href="javascript:;">后置双摄像</a>
                                <a href="javascript:;">双卡双待</a>
                                <a href="javascript:;">全网通</a>
                            </div>
                        </div>
                        <div class="content-storey-body">
                            <div class="content-storey-body-cover">
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-29.jpg" alt=""></a>
                            </div>
                            <div class="content-storey-body-list">
                                <span class="content-storey-body-list-bar"></span>
                                <span class="content-storey-body-list-line"></span>
                                <ul>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">好“色”先生</p>
                                            <p class="content-storey-body-list-p-title-promo">春装尚新9折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-32.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">女装春尚新</p>
                                            <p class="content-storey-body-list-p-title-promo">新品7折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-34.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">换季清仓</p>
                                            <p class="content-storey-body-list-p-title-promo">2件5折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-33.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">扮美我自己</p>
                                            <p class="content-storey-body-list-p-title-promo">春季新品7折上新</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-30.jpg" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="content-storey-body-more">
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-31.jpg" alt=""></a>
                                <a class="content-storey-body-more-item" href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-36.jpg" alt=""></a>
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-35.jpg" alt=""></a>
                            </div>
                            <div class="content-storey-body-brand">
                                <div class="tab storey-tab-two-right">
                                    <ul class="tab-body">
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-38.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-39.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                    </ul>

                                    <div class="tab-btn">
                                        <a class="prev" href="javascript:;"><i class="icon-navigate_before"></i></a>
                                        <a class="next" href="javascript:;"><i class="icon-navigate_next"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content-楼层-03 -->
                <div class="storey-three content-storey">
                    <div class="content-storey-left-right">
                        <div class="content-storey-head">
                            <h3>爱逛</h3>
                            <div>
                                <a href="javascript:;">杰克琼斯</a>
                                <a href="javascript:;">高跟鞋</a>
                                <a href="javascript:;">欧米茄</a>
                                <a href="javascript:;">珠宝</a>
                                <a href="javascript:;">奢侈品</a>
                                <a href="javascript:;">春季换新装</a>
                            </div>
                        </div>
                        <div class="content-storey-body">
                            <div class="content-storey-body-left">
                                <div class="content-storey-body-cover">
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-29.jpg" alt=""></a>
                                </div>
                                <div class="content-storey-body-list">
                                    <span class="content-storey-body-list-bar"></span>
                                    <span class="content-storey-body-list-line"></span>
                                    <ul>
                                        <li>
                                            <a href="javascript:;">
                                                <p class="content-storey-body-list-p-title" style="color: #974676;">好“色”先生</p>
                                                <p class="content-storey-body-list-p-title-promo">春装尚新9折</p>
                                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-32.jpg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <p class="content-storey-body-list-p-title" style="color: #974676;">女装春尚新</p>
                                                <p class="content-storey-body-list-p-title-promo">新品7折</p>
                                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-34.jpg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <p class="content-storey-body-list-p-title" style="color: #974676;">换季清仓</p>
                                                <p class="content-storey-body-list-p-title-promo">2件5折</p>
                                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-33.jpg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <p class="content-storey-body-list-p-title" style="color: #974676;">扮美我自己</p>
                                                <p class="content-storey-body-list-p-title-promo">春季新品7折上新</p>
                                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-30.jpg" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="content-storey-body-more">
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-31.jpg" alt=""></a>
                                    <a class="content-storey-body-more-item" href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-36.jpg" alt=""></a>
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-35.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="content-storey-body-right">
                                <div class="content-storey-body-cover">
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-29.jpg" alt=""></a>
                                </div>
                                <div class="content-storey-body-list">
                                    <span class="content-storey-body-list-bar"></span>
                                    <span class="content-storey-body-list-line"></span>
                                    <ul>
                                        <li>
                                            <a href="javascript:;">
                                                <p class="content-storey-body-list-p-title" style="color: #974676;">好“色”先生</p>
                                                <p class="content-storey-body-list-p-title-promo">春装尚新9折</p>
                                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-32.jpg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <p class="content-storey-body-list-p-title" style="color: #974676;">女装春尚新</p>
                                                <p class="content-storey-body-list-p-title-promo">新品7折</p>
                                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-34.jpg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <p class="content-storey-body-list-p-title" style="color: #974676;">换季清仓</p>
                                                <p class="content-storey-body-list-p-title-promo">2件5折</p>
                                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-33.jpg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <p class="content-storey-body-list-p-title" style="color: #974676;">扮美我自己</p>
                                                <p class="content-storey-body-list-p-title-promo">春季新品7折上新</p>
                                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-30.jpg" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="content-storey-body-more">
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-31.jpg" alt=""></a>
                                    <a class="content-storey-body-more-item" href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-36.jpg" alt=""></a>
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-35.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="content-storey-body-brand">
                                <div class="tab storey-tab-three">
                                    <ul class="tab-body">
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-38.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-39.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                    </ul>

                                    <div class="tab-btn">
                                        <a class="prev" href="javascript:;"><i class="icon-navigate_before"></i></a>
                                        <a class="next" href="javascript:;"><i class="icon-navigate_next"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content-楼层-04 -->
                <div class="storey-four content-storey">
                    <div class="content-storey-left">
                        <div class="content-storey-head">
                            <h3>玩3C</h3>
                            <div>
                                <a href="javascript:;">手机</a>
                                <a href="javascript:;">电脑办公</a>
                                <a href="javascript:;">数码</a>
                                <a href="javascript:;">以旧换新</a>
                                <a href="javascript:;">配件中心</a>
                            </div>
                        </div>
                        <div class="content-storey-body">
                            <div class="content-storey-body-cover">
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-29.jpg" alt=""></a>
                            </div>
                            <div class="content-storey-body-list">
                                <span class="content-storey-body-list-bar"></span>
                                <span class="content-storey-body-list-line"></span>
                                <ul>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">好“色”先生</p>
                                            <p class="content-storey-body-list-p-title-promo">春装尚新9折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-32.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">女装春尚新</p>
                                            <p class="content-storey-body-list-p-title-promo">新品7折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-34.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">换季清仓</p>
                                            <p class="content-storey-body-list-p-title-promo">2件5折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-33.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">扮美我自己</p>
                                            <p class="content-storey-body-list-p-title-promo">春季新品7折上新</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-30.jpg" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="content-storey-body-more">
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-31.jpg" alt=""></a>
                                <a class="content-storey-body-more-item" href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-36.jpg" alt=""></a>
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-35.jpg" alt=""></a>
                            </div>
                            <div class="content-storey-body-brand">
                                <div class="tab storey-tab-four-left">
                                    <ul class="tab-body">
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-38.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-39.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                    </ul>

                                    <div class="tab-btn">
                                        <a class="prev" href="javascript:;"><i class="icon-navigate_before"></i></a>
                                        <a class="next" href="javascript:;"><i class="icon-navigate_next"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-storey-right">
                        <div class="content-storey-head">
                            <h3>爱运动</h3>
                            <div>
                                <a href="javascript:;">跑步鞋</a>
                                <a href="javascript:;">冲锋衣</a>
                                <a href="javascript:;">动感单车</a>
                                <a href="javascript:;">电动车</a>
                                <a href="javascript:;">羽绒服</a>
                            </div>
                        </div>
                        <div class="content-storey-body">
                            <div class="content-storey-body-cover">
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-29.jpg" alt=""></a>
                            </div>
                            <div class="content-storey-body-list">
                                <span class="content-storey-body-list-bar"></span>
                                <span class="content-storey-body-list-line"></span>
                                <ul>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">好“色”先生</p>
                                            <p class="content-storey-body-list-p-title-promo">春装尚新9折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-32.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">女装春尚新</p>
                                            <p class="content-storey-body-list-p-title-promo">新品7折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-34.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">换季清仓</p>
                                            <p class="content-storey-body-list-p-title-promo">2件5折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-33.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">扮美我自己</p>
                                            <p class="content-storey-body-list-p-title-promo">春季新品7折上新</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-30.jpg" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="content-storey-body-more">
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-31.jpg" alt=""></a>
                                <a class="content-storey-body-more-item" href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-36.jpg" alt=""></a>
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-35.jpg" alt=""></a>
                            </div>
                            <div class="content-storey-body-brand">
                                <div class="tab storey-tab-four-right">
                                    <ul class="tab-body">
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-38.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-39.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                    </ul>

                                    <div class="tab-btn">
                                        <a class="prev" href="javascript:;"><i class="icon-navigate_before"></i></a>
                                        <a class="next" href="javascript:;"><i class="icon-navigate_next"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content-楼层-05 -->
                <div class="storey-five content-storey">
                    <div class="content-storey-left-right">
                        <div class="content-storey-head">
                            <h3>爱逛</h3>
                            <div>
                                <a href="javascript:;">杰克琼斯</a>
                                <a href="javascript:;">高跟鞋</a>
                                <a href="javascript:;">欧米茄</a>
                                <a href="javascript:;">珠宝</a>
                                <a href="javascript:;">奢侈品</a>
                                <a href="javascript:;">春季换新装</a>
                            </div>
                        </div>
                        <div class="content-storey-body">
                            <div class="content-storey-body-left">
                                <div class="content-storey-body-cover">
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-29.jpg" alt=""></a>
                                </div>
                                <div class="content-storey-body-list">
                                    <span class="content-storey-body-list-bar"></span>
                                    <span class="content-storey-body-list-line"></span>
                                    <ul>
                                        <li>
                                            <a href="javascript:;">
                                                <p class="content-storey-body-list-p-title" style="color: #974676;">好“色”先生</p>
                                                <p class="content-storey-body-list-p-title-promo">春装尚新9折</p>
                                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-32.jpg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <p class="content-storey-body-list-p-title" style="color: #974676;">女装春尚新</p>
                                                <p class="content-storey-body-list-p-title-promo">新品7折</p>
                                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-34.jpg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <p class="content-storey-body-list-p-title" style="color: #974676;">换季清仓</p>
                                                <p class="content-storey-body-list-p-title-promo">2件5折</p>
                                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-33.jpg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <p class="content-storey-body-list-p-title" style="color: #974676;">扮美我自己</p>
                                                <p class="content-storey-body-list-p-title-promo">春季新品7折上新</p>
                                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-30.jpg" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="content-storey-body-more">
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-31.jpg" alt=""></a>
                                    <a class="content-storey-body-more-item" href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-36.jpg" alt=""></a>
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-35.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="content-storey-body-right">
                                <div class="content-storey-body-cover">
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-29.jpg" alt=""></a>
                                </div>
                                <div class="content-storey-body-list">
                                    <span class="content-storey-body-list-bar"></span>
                                    <span class="content-storey-body-list-line"></span>
                                    <ul>
                                        <li>
                                            <a href="javascript:;">
                                                <p class="content-storey-body-list-p-title" style="color: #974676;">好“色”先生</p>
                                                <p class="content-storey-body-list-p-title-promo">春装尚新9折</p>
                                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-32.jpg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <p class="content-storey-body-list-p-title" style="color: #974676;">女装春尚新</p>
                                                <p class="content-storey-body-list-p-title-promo">新品7折</p>
                                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-34.jpg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <p class="content-storey-body-list-p-title" style="color: #974676;">换季清仓</p>
                                                <p class="content-storey-body-list-p-title-promo">2件5折</p>
                                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-33.jpg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <p class="content-storey-body-list-p-title" style="color: #974676;">扮美我自己</p>
                                                <p class="content-storey-body-list-p-title-promo">春季新品7折上新</p>
                                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-30.jpg" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="content-storey-body-more">
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-31.jpg" alt=""></a>
                                    <a class="content-storey-body-more-item" href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-36.jpg" alt=""></a>
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-35.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="content-storey-body-brand">
                                <div class="tab storey-tab-three">
                                    <ul class="tab-body">
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-38.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-39.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                    </ul>

                                    <div class="tab-btn">
                                        <a class="prev" href="javascript:;"><i class="icon-navigate_before"></i></a>
                                        <a class="next" href="javascript:;"><i class="icon-navigate_next"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content-楼层-06 -->
                <div class="storey-six content-storey">
                    <div class="content-storey-left">
                        <div class="content-storey-head">
                            <h3>爱宝宝</h3>
                            <div>
                                <a href="javascript:;">洗护喂养</a>
                                <a href="javascript:;">妈妈专区</a>
                                <a href="javascript:;">寝居服饰</a>
                                <a href="javascript:;">婴儿推车</a>
                                <a href="javascript:;">安全座椅</a>
                            </div>
                        </div>
                        <div class="content-storey-body">
                            <div class="content-storey-body-cover">
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-29.jpg" alt=""></a>
                            </div>
                            <div class="content-storey-body-list">
                                <span class="content-storey-body-list-bar"></span>
                                <span class="content-storey-body-list-line"></span>
                                <ul>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">好“色”先生</p>
                                            <p class="content-storey-body-list-p-title-promo">春装尚新9折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-32.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">女装春尚新</p>
                                            <p class="content-storey-body-list-p-title-promo">新品7折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-34.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">换季清仓</p>
                                            <p class="content-storey-body-list-p-title-promo">2件5折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-33.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">扮美我自己</p>
                                            <p class="content-storey-body-list-p-title-promo">春季新品7折上新</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-30.jpg" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="content-storey-body-more">
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-31.jpg" alt=""></a>
                                <a class="content-storey-body-more-item" href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-36.jpg" alt=""></a>
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-35.jpg" alt=""></a>
                            </div>
                            <div class="content-storey-body-brand">
                                <div class="tab storey-tab-six-left">
                                    <ul class="tab-body">
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-38.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-39.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                    </ul>

                                    <div class="tab-btn">
                                        <a class="prev" href="javascript:;"><i class="icon-navigate_before"></i></a>
                                        <a class="next" href="javascript:;"><i class="icon-navigate_next"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-storey-right">
                        <div class="content-storey-head">
                            <h3>爱家</h3>
                            <div>
                                <a href="javascript:;">装修</a>
                                <a href="javascript:;">设计帮</a>
                                <a href="javascript:;">家具</a>
                                <a href="javascript:;">杯子</a>
                                <a href="javascript:;">盖板</a>
                                <a href="javascript:;">家纺</a>
                            </div>
                        </div>
                        <div class="content-storey-body">
                            <div class="content-storey-body-cover">
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-29.jpg" alt=""></a>
                            </div>
                            <div class="content-storey-body-list">
                                <span class="content-storey-body-list-bar"></span>
                                <span class="content-storey-body-list-line"></span>
                                <ul>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">好“色”先生</p>
                                            <p class="content-storey-body-list-p-title-promo">春装尚新9折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-32.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">女装春尚新</p>
                                            <p class="content-storey-body-list-p-title-promo">新品7折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-34.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">换季清仓</p>
                                            <p class="content-storey-body-list-p-title-promo">2件5折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-33.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">扮美我自己</p>
                                            <p class="content-storey-body-list-p-title-promo">春季新品7折上新</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-30.jpg" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="content-storey-body-more">
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-31.jpg" alt=""></a>
                                <a class="content-storey-body-more-item" href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-36.jpg" alt=""></a>
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-35.jpg" alt=""></a>
                            </div>
                            <div class="content-storey-body-brand">
                                <div class="tab storey-tab-six-right">
                                    <ul class="tab-body">
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-38.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-39.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                    </ul>

                                    <div class="tab-btn">
                                        <a class="prev" href="javascript:;"><i class="icon-navigate_before"></i></a>
                                        <a class="next" href="javascript:;"><i class="icon-navigate_next"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content-楼层-07 -->
                <div class="storey-seven content-storey">
                    <div class="content-storey-left">
                        <div class="content-storey-head">
                            <h3>爱阅读</h3>
                            <div>
                                <a href="javascript:;">外语</a>
                                <a href="javascript:;">历史</a>
                                <a href="javascript:;">经管</a>
                                <a href="javascript:;">摄影</a>
                                <a href="javascript:;">编程</a>
                                <a href="javascript:;">电子书</a>
                            </div>
                        </div>
                        <div class="content-storey-body">
                            <div class="content-storey-body-cover">
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-29.jpg" alt=""></a>
                            </div>
                            <div class="content-storey-body-list">
                                <span class="content-storey-body-list-bar"></span>
                                <span class="content-storey-body-list-line"></span>
                                <ul>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">好“色”先生</p>
                                            <p class="content-storey-body-list-p-title-promo">春装尚新9折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-32.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">女装春尚新</p>
                                            <p class="content-storey-body-list-p-title-promo">新品7折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-34.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">换季清仓</p>
                                            <p class="content-storey-body-list-p-title-promo">2件5折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-33.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">扮美我自己</p>
                                            <p class="content-storey-body-list-p-title-promo">春季新品7折上新</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-30.jpg" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="content-storey-body-more">
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-31.jpg" alt=""></a>
                                <a class="content-storey-body-more-item" href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-36.jpg" alt=""></a>
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-35.jpg" alt=""></a>
                            </div>
                            <div class="content-storey-body-brand">
                                <div class="tab storey-tab-seven-left">
                                    <ul class="tab-body">
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-38.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-39.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                    </ul>

                                    <div class="tab-btn">
                                        <a class="prev" href="javascript:;"><i class="icon-navigate_before"></i></a>
                                        <a class="next" href="javascript:;"><i class="icon-navigate_next"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-storey-right">
                        <div class="content-storey-head">
                            <h3>爱车</h3>
                            <div>
                                <a href="javascript:;">爆款车</a>
                                <a href="javascript:;">内饰节</a>
                                <a href="javascript:;">节后保养</a>
                                <a href="javascript:;">洗车美容</a>
                                <a href="javascript:;">贴膜</a>
                            </div>
                        </div>
                        <div class="content-storey-body">
                            <div class="content-storey-body-cover">
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-29.jpg" alt=""></a>
                            </div>
                            <div class="content-storey-body-list">
                                <span class="content-storey-body-list-bar"></span>
                                <span class="content-storey-body-list-line"></span>
                                <ul>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">好“色”先生</p>
                                            <p class="content-storey-body-list-p-title-promo">春装尚新9折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-32.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">女装春尚新</p>
                                            <p class="content-storey-body-list-p-title-promo">新品7折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-34.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">换季清仓</p>
                                            <p class="content-storey-body-list-p-title-promo">2件5折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-33.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">扮美我自己</p>
                                            <p class="content-storey-body-list-p-title-promo">春季新品7折上新</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-30.jpg" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="content-storey-body-more">
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-31.jpg" alt=""></a>
                                <a class="content-storey-body-more-item" href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-36.jpg" alt=""></a>
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-35.jpg" alt=""></a>
                            </div>
                            <div class="content-storey-body-brand">
                                <div class="tab storey-tab-seven-right">
                                    <ul class="tab-body">
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-38.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-39.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                    </ul>

                                    <div class="tab-btn">
                                        <a class="prev" href="javascript:;"><i class="icon-navigate_before"></i></a>
                                        <a class="next" href="javascript:;"><i class="icon-navigate_next"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content-楼层-08 -->
                <div class="storey-eight content-storey">
                    <div class="content-storey-left">
                        <div class="content-storey-head">
                            <h3>爱游戏</h3>
                            <div>
                                <a href="javascript:;">女神专区</a>
                                <a href="javascript:;">装机大师</a>
                                <a href="javascript:;">达人评测</a>
                                <a href="javascript:;">超级本</a>
                            </div>
                        </div>
                        <div class="content-storey-body">
                            <div class="content-storey-body-cover">
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-29.jpg" alt=""></a>
                            </div>
                            <div class="content-storey-body-list">
                                <span class="content-storey-body-list-bar"></span>
                                <span class="content-storey-body-list-line"></span>
                                <ul>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">好“色”先生</p>
                                            <p class="content-storey-body-list-p-title-promo">春装尚新9折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-32.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">女装春尚新</p>
                                            <p class="content-storey-body-list-p-title-promo">新品7折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-34.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">换季清仓</p>
                                            <p class="content-storey-body-list-p-title-promo">2件5折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-33.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">扮美我自己</p>
                                            <p class="content-storey-body-list-p-title-promo">春季新品7折上新</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-30.jpg" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="content-storey-body-more">
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-31.jpg" alt=""></a>
                                <a class="content-storey-body-more-item" href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-36.jpg" alt=""></a>
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-35.jpg" alt=""></a>
                            </div>
                            <div class="content-storey-body-brand">
                                <div class="tab storey-tab-eight-left">
                                    <ul class="tab-body">
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-38.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-39.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                    </ul>

                                    <div class="tab-btn">
                                        <a class="prev" href="javascript:;"><i class="icon-navigate_before"></i></a>
                                        <a class="next" href="javascript:;"><i class="icon-navigate_next"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-storey-right">
                        <div class="content-storey-head">
                            <h3>生活旅行</h3>
                            <div>
                                <a href="javascript:;">机票</a>
                                <a href="javascript:;">火车票</a>
                                <a href="javascript:;">电影票</a>
                                <a href="javascript:;">1元抢宝</a>
                            </div>
                        </div>
                        <div class="content-storey-body">
                            <div class="content-storey-body-cover">
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-29.jpg" alt=""></a>
                            </div>
                            <div class="content-storey-body-list">
                                <span class="content-storey-body-list-bar"></span>
                                <span class="content-storey-body-list-line"></span>
                                <ul>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">好“色”先生</p>
                                            <p class="content-storey-body-list-p-title-promo">春装尚新9折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-32.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">女装春尚新</p>
                                            <p class="content-storey-body-list-p-title-promo">新品7折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-34.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">换季清仓</p>
                                            <p class="content-storey-body-list-p-title-promo">2件5折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-33.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">扮美我自己</p>
                                            <p class="content-storey-body-list-p-title-promo">春季新品7折上新</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-30.jpg" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="content-storey-body-more">
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-31.jpg" alt=""></a>
                                <a class="content-storey-body-more-item" href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-36.jpg" alt=""></a>
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-35.jpg" alt=""></a>
                            </div>
                            <div class="content-storey-body-brand">
                                <div class="tab storey-tab-eight-right">
                                    <ul class="tab-body">
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-38.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-39.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                    </ul>

                                    <div class="tab-btn">
                                        <a class="prev" href="javascript:;"><i class="icon-navigate_before"></i></a>
                                        <a class="next" href="javascript:;"><i class="icon-navigate_next"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content-楼层-09 -->
                <div class="storey-nine content-storey">
                    <div class="content-storey-left">
                        <div class="content-storey-head">
                            <h3>爱逛</h3>
                            <div>
                                <a href="javascript:;">杰克琼斯</a>
                                <a href="javascript:;">高跟鞋</a>
                                <a href="javascript:;">欧米茄</a>
                                <a href="javascript:;">珠宝</a>
                                <a href="javascript:;">奢侈品</a>
                                <a href="javascript:;">春季换新装</a>
                            </div>
                        </div>
                        <div class="content-storey-body">
                            <div class="content-storey-body-cover">
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-29.jpg" alt=""></a>
                            </div>
                            <div class="content-storey-body-list">
                                <span class="content-storey-body-list-bar"></span>
                                <span class="content-storey-body-list-line"></span>
                                <ul>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">好“色”先生</p>
                                            <p class="content-storey-body-list-p-title-promo">春装尚新9折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-32.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">女装春尚新</p>
                                            <p class="content-storey-body-list-p-title-promo">新品7折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-34.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">换季清仓</p>
                                            <p class="content-storey-body-list-p-title-promo">2件5折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-33.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">扮美我自己</p>
                                            <p class="content-storey-body-list-p-title-promo">春季新品7折上新</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-30.jpg" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="content-storey-body-more">
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-31.jpg" alt=""></a>
                                <a class="content-storey-body-more-item" href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-36.jpg" alt=""></a>
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-35.jpg" alt=""></a>
                            </div>
                            <div class="content-storey-body-brand">
                                <div class="tab storey-tab-nine-left">
                                    <ul class="tab-body">
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-38.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-39.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                    </ul>

                                    <div class="tab-btn">
                                        <a class="prev" href="javascript:;"><i class="icon-navigate_before"></i></a>
                                        <a class="next" href="javascript:;"><i class="icon-navigate_next"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-storey-right">
                        <div class="content-storey-head">
                            <h3>爱美丽</h3>
                            <div>
                                <a href="javascript:;">套装</a>
                                <a href="javascript:;">SK-II</a>
                                <a href="javascript:;">口红</a>
                                <a href="javascript:;">香水</a>
                                <a href="javascript:;">巅峰NBA</a>
                                <a href="javascript:;">洗护大牌</a>
                            </div>
                        </div>
                        <div class="content-storey-body">
                            <div class="content-storey-body-cover">
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-29.jpg" alt=""></a>
                            </div>
                            <div class="content-storey-body-list">
                                <span class="content-storey-body-list-bar"></span>
                                <span class="content-storey-body-list-line"></span>
                                <ul>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">好“色”先生</p>
                                            <p class="content-storey-body-list-p-title-promo">春装尚新9折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-32.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">女装春尚新</p>
                                            <p class="content-storey-body-list-p-title-promo">新品7折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-34.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">换季清仓</p>
                                            <p class="content-storey-body-list-p-title-promo">2件5折</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-33.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <p class="content-storey-body-list-p-title" style="color: #974676;">扮美我自己</p>
                                            <p class="content-storey-body-list-p-title-promo">春季新品7折上新</p>
                                            <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-30.jpg" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="content-storey-body-more">
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-31.jpg" alt=""></a>
                                <a class="content-storey-body-more-item" href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-36.jpg" alt=""></a>
                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-35.jpg" alt=""></a>
                            </div>
                            <div class="content-storey-body-brand">
                                <div class="tab storey-tab-nineright">
                                    <ul class="tab-body">
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-38.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-39.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                    </ul>

                                    <div class="tab-btn">
                                        <a class="prev" href="javascript:;"><i class="icon-navigate_before"></i></a>
                                        <a class="next" href="javascript:;"><i class="icon-navigate_next"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content-楼层-10 -->
                <div class="storey-ten content-storey">
                    <div class="content-storey-left-right">
                        <div class="content-storey-head">
                            <h3>爱逛</h3>
                            <div>
                                <a href="javascript:;">杰克琼斯</a>
                                <a href="javascript:;">高跟鞋</a>
                                <a href="javascript:;">欧米茄</a>
                                <a href="javascript:;">珠宝</a>
                                <a href="javascript:;">奢侈品</a>
                                <a href="javascript:;">春季换新装</a>
                            </div>
                        </div>
                        <div class="content-storey-body">
                            <div class="content-storey-body-left">
                                <div class="content-storey-body-cover">
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-29.jpg" alt=""></a>
                                </div>
                                <div class="content-storey-body-list">
                                    <span class="content-storey-body-list-bar"></span>
                                    <span class="content-storey-body-list-line"></span>
                                    <ul>
                                        <li>
                                            <a href="javascript:;">
                                                <p class="content-storey-body-list-p-title" style="color: #974676;">好“色”先生</p>
                                                <p class="content-storey-body-list-p-title-promo">春装尚新9折</p>
                                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-32.jpg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <p class="content-storey-body-list-p-title" style="color: #974676;">女装春尚新</p>
                                                <p class="content-storey-body-list-p-title-promo">新品7折</p>
                                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-34.jpg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <p class="content-storey-body-list-p-title" style="color: #974676;">换季清仓</p>
                                                <p class="content-storey-body-list-p-title-promo">2件5折</p>
                                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-33.jpg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <p class="content-storey-body-list-p-title" style="color: #974676;">扮美我自己</p>
                                                <p class="content-storey-body-list-p-title-promo">春季新品7折上新</p>
                                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-30.jpg" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="content-storey-body-more">
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-31.jpg" alt=""></a>
                                    <a class="content-storey-body-more-item" href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-36.jpg" alt=""></a>
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-35.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="content-storey-body-right">
                                <div class="content-storey-body-cover">
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-29.jpg" alt=""></a>
                                </div>
                                <div class="content-storey-body-list">
                                    <span class="content-storey-body-list-bar"></span>
                                    <span class="content-storey-body-list-line"></span>
                                    <ul>
                                        <li>
                                            <a href="javascript:;">
                                                <p class="content-storey-body-list-p-title" style="color: #974676;">好“色”先生</p>
                                                <p class="content-storey-body-list-p-title-promo">春装尚新9折</p>
                                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-32.jpg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <p class="content-storey-body-list-p-title" style="color: #974676;">女装春尚新</p>
                                                <p class="content-storey-body-list-p-title-promo">新品7折</p>
                                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-34.jpg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <p class="content-storey-body-list-p-title" style="color: #974676;">换季清仓</p>
                                                <p class="content-storey-body-list-p-title-promo">2件5折</p>
                                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-33.jpg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <p class="content-storey-body-list-p-title" style="color: #974676;">扮美我自己</p>
                                                <p class="content-storey-body-list-p-title-promo">春季新品7折上新</p>
                                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-30.jpg" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="content-storey-body-more">
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-31.jpg" alt=""></a>
                                    <a class="content-storey-body-more-item" href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-36.jpg" alt=""></a>
                                    <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-35.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="content-storey-body-brand">
                                <div class="tab storey-tab-three">
                                    <ul class="tab-body">
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-38.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-39.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-37.jpg" alt=""><i></i></a></li>
                                    </ul>

                                    <div class="tab-btn">
                                        <a class="prev" href="javascript:;"><i class="icon-navigate_before"></i></a>
                                        <a class="next" href="javascript:;"><i class="icon-navigate_next"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 首页-购特色 -->
            <div class="content-unique content-index-block">
                <div class="content-index-block-head-title"><h3>购特色</h3></div>
                <div class="content-unique-content">
                    <ul>
                        <li>
                            <a href="javascript:;">
                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-index_unique_entry_01.jpg" alt="">
                                <div class="content-unique-entry-text">
                                    <h3>企业购</h3>
                                    <p>电脑办公最多直降1000</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-index_unique_entry_01.jpg" alt="">
                                <div class="content-unique-entry-text">
                                    <h3>企业购</h3>
                                    <p>电脑办公最多直降1000</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-index_unique_entry_01.jpg" alt="">
                                <div class="content-unique-entry-text">
                                    <h3>企业购</h3>
                                    <p>电脑办公最多直降1000</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-index_unique_entry_01.jpg" alt="">
                                <div class="content-unique-entry-text">
                                    <h3>企业购</h3>
                                    <p>电脑办公最多直降1000</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-index_unique_entry_01.jpg" alt="">
                                <div class="content-unique-entry-text">
                                    <h3>企业购</h3>
                                    <p>电脑办公最多直降1000</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-index_unique_entry_01.jpg" alt="">
                                <div class="content-unique-entry-text">
                                    <h3>企业购</h3>
                                    <p>电脑办公最多直降1000</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-index_unique_entry_01.jpg" alt="">
                                <div class="content-unique-entry-text">
                                    <h3>企业购</h3>
                                    <p>电脑办公最多直降1000</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- 首页-横幅-03 -->
            <div class="content-grid">
                <ul>
                    <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-19.jpg" alt=""></a></li>
                    <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-20.jpg" alt=""></a></li>
                    <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-21.jpg" alt=""></a></li>
                </ul>
            </div>

            <!-- 首页-更多商品 -->
            <div class="content-more-goods content-index-block" date-ajax="">
                <div class="content-index-block-head-title"><h3>还没逛够</h3></div>
                <div class="content-more-goods-content">
                    <ul>
                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_001.jpg" alt=""><div class="content-more-goods-info"><p class="content-more-goods-info-name">【厂家直供】洋河蓝色经典海之蓝 52度 480ml</p><p class="content-more-goods-info-price"><i>¥</i><span>139.00</span></p></div></a></li>
                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_001.jpg" alt=""><div class="content-more-goods-info"><p class="content-more-goods-info-name">【厂家直供】洋河蓝色经典海之蓝 52度 480ml</p><p class="content-more-goods-info-price"><i>¥</i><span>139.00</span></p></div></a></li>
                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_001.jpg" alt=""><div class="content-more-goods-info"><p class="content-more-goods-info-name">【厂家直供】洋河蓝色经典海之蓝 52度 480ml</p><p class="content-more-goods-info-price"><i>¥</i><span>139.00</span></p></div></a></li>
                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_001.jpg" alt=""><div class="content-more-goods-info"><p class="content-more-goods-info-name">【厂家直供】洋河蓝色经典海之蓝 52度 480ml</p><p class="content-more-goods-info-price"><i>¥</i><span>139.00</span></p></div></a></li>
                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_001.jpg" alt=""><div class="content-more-goods-info"><p class="content-more-goods-info-name">【厂家直供】洋河蓝色经典海之蓝 52度 480ml</p><p class="content-more-goods-info-price"><i>¥</i><span>139.00</span></p></div></a></li>
                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_001.jpg" alt=""><div class="content-more-goods-info"><p class="content-more-goods-info-name">【厂家直供】洋河蓝色经典海之蓝 52度 480ml</p><p class="content-more-goods-info-price"><i>¥</i><span>139.00</span></p></div></a></li>
                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_001.jpg" alt=""><div class="content-more-goods-info"><p class="content-more-goods-info-name">【厂家直供】洋河蓝色经典海之蓝 52度 480ml</p><p class="content-more-goods-info-price"><i>¥</i><span>139.00</span></p></div></a></li>
                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_001.jpg" alt=""><div class="content-more-goods-info"><p class="content-more-goods-info-name">【厂家直供】洋河蓝色经典海之蓝 52度 480ml</p><p class="content-more-goods-info-price"><i>¥</i><span>139.00</span></p></div></a></li>
                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_001.jpg" alt=""><div class="content-more-goods-info"><p class="content-more-goods-info-name">【厂家直供】洋河蓝色经典海之蓝 52度 480ml</p><p class="content-more-goods-info-price"><i>¥</i><span>139.00</span></p></div></a></li>
                        <li><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_001.jpg" alt=""><div class="content-more-goods-info"><p class="content-more-goods-info-name">【厂家直供】洋河蓝色经典海之蓝 52度 480ml</p><p class="content-more-goods-info-price"><i>¥</i><span>139.00</span></p></div></a></li>
                    </ul>
                </div>
            </div>

        </div>
</div>