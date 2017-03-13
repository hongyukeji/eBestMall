<?php
/**
 * ============================================================================
 * Copyright © 2016-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/3/12 14:45
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */

use yii\helpers\Url;
use yii\helpers\Html;
use ebestmall\web\EbmAsset;

EbmAsset::register($this);

$baseUrl = $this->assetBundles[EbmAsset::className()]->baseUrl;
$this->registerCssFile($baseUrl .'/css/goods.css', ['depends' => EbmAsset::className()]);
$this->registerJsFile($baseUrl .'/js/goods.js',['depends' => EbmAsset::className()]);

$this->title = Yii::$app->params['shopTitle'];

$this->params['breadcrumbs'][] = ['label' => Yii::t('common','Goods'),'url' => ['goods/index']];
$this->params['breadcrumbs'][] = 'Apple iPhone 7 (A1660) 128G 金色 移动联通电信4G手机';
?>
<div class="goods-index">
    <div class="product-intro">
        <div class="product-preview-wrap">
            <div class="product-preview">
                <div class="product-preview-main-img">
                    <div class="product-preview-main-img-box">
                        <div class="product-preview-main-img-box-magnifier"></div>
                        <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_002.jpg" alt="">
                    </div>
                    <div class="product-preview-main-img-big-box">
                        <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_002_big.jpg" alt="">
                    </div>
                </div>
                <div class="product-preview-thumbnail-wrap">
                    <div class="product-preview-thumbnail-list">
                        <ul>
                            <li class="active">
                                <a href="javascript:;">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_002_small.jpg" alt="" data-img="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_002.jpg" data-img-big="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_002_big.jpg">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_001_small.jpg" alt="" data-img="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_001.jpg" data-img-big="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_001_big.jpg">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_002_small.jpg" alt="" data-img="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_002.jpg" data-img-big="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_002_big.jpg">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_001_small.jpg" alt="" data-img="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_001.jpg" data-img-big="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_001_big.jpg">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_002_small.jpg" alt="" data-img="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_002.jpg" data-img-big="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_002_big.jpg">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_001_small.jpg" alt="" data-img="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_001.jpg" data-img-big="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_001_big.jpg">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_001_small.jpg" alt="" data-img="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_001.jpg" data-img-big="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_001_big.jpg">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <a class="prev" href="javascript:;"><i class="icon-navigate_before"></i></a>
                    <a class="next" href="javascript:;"><i class="icon-navigate_next"></i></a>
                </div>
                <div class="product-preview-info">
                    <div class="product-preview-info-left">
                        <a href="javascript:;"><i class="icon-share-alt"></i>分享</a>
                        <a href="javascript:;"><i class="icon-goods-heart"></i>收藏商品</a>
                    </div>
                    <div class="product-preview-info-right"><a href="javascript:;">举报</a></div>
                </div>
            </div>
        </div>
        <div class="product-info-wrap">
            <div class="product-info-name">Apple iPhone 7 (A1660) 128G 金色 移动联通电信4G手机</div>
            <div class="product-info-describe">暖春开学季，就要“焕”新装！领券可享12期白条免息！<a href="#" title="量免息券，领券戳这里！ ">量免息券，领券戳这里！</a>
                <br>推荐选择下方的移动、联通、电信优惠购，套餐有优惠，还有话费返还。
            </div>
            <div class="product-info-price-wrap">
                <div class="product-info-price-wrap-statistics">
                    <div class="product-info-price-wrap-comment-count">
                        <p>累计评价</p>
                        <a class="notice" href="javascript:;">2万+</a>
                    </div>
                    <div class="product-info-price-wrap-comment-count">
                        <p>累计销量</p>
                        <a class="notice" href="javascript:;">3万+</a>
                    </div>
                </div>
                <div class="product-info-price">
                    <div class="dt">价　　格</div>
                    <div class="dd">
                        <span class="p-price"><span>￥</span><span class="price">5888.00</span></span>
                        <a class="notice" href="javascript:;">降价通知</a>
                    </div>
                </div>
                <div class="product-info-market-price">
                    <div class="dt">市 场 价</div>
                    <div class="dd">
                        <span class="p-price"><span>￥</span><span class="price">6888.00</span></span>
                    </div>
                </div>
            </div>
            <div class="product-info-strip"></div>
            <div class="product-info-choose-attr">
                <!-- @a class active disabled -->
                <ul>
                    <li>
                        <div class="dt">选择颜色</div>
                        <div class="dd">
                            <a href="javascript:;">红色</a>
                            <a class="active" href="javascript:;">金色</a>
                            <a href="javascript:;">白色</a>
                        </div>
                    </li>
                    <li>
                        <div class="dt">选择版本</div>
                        <div class="dd">
                            <a class="active" href="javascript:;">公开版</a>
                            <a href="javascript:;">双网通</a>
                        </div>
                    </li>
                    <li>
                        <div class="dt">套　　装</div>
                        <div class="dd">
                            <a class="active" href="javascript:;">优惠套装1</a>
                            <a href="javascript:;">优惠套装2</a>
                            <a class="disabled" href="javascript:;">优惠套装3</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="product-info-strip"></div>
            <div class="product-info-choose-amount-wrap">
                <div class="product-info-choose-amount">
                    <input class="goods-number" type="text" value="1">
                    <div class="product-info-choose-amount-btn">
                        <a href="javascript:;" class="btn-add item"><i class="icon-add2"></i></a>
                        <a href="javascript:;" class="btn-reduce"><i class="icon-remove"></i></a>
                    </div>
                </div>
                <div class="product-info-choose-btn-buy product-info-choose-btn"><a href="javascript:;">立即购买</a>
                </div>
                <div class="product-info-choose-btn-add product-info-choose-btn"><a href="javascript:;">加入购物车</a>
                </div>
            </div>
        </div>
        <div class="guess-you-like-wrap">
            <div class="guess-you-like">
                <div class="guess-you-like-header">
                    <i></i>
                    <span>看了又看</span>
                </div>
                <div class="guess-you-like-content">
                    <ul>
                        <li>
                            <a href="javascript:;" title="苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色">
                                <div class="guess-you-like-content-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0001.jpg" alt="">
                                    <p>¥198.00</p>
                                </div>
                                <div class="guess-you-like-content-dn">
                                    <p>苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色">
                                <div class="guess-you-like-content-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0001.jpg" alt="">
                                    <p>¥198.00</p>
                                </div>
                                <div class="guess-you-like-content-dn">
                                    <p>苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色">
                                <div class="guess-you-like-content-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0001.jpg" alt="">
                                    <p>¥198.00</p>
                                </div>
                                <div class="guess-you-like-content-dn">
                                    <p>苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色">
                                <div class="guess-you-like-content-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0001.jpg" alt="">
                                    <p>¥198.00</p>
                                </div>
                                <div class="guess-you-like-content-dn">
                                    <p>苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色">
                                <div class="guess-you-like-content-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0001.jpg" alt="">
                                    <p>¥198.00</p>
                                </div>
                                <div class="guess-you-like-content-dn">
                                    <p>苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色">
                                <div class="guess-you-like-content-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0001.jpg" alt="">
                                    <p>¥198.00</p>
                                </div>
                                <div class="guess-you-like-content-dn">
                                    <p>苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色">
                                <div class="guess-you-like-content-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0001.jpg" alt="">
                                    <p>¥198.00</p>
                                </div>
                                <div class="guess-you-like-content-dn">
                                    <p>苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色">
                                <div class="guess-you-like-content-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0001.jpg" alt="">
                                    <p>¥198.00</p>
                                </div>
                                <div class="guess-you-like-content-dn">
                                    <p>苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="guess-you-like-content-footer">
                    <a class="prev" href="javascript:;"><i class="icon-chevron-up"></i></a>
                    <a class="next" href="javascript:;"><i class="icon-chevron-down2"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="product-recommend-wrap">
        <div class="w">
            <div class="product-recommend">
                <div class="product-recommend-header">
                    <ul>
                        <li class="active">店长推荐</li>
                        <li>店铺热卖</li>
                    </ul>
                </div>
                <div class="product-recommend-content">
                    <div class="product-recommend-content-list">
                        <ul>
                            <li>
                                <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                    <div class="product-recommend-content-list-up">
                                        <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                        <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn"><strong>￥39.99</strong></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                    <div class="product-recommend-content-list-up">
                                        <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                        <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn"><strong>￥39.88</strong></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                    <div class="product-recommend-content-list-up">
                                        <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                        <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn"><strong>￥39.99</strong></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                    <div class="product-recommend-content-list-up">
                                        <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                        <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn"><strong>￥39.88</strong></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                    <div class="product-recommend-content-list-up">
                                        <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                        <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn"><strong>￥39.99</strong></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                    <div class="product-recommend-content-list-up">
                                        <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                        <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn"><strong>￥39.88</strong></div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="product-recommend-content-list">
                        <ul>
                            <li>
                                <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                    <div class="product-recommend-content-list-up">
                                        <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                        <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn"><strong>￥999.99</strong></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                    <div class="product-recommend-content-list-up">
                                        <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                        <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn"><strong>￥888.88</strong></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                    <div class="product-recommend-content-list-up">
                                        <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                        <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn"><strong>￥999.99</strong></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                    <div class="product-recommend-content-list-up">
                                        <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                        <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn"><strong>￥888.88</strong></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                    <div class="product-recommend-content-list-up">
                                        <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                        <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn"><strong>￥999.99</strong></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                    <div class="product-recommend-content-list-up">
                                        <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                        <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn"><strong>￥888.88</strong></div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-detail-wrap">
        <div class="product-detail-aside">
            <div class="shop-info-wrap">
                <div class="shop-info-name"><h3><a href="javascript:;">平台自营</a></h3></div>
                <div class="shop-info">
                    <div class="item">
                        <dl>
                            <dt>信　誉：</dt>
                            <dd>
                                <a href="javascript:;" title="信誉等级：7.5分">
                                    <i class="icon-diamond"></i>
                                    <i class="icon-diamond"></i>
                                    <i class="icon-diamond"></i>
                                    <i class="icon-diamond"></i>
                                    <i class="icon-diamond"></i>
                                    <!--<i class="icon-star"></i>-->
                                    <!--<i class="icon-star"></i>-->
                                    <!--<i class="icon-star"></i>-->
                                    <!--<i class="icon-star-half-empty"></i>-->
                                    <!--<i class="icon-star-o"></i>-->
                                </a>
                            </dd>
                        </dl>
                    </div>
                    <div class="item">
                        <dl>
                            <dt>联　系：</dt>
                            <dd>
                                <a href="javascript:;" title="QQ">
                                    <i class="icon-qq"></i>
                                </a>
                            </dd>
                        </dl>
                    </div>
                    <div class="item">
                        <dl>
                            <dt>资　质：</dt>
                            <dd>
                                <a href="javascript:;" title="个人实名认证">
                                    <i class="icon-drivers-license-o"></i>
                                </a>
                                <a href="javascript:;" title="企业认证">
                                    <i class="icon-user-tie"></i>
                                </a>
                            </dd>
                        </dl>
                    </div>
                    <div class="item">
                        <dl>
                            <dt>地　址：</dt>
                            <dd><a href="javascript:;" title="中国北京朝阳区建设路1288号">中国北京朝阳区建设路1288号</a></dd>
                        </dl>
                    </div>
                    <div class="item shop-rate-wrap">
                        <div class="shop-rate">
                            <!-- @icon icon-arrow-up icon-arrow-down -->
                            <dl>
                                <dt>描述</dt>
                                <dd><a href="javascript:;">5.0<i class="icon-arrow-up"></i></a></dd>
                            </dl>
                            <dl>
                                <dt>服务</dt>
                                <dd><a href="javascript:;">5.0<i class="icon-arrow-up"></i></a></dd>
                            </dl>
                            <dl>
                                <dt>物流</dt>
                                <dd><a href="javascript:;">5.0<i class="icon-arrow-up"></i></a></dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="shop-info-footer">
                    <div class="shop-info-footer-btn">
                        <a href="javascript:;"><i class="icon-home"></i>进店逛逛</a>
                        <a href="javascript:;"><i class="icon-star"></i>关注店铺</a>
                    </div>
                </div>
            </div>
            <div class="shop-info-search product-detail-aside-item-wrap">
                <div class="shop-info-search-header product-detail-aside-item-header"><h3>店内搜索</h3></div>
                <div class="shop-info-search-content product-detail-aside-item-content">
                    <form action="javascript:;">
                        <p class="sp-form-item1"><label for="sp-keyword">关键字：</label><span><input type="text" id="sp-keyword" ></span></p>
                        <p class="sp-form-item2"><label for="sp-price">价　格：</label><span><input type="text" id="sp-price" > 到 <input type="text" id="sp-price1" ></span></p>
                        <p class="sp-form-item3"><label for="btnShopSearch"></label><span><input type="submit" value="搜索" id="btnShopSearch" data-url="javascripit:;"></span></p>
                    </form>
                </div>
            </div>
            <div class="product-detail-aside-item-wrap">
                <div class="product-detail-aside-tab-header">
                    <ul>
                        <li class="active">店铺热销</li>
                        <li>热门关注</li>
                    </ul>
                </div>
                <div class="product-detail-aside-item-content product-recommend-content-list product-detail-aside-host-content">
                    <ul>
                        <li>
                            <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                <div class="product-recommend-content-list-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                    <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                </div>
                                <div class="product-recommend-content-list-dn"><span><i>1</i>热销<em>888888</em>件</span><strong>￥39.99</strong></div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                <div class="product-recommend-content-list-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                    <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                </div>
                                <div class="product-recommend-content-list-dn"><span><i>2</i>热销<em>888888</em>件</span><strong>￥39.88</strong></div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                <div class="product-recommend-content-list-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                    <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                </div>
                                <div class="product-recommend-content-list-dn"><span><i>3</i>热销<em>888888</em>件</span><strong>￥39.99</strong></div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                <div class="product-recommend-content-list-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                    <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                </div>
                                <div class="product-recommend-content-list-dn"><span><i>4</i>热销<em>888888</em>件</span><strong>￥39.88</strong></div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                <div class="product-recommend-content-list-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                    <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                </div>
                                <div class="product-recommend-content-list-dn"><span><i>5</i>热销<em>888888</em>件</span><strong>￥39.99</strong></div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                <div class="product-recommend-content-list-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                    <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                </div>
                                <div class="product-recommend-content-list-dn"><span><i>6</i>热销<em>888888</em>件</span><strong>￥39.88</strong></div>
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                <div class="product-recommend-content-list-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                    <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                </div>
                                <div class="product-recommend-content-list-dn"><span><i>1</i>热销<em>999999</em>件</span><strong>￥999.99</strong></div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                <div class="product-recommend-content-list-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                    <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                </div>
                                <div class="product-recommend-content-list-dn"><span><i>2</i>热销<em>999999</em>件</span><strong>￥39.88</strong></div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                <div class="product-recommend-content-list-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                    <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                </div>
                                <div class="product-recommend-content-list-dn"><span><i>3</i>热销<em>999999</em>件</span><strong>￥999.99</strong></div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                <div class="product-recommend-content-list-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                    <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                </div>
                                <div class="product-recommend-content-list-dn"><span><i>4</i>热销<em>999999</em>件</span><strong>￥39.88</strong></div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                <div class="product-recommend-content-list-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                    <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                </div>
                                <div class="product-recommend-content-list-dn"><span><i>5</i>热销<em>999999</em>件</span><strong>￥999.99</strong></div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                <div class="product-recommend-content-list-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                    <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                </div>
                                <div class="product-recommend-content-list-dn"><span><i>6</i>热销<em>999999</em>件</span><strong>￥39.88</strong></div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="product-detail-aside-item-wrap shop-new-product-wrap">
                <div class="product-detail-aside-item-header"><h3>店铺新品</h3></div>
                <div class="shop-new-product product-detail-aside-item-content product-recommend-content-list">
                    <ul>
                        <li>
                            <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                <div class="product-recommend-content-list-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                    <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                </div>
                                <div class="product-recommend-content-list-dn"><strong>￥39.99</strong></div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                <div class="product-recommend-content-list-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                    <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                </div>
                                <div class="product-recommend-content-list-dn"><strong>￥39.88</strong></div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                <div class="product-recommend-content-list-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                    <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                </div>
                                <div class="product-recommend-content-list-dn"><strong>￥39.99</strong></div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                <div class="product-recommend-content-list-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                    <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                </div>
                                <div class="product-recommend-content-list-dn"><strong>￥39.88</strong></div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                <div class="product-recommend-content-list-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                    <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                </div>
                                <div class="product-recommend-content-list-dn"><strong>￥39.99</strong></div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                <div class="product-recommend-content-list-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                    <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                </div>
                                <div class="product-recommend-content-list-dn"><strong>￥39.88</strong></div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="product-detail">
            <div class="product-detail-header">
                <ul>
                    <li class="active">商品介绍</li>
                    <li>规格与包装</li>
                    <li>售后保障</li>
                    <li>商品评价(2万+)</li>
                </ul>
                <div class="product-recommend-header-btn"><a href="javascript:;">加入购物车</a></div>
            </div>
            <div class="product-detail-content-wrap">
                <div class="product-detail-content">
                    <div class="product-detail-content-parameter">
                        <div class="product-detail-content-parameter-title">
                            <span>品牌：</span>
                            <a class="parameter-brand-name" href="javascript:;" title="摩梵欧（MOFANOU）">摩梵欧（MOFANOU）</a>
                            <a class="parameter-btn-follow" href="javascript:;"><i class="icon-heart3"></i>关注</a>
                        </div>
                        <div class="product-detail-content-parameter-list">
                            <ul>
                                <li>商品名称：AppleiPhone7 Plus</li>
                                <li>店铺：<a href="javascript:;" title="平台自营">平台自营</a></li>
                                <li>商品毛重：470.00g</li>
                                <li>商品产地：中国大陆</li>
                                <li>系统：苹果（IOS）</li>
                                <li>后置摄像头像素：后置双摄像头</li>
                                <li>机身内存：128GB</li>
                                <li>热点：后置双摄像头</li>
                            </ul>
                        </div>
                        <p class="more-parameter"><a href="#">更多参数 >></a></p>
                    </div>
                    <div class="product-detail-content-main">
                        <!-- Product detail content Start-->
                        <p>
                            <a href="javascript:;" target="_blank" style="margin: 0px; padding: 0px; color: rgb(102, 102, 102); text-decoration: none;"><img alt="" id="" class="" src="https://img10.360buyimg.com/imgzone/jfs/t4360/298/761344291/247529/f5aba32d/58b90b94N1570ef89.png" style="margin: 0px; padding: 0px; border: 0px; vertical-align: middle; float: left;"/></a><a href="javascript:;" target="_blank" style="margin: 0px; padding: 0px; color: rgb(102, 102, 102); text-decoration: none;"><img alt="" class="" src="https://img10.360buyimg.com/imgzone/jfs/t4012/135/2486862597/170413/c87795ed/58aa59ddN6f3bd09f.png" style="margin: 0px; padding: 0px; border: 0px; vertical-align: middle; float: left;"/></a><a href="javascript:;" style="margin: 0px; padding: 0px; color: rgb(102, 102, 102); text-decoration: none;"><img alt="" class="" src="https://img10.360buyimg.com/imgzone/jfs/t3868/122/2169673874/158668/7cdc0bce/58a51548N7cbc219a.png" style="margin: 0px; padding: 0px; border: 0px; vertical-align: middle;"/></a><a href="javascript:;" style="margin: 0px; padding: 0px; color: rgb(102, 102, 102); text-decoration: none;"><img alt="" class="" src="https://img10.360buyimg.com/imgzone/jfs/t3169/149/7612785434/393000/21079143/58b90734Nab50b7ef.png" style="margin: 0px; padding: 0px; border: 0px; vertical-align: middle;"/></a><a href="javascript:;" style="margin: 0px; padding: 0px; color: rgb(102, 102, 102); text-decoration: none;"><img alt="" class="" src="https://img10.360buyimg.com/imgzone/jfs/t3295/129/6392863191/128207/e56f54a4/58a5209fNa281fab7.png" style="margin: 0px; padding: 0px; border: 0px; vertical-align: middle;"/></a>
                        </p>
                        <p>
                            <br/>
                        </p>
                        <p>
                            <img alt="" id="21a7e276bc1448bbb77baee030b2fd44" class="" src="https://img30.360buyimg.com/popWareDetail/jfs/t3211/153/7633701898/48234/d88b1fc3/58b93adbN9a6bef2c.png" style="margin: 0px; padding: 0px; border: 0px; vertical-align: middle;"/>
                        </p>
                        <p>
                            <br/><img alt="" id="4d2b1f9041df4b2b96a56a035026f8e9" class="" src="https://img30.360buyimg.com/popWareDetail/jfs/t4351/77/372005429/53146/eed74ca7/58b38f86N52f9cb3b.png" style="margin: 0px; padding: 0px; border: 0px; vertical-align: middle;"/>
                        </p>
                        <p>
                            <img alt="" id="8c12582576ba476195e2f1bf27529c60" class="" src="https://img30.360buyimg.com/popWareDetail/jfs/t4081/1/810514463/24306/783cc49f/585dd96bNfb4c2bd4.png" style="margin: 0px; padding: 0px; border: 0px; vertical-align: middle;"/>
                        </p>
                        <p>
                            <br/><img alt="" id="ebc7395f6fcc49f1833c005ccb24c251" class="" src="https://img30.360buyimg.com/popWareDetail/jfs/t3220/142/6384173804/132817/e6e4f142/58a7a04aN29ff2ff1.png" style="margin: 0px; padding: 0px; border: 0px; vertical-align: middle;"/>
                        </p>
                        <p>
                            <br/>
                        </p>
                        <!-- Product detail content End-->
                    </div>
                </div>
                <div class="product-detail-content">
                    <div class="product-detail-content-title">
                        <h3>规格与包装</h3>
                    </div>
                    <div class="product-detail-specifications">
                        <div class="specifications-item">
                            <h3>主体</h3>
                            <dl>
                                <dt>适用型号</dt><dd>华为荣耀 V8</dd>
                            </dl>
                        </div>
                        <div class="specifications-item">
                            <h3>规格尺寸</h3>
                            <dl>
                                <dt>贴膜尺寸</dt><dd>4以上</dd>
                                <dt>类型</dt><dd>高透</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="product-detail-packing">
                        <h3>包装清单</h3>
                        <p>钢化膜*1 贴膜工具*1</p>
                    </div>
                </div>
                <div class="product-detail-content">
                    <div class="product-detail-content-title">
                        <h3>售后保障</h3>
                    </div>
                    <div class="product-detail-guarantee">
                        <div class="product-detail-guarantee-content">
                            <div class="product-detail-guarantee-serve-agree-bd">
                                <dl>
                                    <dt>
                                        <i class="icon-shield"></i>
                                        <strong>卖家服务</strong>
                                    </dt>
                                    <dd>
                                        本产品全国联保，享受三包服务，质保期为：一年质保 <br />
                                        如因质量问题或故障，凭厂商维修中心或特约维修点的质量检测证明，享受7日内退货，15日内换货，15日以上在质保期内享受免费保修等三包服务！<br />
                                        (注:如厂家在商品介绍中有售后保障的说明,则此商品按照厂家说明执行售后保障服务。)
                                    </dd>

                                    <dt>
                                        <i class="icon-shield"></i>
                                        <strong>京东承诺</strong>
                                    </dt>
                                    <dd>
                                        京东平台卖家展示销售并由京东发货的商品，由平台卖家提供相应的售后服务。请您放心购买！<br>
                                        注：因厂家会在没有任何提前通知的情况下更改产品包装、产地或者一些附件，本司不能确保客户收到的货物与商城图片、产地、附件说明完全一致。只能确保为原厂正货！并且保证与当时市场上同样主流新品一致。若本商城没有及时更新，请大家谅解！
                                    </dd>

                                    <dt>
                                        <i class="icon-shield"></i><strong>正品行货</strong>
                                    </dt>
                                    <dd>京东商城向您保证所售商品均为正品行货，京东自营商品开具机打发票或电子发票。</dd>
                                    <dt><i class="icon-wrench2"></i><strong>全国联保</strong></dt>
                                    <dd>
                                        凭质保证书及京东商城发票，可享受全国联保服务（奢侈品、钟表除外；奢侈品、钟表由京东联系保修，享受法定三包售后服务），与您亲临商场选购的商品享受相同的质量保证。京东商城还为您提供具有竞争力的商品价格和<a
                                                href="//help.jd.com/help/question-892.html" target="_blank">运费政策</a>，请您放心购买！
                                        <br><br>注：因厂家会在没有任何提前通知的情况下更改产品包装、产地或者一些附件，本司不能确保客户收到的货物与商城图片、产地、附件说明完全一致。只能确保为原厂正货！并且保证与当时市场上同样主流新品一致。若本商城没有及时更新，请大家谅解！
                                    </dd>
                                    <dt><i class="icon-heart-o"></i><strong>无忧退换货</strong></dt>
                                    <dd class="no-worries-text">
                                        客户购买京东自营商品7日内（含7日，自客户收到商品之日起计算），在保证商品完好的前提下，可无理由退货。（部分商品除外，详情请见各商品细则）
                                    </dd>
                                </dl>
                            </div>
                            <div class="product-detail-guarantee-explain">
                                <strong>权利声明：</strong><br>京东上的所有商品信息、客户评价、商品咨询、网友讨论等内容，是京东重要的经营资源，未经许可，禁止非法转载使用。
                                <p><b>注：</b>本站商品信息均来自于合作方，其真实性、准确性和合法性由信息拥有者（合作方）负责。本站不提供任何保证，并不承担任何法律责任。</p>
                                <br>
                                <strong>价格说明：</strong><br>
                                <p><b>京东价：</b>京东价为商品的销售价，是您最终决定是否购买商品的依据。</p>
                                <p><b>划线价：</b>商品展示的划横线价格为参考价，该价格可能是品牌专柜标价、商品吊牌价或由品牌供应商提供的正品零售价（如厂商指导价、建议零售价等）或该商品在京东平台上曾经展示过的销售价；由于地区、时间的差异性和市场行情波动，品牌专柜标价、商品吊牌价等可能会与您购物时展示的不一致，该价格仅供您参考。</p>
                                <p><b>折扣：</b>如无特殊说明，折扣指销售商在原价、或划线价（如品牌专柜标价、商品吊牌价、厂商指导价、厂商建议零售价）等某一价格基础上计算出的优惠比例或优惠金额；如有疑问，您可在购买前联系销售商进行咨询。</p>
                                <p><b>异常问题：</b>商品促销信息以商品详情页“促销”栏中的信息为准；商品的具体售价以订单结算页价格为准；如您发现活动商品售价或促销信息有异常，建议购买前先联系销售商咨询。</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-detail-content">
                    <div class="product-detail-content-title">
                        <h3>商品评价</h3>
                    </div>
                    <div class="product-detail-comment-info">
                        <div class="comment-percent"><strong class="percent-tit">好评度</strong>
                            <div class="percent-con">98<span>%</span></div>
                        </div>
                        <div class="percent-info">
                            <div class="tag-list"><span>防刮耐磨(173)</span><span>完美贴合(116)</span><span>全屏覆盖(107)</span><span>送货快(67)</span><span>抗蓝光(66)</span><span>包装精美(58)</span><span>孔位精准(54)</span><span>显示效果好(45)</span><span>操作灵敏(38)</span><span>工具全(12)</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-detail-comment-list">
                        <div class="product-detail-comment-list-tab-main">
                            <ul class="filter-list">
                                <li class="active" data-tab="trigger" data-num="1600">
                                    <a href="javascript:;">全部评价<em>(1600+)</em></a>
                                </li>
                                <li data-num="224"><a href="javascript:;">晒图<em>(224)</em></a></li>
                                <li data-num="10"><a href="javascript:;">追评<em>(10+)</em></a></li>
                                <li data-num="1500"><a href="javascript:;">好评<em>(1500+)</em></a></li>
                                <li data-num="80"><a href="javascript:;">中评<em>(80+)</em></a></li>
                                <li data-num="60"><a href="javascript:;">差评<em>(60+)</em></a></li>
                                <li style="display: none;"><a href="javascript:;">试用报告<em>()</em></a></li>
                                <li class="comm-curr-sku">
                                    <span><input type="checkbox" id="comm-curr-sku"></span>
                                    <label for="comm-curr-sku">只看当前商品评价</label>
                                </li>
                            </ul>
                        </div>
                        <div class="product-detail-comment-list-tab-con">
                            <div id="comment-0" data-tab="item">
                                <div class="comment-item" data-guid="f8f44d6a-4952-454b-b82e-398a9c6e419e"
                                     data-top="">
                                    <div class="user-column">
                                        <div class="user-info"><img
                                                    src="//storage.360buyimg.com/i.imageUpload/7a68757869616f6875693230303031333739303134303835373735_sma.jpg"
                                                    width="25" height="25" alt="小***飞" class="avatar"> 小***飞
                                        </div>
                                        <div class="user-level"><span style="color:#666666">钻石会员</span>上海</div>
                                    </div>
                                    <div class="comment-column J-comment-column">
                                        <div class="comment-star star5"></div>
                                        <p class="comment-con">很漂亮，很棒的钢化膜！</p>
                                        <div class="pic-list J-pic-list"><a class="J-thumb-img" href="javascript:;"
                                                                            data-ind="0"><img
                                                        src="//img30.360buyimg.com/n0/s48x48_jfs/t3241/121/1899534678/86497/fa0a4dbb/57d66496Ncb2cac31.jpg"
                                                        width="48" height="48" alt="小***飞的晒单图片"></a> <a class="J-thumb-img"
                                                                                                        href="javascript:;"
                                                                                                        data-ind="1"><img
                                                        src="//img30.360buyimg.com/n0/s48x48_jfs/t3229/14/1870775407/70344/2fd61411/57d6649aN747a0415.jpg"
                                                        width="48" height="48" alt="小***飞的晒单图片"></a> <a class="J-thumb-img"
                                                                                                        href="javascript:;"
                                                                                                        data-ind="2"><img
                                                        src="//img30.360buyimg.com/n0/s48x48_jfs/t3238/123/1909514136/59038/38d83c79/57d6649eN999f0ef6.jpg"
                                                        width="48" height="48" alt="小***飞的晒单图片"></a> <a class="J-thumb-img"
                                                                                                        href="javascript:;"
                                                                                                        data-ind="3"><img
                                                        src="//img30.360buyimg.com/n0/s48x48_jfs/t3283/275/1868718781/84934/ed50440f/57d664a2N4eccfc48.jpg"
                                                        width="48" height="48" alt="小***飞的晒单图片"></a> <a class="J-thumb-img"
                                                                                                        href="javascript:;"
                                                                                                        data-ind="4"><img
                                                        src="//img30.360buyimg.com/n0/s48x48_jfs/t3079/50/1917768984/41579/9ff83bf9/57d66532N3fa51c5d.jpg"
                                                        width="48" height="48" alt="小***飞的晒单图片"></a> <a class="J-thumb-img"
                                                                                                        href="javascript:;"
                                                                                                        data-ind="5"><img
                                                        src="//img30.360buyimg.com/n0/s48x48_jfs/t3085/143/1865074919/76993/7d20b57e/57d66536N936274a4.jpg"
                                                        width="48" height="48" alt="小***飞的晒单图片"></a> <a class="J-thumb-img"
                                                                                                        href="javascript:;"
                                                                                                        data-ind="6"><img
                                                        src="//img30.360buyimg.com/n0/s48x48_jfs/t3004/94/2317774004/78589/8681de2e/57d6653aN4ed3ea62.jpg"
                                                        width="48" height="48" alt="小***飞的晒单图片"></a></div>
                                        <div class="J-pic-view-wrap clearfix" data-rotation="0"></div>
                                        <div class="tag-list"><span data-tid="13189643">防刮耐磨</span> <span
                                                    data-tid="13189644">抗蓝光</span> <span data-tid="13189645">全屏覆盖</span>
                                            <span data-tid="13189646">完美贴合</span> <span
                                                    data-tid="13189647">操作灵敏</span></div>
                                        <div class="comment-message">
                                            <div class="order-info"><span>珠光白</span> <span>2016-09-12 16:20</span>
                                            </div>
                                            <div class="comment-op"><a class="J-nice" href="javascript:;"
                                                                       data-guid="f8f44d6a-4952-454b-b82e-398a9c6e419e"
                                                                       title="0"><i class="sprite-praise"></i>0</a>
                                                <a href="//club.jd.com/repay/10552666987_f8f44d6a-4952-454b-b82e-398a9c6e419e_1.html"
                                                   target="_blank"><i class="sprite-comment"></i>0</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-item" data-guid="fdb48ff6-8ef0-4eaa-829b-33474c83a374"
                                     data-top="">
                                    <div class="user-column">
                                        <div class="user-info"><img
                                                    src="//storage.360buyimg.com/i.imageUpload/6a645f3664653436633166326162653331343536373231383536373138_sma.jpg"
                                                    width="25" height="25" alt="老***胖" class="avatar"> 老***胖
                                        </div>
                                        <div class="user-level"><span style="color:#666666">钻石会员</span></div>
                                    </div>
                                    <div class="comment-column J-comment-column">
                                        <div class="comment-star star5"></div>
                                        <p class="comment-con">防刮耐磨 孔位精准 材质也不错</p>
                                        <div class="J-pic-view-wrap clearfix" data-rotation="0"></div>
                                        <div class="tag-list"><span data-tid="12982251">防刮耐磨</span> <span
                                                    data-tid="12982252">孔位精准</span></div>
                                        <div class="comment-message">
                                            <div class="order-info"><span>珠光白</span> <span>2016-08-22 08:49</span>
                                            </div>
                                            <div class="comment-op"><a class="J-nice" href="javascript:;"
                                                                       data-guid="fdb48ff6-8ef0-4eaa-829b-33474c83a374"
                                                                       title="0"><i class="sprite-praise"></i>0</a>
                                                <a href="//club.jd.com/repay/10552666987_fdb48ff6-8ef0-4eaa-829b-33474c83a374_1.html"
                                                   target="_blank"><i class="sprite-comment"></i>0</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-item" data-guid="f66b71bd-1aa6-4d81-a52b-b7f69ea4965a"
                                     data-top="">
                                    <div class="user-column">
                                        <div class="user-info"><img src="//misc.360buyimg.com/lib/img/u/b62.gif"
                                                                    width="25" height="25" alt="无***躯"
                                                                    class="avatar"> 无***躯
                                        </div>
                                        <div class="user-level"><span style="color:#666666">金牌会员</span></div>
                                    </div>
                                    <div class="comment-column J-comment-column">
                                        <div class="comment-star star5"></div>
                                        <p class="comment-con">帮朋友买的 朋友很满意！</p>
                                        <div class="pic-list J-pic-list"><a class="J-thumb-img" href="javascript:;"
                                                                            data-ind="0"><img
                                                        src="//img30.360buyimg.com/n0/s48x48_jfs/t4006/54/585864560/110227/7d5146fe/5854d403N88d42472.jpg"
                                                        width="48" height="48" alt="无***躯的晒单图片"></a> <a class="J-thumb-img"
                                                                                                        href="javascript:;"
                                                                                                        data-ind="1"><img
                                                        src="//img30.360buyimg.com/n0/s48x48_jfs/t3478/149/2452707503/102651/8ba383f/5854d406N39610c0d.jpg"
                                                        width="48" height="48" alt="无***躯的晒单图片"></a> <a class="J-thumb-img"
                                                                                                        href="javascript:;"
                                                                                                        data-ind="2"><img
                                                        src="//img30.360buyimg.com/n0/s48x48_jfs/t3277/127/4835756670/63065/ccd29287/5854d408N7abc627c.jpg"
                                                        width="48" height="48" alt="无***躯的晒单图片"></a> <a class="J-thumb-img"
                                                                                                        href="javascript:;"
                                                                                                        data-ind="3"><img
                                                        src="//img30.360buyimg.com/n0/s48x48_jfs/t3739/221/2450440139/102904/6928b468/5854d40bN9ecdde2b.jpg"
                                                        width="48" height="48" alt="无***躯的晒单图片"></a> <a class="J-thumb-img"
                                                                                                        href="javascript:;"
                                                                                                        data-ind="4"><img
                                                        src="//img30.360buyimg.com/n0/s48x48_jfs/t3058/362/4708979896/62931/4ae1c736/5854d40eNc53afccf.jpg"
                                                        width="48" height="48" alt="无***躯的晒单图片"></a></div>
                                        <div class="J-pic-view-wrap clearfix" data-rotation="0"></div>
                                        <div class="tag-list"><span data-tid="14393422">防刮耐磨</span> <span
                                                    data-tid="14393423">全屏覆盖</span> <span
                                                    data-tid="14393424">完美贴合</span> <span data-tid="14393425">送货快</span>
                                            <span data-tid="14393426">孔位精准</span></div>
                                        <div class="comment-message">
                                            <div class="order-info"><span>珠光白</span> <span>2016-12-17 13:59</span>
                                            </div>
                                            <div class="comment-op"><a class="J-nice" href="javascript:;"
                                                                       data-guid="f66b71bd-1aa6-4d81-a52b-b7f69ea4965a"
                                                                       title="0"><i class="sprite-praise"></i>0</a>
                                                <a href="//club.jd.com/repay/10552666987_f66b71bd-1aa6-4d81-a52b-b7f69ea4965a_1.html"
                                                   target="_blank"><i class="sprite-comment"></i>0</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-item" data-guid="b877f7dd-216d-4980-8074-74b3dcf0726d"
                                     data-top="">
                                    <div class="user-column">
                                        <div class="user-info"><img src="//misc.360buyimg.com/lib/img/u/b61.gif"
                                                                    width="25" height="25" alt="w***0"
                                                                    class="avatar"> w***0
                                        </div>
                                        <div class="user-level"><span style="color:#666666">银牌会员</span></div>
                                    </div>
                                    <div class="comment-column J-comment-column">
                                        <div class="comment-star star5"></div>
                                        <p class="comment-con">
                                            手机钢化膜质量不错，比市面上的厚很多。大小刚合适贴出来的效果很好清晰度也不错。商家给赠送的贴膜用具很齐全，比起前几次买钢化膜带的贴膜辅助品都多。物超所值，效果不错。下次还来你家买产品。。。好评</p>
                                        <div class="pic-list J-pic-list"><a class="J-thumb-img" href="javascript:;"
                                                                            data-ind="0"><img
                                                        src="//img30.360buyimg.com/n0/s48x48_jfs/t3265/230/4860054601/38252/10f16ac0/5858fac5N1d980ea4.jpg"
                                                        width="48" height="48" alt="w***0的晒单图片"></a> <a class="J-thumb-img"
                                                                                                        href="javascript:;"
                                                                                                        data-ind="1"><img
                                                        src="//img30.360buyimg.com/n0/s48x48_jfs/t3262/13/4917652855/23267/34b154b7/5858fac4N2ace10e3.jpg"
                                                        width="48" height="48" alt="w***0的晒单图片"></a> <a class="J-thumb-img"
                                                                                                        href="javascript:;"
                                                                                                        data-ind="2"><img
                                                        src="//img30.360buyimg.com/n0/s48x48_jfs/t3262/18/4795066810/25527/c138a1a9/5858fac4N8777bc63.jpg"
                                                        width="48" height="48" alt="w***0的晒单图片"></a> <a class="J-thumb-img"
                                                                                                        href="javascript:;"
                                                                                                        data-ind="3"><img
                                                        src="//img30.360buyimg.com/n0/s48x48_jfs/t3109/267/4813497976/22213/f65d5e22/5858fac4N96ef82da.jpg"
                                                        width="48" height="48" alt="w***0的晒单图片"></a></div>
                                        <div class="J-pic-view-wrap clearfix" data-rotation="0"></div>
                                        <div class="comment-message">
                                            <div class="order-info"><span>珠光白</span> <span>2016-12-20 17:32</span>
                                            </div>
                                            <div class="comment-op"><a class="J-nice" href="javascript:;"
                                                                       data-guid="b877f7dd-216d-4980-8074-74b3dcf0726d"
                                                                       title="0"><i class="sprite-praise"></i>0</a>
                                                <a href="//club.jd.com/repay/10552666987_b877f7dd-216d-4980-8074-74b3dcf0726d_1.html"
                                                   target="_blank"><i class="sprite-comment"></i>0</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-item" data-guid="82f01409-9d9e-4f2d-9679-053c735d5bce"
                                     data-top="">
                                    <div class="user-column">
                                        <div class="user-info"><img src="//misc.360buyimg.com/lib/img/u/b61.gif"
                                                                    width="25" height="25" alt="1***p"
                                                                    class="avatar"> 1***p
                                        </div>
                                        <div class="user-level"><span style="color:#666666">银牌会员</span>四川</div>
                                    </div>
                                    <div class="comment-column J-comment-column">
                                        <div class="comment-star star5"></div>
                                        <p class="comment-con">不知道是不是我自己贴的问题～白色部分贴上以后感觉有很多气泡～看起来不均匀～但是屏幕中间没有问题～</p>
                                        <div class="pic-list J-pic-list"><a class="J-thumb-img" href="javascript:;"
                                                                            data-ind="0"><img
                                                        src="//img30.360buyimg.com/n0/s48x48_jfs/t3127/163/1717895887/91912/2c0e0b18/57d24d56Ncb16db13.jpg"
                                                        width="48" height="48" alt="1***p的晒单图片"></a> <a class="J-thumb-img"
                                                                                                        href="javascript:;"
                                                                                                        data-ind="1"><img
                                                        src="//img30.360buyimg.com/n0/s48x48_jfs/t3298/309/1691723153/84321/9a3c4c4/57d24d57N6e8a55a6.jpg"
                                                        width="48" height="48" alt="1***p的晒单图片"></a> <a class="J-thumb-img"
                                                                                                        href="javascript:;"
                                                                                                        data-ind="2"><img
                                                        src="//img30.360buyimg.com/n0/s48x48_jfs/t3292/179/1650890380/34510/7b669597/57d24d58Nbdf49a54.jpg"
                                                        width="48" height="48" alt="1***p的晒单图片"></a></div>
                                        <div class="J-pic-view-wrap clearfix" data-rotation="0"></div>
                                        <div class="comment-message">
                                            <div class="order-info"><span>珠光白</span> <span>2016-09-09 13:49</span>
                                            </div>
                                            <div class="comment-op"><a class="J-nice" href="javascript:;"
                                                                       data-guid="82f01409-9d9e-4f2d-9679-053c735d5bce"
                                                                       title="0"><i class="sprite-praise"></i>0</a>
                                                <a href="//club.jd.com/repay/10552666987_82f01409-9d9e-4f2d-9679-053c735d5bce_1.html"
                                                   target="_blank"><i class="sprite-comment"></i>0</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-item" data-guid="9372fe70-7dc6-4235-a0eb-b6cebcc8d764"
                                     data-top="">
                                    <div class="user-column">
                                        <div class="user-info"><img
                                                    src="//storage.360buyimg.com/i.imageUpload/736f7331313831343134333838333436333636_sma.jpg"
                                                    width="25" height="25" alt="会***鱼" class="avatar"> 会***鱼
                                        </div>
                                        <div class="user-level"><span style="color:#666666">金牌会员</span>上海</div>
                                    </div>
                                    <div class="comment-column J-comment-column">
                                        <div class="comment-star star5"></div>
                                        <p class="comment-con">东西很好，全屏覆盖与手机完美贴合.</p>
                                        <div class="J-pic-view-wrap clearfix" data-rotation="0"></div>
                                        <div class="tag-list"><span data-tid="13358513">防刮耐磨</span> <span
                                                    data-tid="13358514">全屏覆盖</span> <span
                                                    data-tid="13358515">完美贴合</span> <span data-tid="13358516">送货快</span>
                                            <span data-tid="13358517">孔位精准</span></div>
                                        <div class="comment-message">
                                            <div class="order-info"><span>香槟金</span> <span>2016-12-11 14:50</span>
                                            </div>
                                            <div class="comment-op"><a class="J-nice" href="javascript:;"
                                                                       data-guid="9372fe70-7dc6-4235-a0eb-b6cebcc8d764"
                                                                       title="0"><i class="sprite-praise"></i>0</a>
                                                <a href="//club.jd.com/repay/10552666987_9372fe70-7dc6-4235-a0eb-b6cebcc8d764_1.html"
                                                   target="_blank"><i class="sprite-comment"></i>0</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-item" data-guid="7c2eb551-bf4b-432d-83c2-8a97fb28e819"
                                     data-top="">
                                    <div class="user-column">
                                        <div class="user-info"><img src="//misc.360buyimg.com/lib/img/u/b61.gif"
                                                                    width="25" height="25" alt="c***i"
                                                                    class="avatar"> c***i
                                        </div>
                                        <div class="user-level"><span style="color:#666666">银牌会员</span>江苏</div>
                                    </div>
                                    <div class="comment-column J-comment-column">
                                        <div class="comment-star star5"></div>
                                        <p class="comment-con">
                                            包装精美，但感觉有点过度包装，包装费用都占了很大一部分成本了，贴膜的孔位还是有一点偏差的，其他方面还是挺满意的</p>
                                        <div class="J-pic-view-wrap clearfix" data-rotation="0"></div>
                                        <div class="tag-list"><span data-tid="13106789">全屏覆盖</span> <span
                                                    data-tid="13106790">完美贴合</span> <span
                                                    data-tid="13106791">包装精美</span></div>
                                        <div class="comment-message">
                                            <div class="order-info"><span>珠光白</span> <span>2016-09-04 15:30</span>
                                            </div>
                                            <div class="comment-op"><a class="J-nice" href="javascript:;"
                                                                       data-guid="7c2eb551-bf4b-432d-83c2-8a97fb28e819"
                                                                       title="0"><i class="sprite-praise"></i>0</a>
                                                <a href="//club.jd.com/repay/10552666987_7c2eb551-bf4b-432d-83c2-8a97fb28e819_1.html"
                                                   target="_blank"><i class="sprite-comment"></i>0</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-item" data-guid="118085b4-2175-4772-aaf6-f0f7c955a74e"
                                     data-top="">
                                    <div class="user-column">
                                        <div class="user-info"><img
                                                    src="//storage.360buyimg.com/i.imageUpload/74617869626f7931343339373138373134393036_sma.jpg"
                                                    width="25" height="25" alt="t***y" class="avatar"> t***y
                                        </div>
                                        <div class="user-level"><span style="color:#e1a10a">PLUS会员</span>北京</div>
                                    </div>
                                    <div class="comment-column J-comment-column">
                                        <div class="comment-star star4"></div>
                                        <p class="comment-con">
                                            只能给四星，贴上之后清晰度略有下降，膜四周是胶粘的，用胶强行粘在屏幕上，不过但是没有白边，这点挺好。膜的白色部分比屏幕小了一点点，有一点遮挡屏幕，不过影响不大，凑合用用吧，这款手机膜太难买，*都没有多少卖的。</p>
                                        <div class="pic-list J-pic-list"><a class="J-thumb-img" href="javascript:;"
                                                                            data-ind="0"><img
                                                        src="//img30.360buyimg.com/n0/s48x48_jfs/t3265/51/5875320982/68384/3738009a/58902954Nd228e4f1.jpg"
                                                        width="48" height="48" alt="t***y的晒单图片"></a> <a class="J-thumb-img"
                                                                                                        href="javascript:;"
                                                                                                        data-ind="1"><img
                                                        src="//img30.360buyimg.com/n0/s48x48_jfs/t3811/38/3355278997/76969/1edb7ad2/58902954Nd4409c83.jpg"
                                                        width="48" height="48" alt="t***y的晒单图片"></a> <a class="J-thumb-img"
                                                                                                        href="javascript:;"
                                                                                                        data-ind="2"><img
                                                        src="//img30.360buyimg.com/n0/s48x48_jfs/t4057/19/1675051620/83984/44f46d7d/58902955Nc6bf5eb1.jpg"
                                                        width="48" height="48" alt="t***y的晒单图片"></a> <a class="J-thumb-img"
                                                                                                        href="javascript:;"
                                                                                                        data-ind="3"><img
                                                        src="//img30.360buyimg.com/n0/s48x48_jfs/t3061/168/5922160834/119027/f82a8ab1/58902954N3ff99f1b.jpg"
                                                        width="48" height="48" alt="t***y的晒单图片"></a> <a class="J-thumb-img"
                                                                                                        href="javascript:;"
                                                                                                        data-ind="4"><img
                                                        src="//img30.360buyimg.com/n0/s48x48_jfs/t3046/277/5877935058/59411/a944ea53/58902954N4a7d20cd.jpg"
                                                        width="48" height="48" alt="t***y的晒单图片"></a></div>
                                        <div class="J-pic-view-wrap clearfix" data-rotation="0"></div>
                                        <div class="comment-message">
                                            <div class="order-info"><span>珠光白</span> <span></span> <span>2017-01-31 14:06</span>
                                            </div>
                                            <div class="comment-op"><a class="J-nice" href="javascript:;"
                                                                       data-guid="118085b4-2175-4772-aaf6-f0f7c955a74e"
                                                                       title="0"><i class="sprite-praise"></i>0</a>
                                                <a href="//club.jd.com/repay/10552666987_118085b4-2175-4772-aaf6-f0f7c955a74e_1.html"
                                                   target="_blank"><i class="sprite-comment"></i>0</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-item" data-guid="a74354af-766b-417b-9cac-5738648bb261"
                                     data-top="">
                                    <div class="user-column">
                                        <div class="user-info"><img src="//misc.360buyimg.com/lib/img/u/b61.gif"
                                                                    width="25" height="25" alt="您***9"
                                                                    class="avatar"> 您***9
                                        </div>
                                        <div class="user-level"><span style="color:#666666">银牌会员</span></div>
                                    </div>
                                    <div class="comment-column J-comment-column">
                                        <div class="comment-star star5"></div>
                                        <p class="comment-con">
                                            质量很好，防刮耐磨，显示效果好极了，可以自己安装，卖家服务周到，快递快，妈妈再也不用担心我的手机膜了.满意！！</p>
                                        <div class="J-pic-view-wrap clearfix" data-rotation="0"></div>
                                        <div class="tag-list"><span data-tid="13062766">防刮耐磨</span> <span
                                                    data-tid="13062767">全屏覆盖</span> <span data-tid="13062768">送货快</span>
                                            <span data-tid="13062769">孔位精准</span> <span
                                                    data-tid="13062770">工具全</span></div>
                                        <div class="comment-message">
                                            <div class="order-info"><span>珠光白</span> <span>2016-08-30 18:00</span>
                                            </div>
                                            <div class="comment-op"><a class="J-nice" href="javascript:;"
                                                                       data-guid="a74354af-766b-417b-9cac-5738648bb261"
                                                                       title="0"><i class="sprite-praise"></i>0</a>
                                                <a href="//club.jd.com/repay/10552666987_a74354af-766b-417b-9cac-5738648bb261_1.html"
                                                   target="_blank"><i class="sprite-comment"></i>0</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-item" data-guid="e4683820-c001-4598-8888-a65a62264464"
                                     data-top="">
                                    <div class="user-column">
                                        <div class="user-info"><img
                                                    src="//storage.360buyimg.com/i.imageUpload/c2fabdadbaecc0bd31343837343037313431383337_sma.jpg"
                                                    width="25" height="25" alt="满***澜" class="avatar"> 满***澜
                                        </div>
                                        <div class="user-level"><span style="color:#666666">金牌会员</span></div>
                                    </div>
                                    <div class="comment-column J-comment-column">
                                        <div class="comment-star star5"></div>
                                        <p class="comment-con">质量不错，大小合适，防刮耐磨，价格不贵很划算，包装很好，发货给力，满意哦！</p>
                                        <div class="J-pic-view-wrap clearfix" data-rotation="0"></div>
                                        <div class="tag-list"><span data-tid="12976383">防刮耐磨</span> <span
                                                    data-tid="12976384">全屏覆盖</span> <span
                                                    data-tid="12976385">完美贴合</span> <span
                                                    data-tid="12976386">显示效果好</span></div>
                                        <div class="comment-message">
                                            <div class="order-info"><span>珠光白</span> <span>2016-08-21 12:19</span>
                                            </div>
                                            <div class="comment-op"><a class="J-nice" href="javascript:;"
                                                                       data-guid="e4683820-c001-4598-8888-a65a62264464"
                                                                       title="0"><i class="sprite-praise"></i>0</a>
                                                <a href="//club.jd.com/repay/10552666987_e4683820-c001-4598-8888-a65a62264464_1.html"
                                                   target="_blank"><i class="sprite-comment"></i>0</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="com-table-footer">
                                    <div class="ui-page-wrap clearfix">
                                        <div class="ui-page"><a rel="1" class="ui-page-curr"
                                                                href="javascript:void(0)" data-current="true"
                                                                clstag="shangpin|keycount|product|pinglunfanye-1">1</a><a
                                                    rel="2" href="#comment"
                                                    clstag="shangpin|keycount|product|pinglunfanye-2">2</a><a rel="3"
                                                                                                              href="#comment"
                                                                                                              clstag="shangpin|keycount|product|pinglunfanye-3">3</a><a
                                                    rel="4" href="#comment"
                                                    clstag="shangpin|keycount|product|pinglunfanye-4">4</a><a rel="5"
                                                                                                              href="#comment"
                                                                                                              clstag="shangpin|keycount|product|pinglunfanye-5">5</a><a
                                                    rel="6" href="#comment"
                                                    clstag="shangpin|keycount|product|pinglunfanye-6">6</a><span>...</span>
                                            <a rel="2" class="ui-pager-next" href="#comment"
                                               clstag="shangpin|keycount|product|pinglunfanye-nextpage">下一页</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="comment-1" data-tab="item" class="hide">
                                <div class="com-table-main">
                                    <div class="J-comments-showImgSwitch-wrap comments-showImgSwitch-wrap">
                                        <div class="thumbnails">
                                            <div class="thumb-list">
                                                <ul class="clearfix" style="margin-left: 0px;">
                                                    <li class="selected"><a href="javascript:;"><img width="76"
                                                                                                     height="76"
                                                                                                     src="//img30.360buyimg.com/n1/s76x76_jfs/t3067/180/7171735739/46978/79a2b88b/58b2d04eNb9bfe601.jpg"></a>
                                                    </li>
                                                    <li><a href="javascript:;"><img width="76" height="76"
                                                                                    src="//img30.360buyimg.com/n1/s76x76_jfs/t4219/60/334858652/28216/cb5444f9/58b2c142N152b21d3.jpg"></a>
                                                    </li>
                                                    <li><a href="javascript:;"><img width="76" height="76"
                                                                                    src="//img30.360buyimg.com/n1/s76x76_jfs/t3097/74/7130163311/24849/77d557c9/58b2c142N774b539f.jpg"></a>
                                                    </li>
                                                    <li><a href="javascript:;"><img width="76" height="76"
                                                                                    src="//img30.360buyimg.com/n1/s76x76_jfs/t3229/316/6732882060/87317/1cb78b03/58abc9baN3dba87c5.jpg"></a>
                                                    </li>
                                                    <li><a href="javascript:;"><img width="76" height="76"
                                                                                    src="//img30.360buyimg.com/n1/s76x76_jfs/t4012/239/2605206757/105132/ff84b33b/58ab9affN49940898.jpg"></a>
                                                    </li>
                                                    <li><a href="javascript:;"><img width="76" height="76"
                                                                                    src="//img30.360buyimg.com/n1/s76x76_jfs/t3055/168/6748938749/21704/272f23c1/58ab9afeN8f05574d.jpg"></a>
                                                    </li>
                                                    <li><a href="javascript:;"><img width="76" height="76"
                                                                                    src="//img30.360buyimg.com/n1/s76x76_jfs/t3103/224/6678394418/50804/e23915a3/58ab9afeN1c4c790e.jpg"></a>
                                                    </li>
                                                    <li><a href="javascript:;"><img width="76" height="76"
                                                                                    src="//img30.360buyimg.com/n1/s76x76_jfs/t3067/31/6692860991/24764/21960ad9/58aa52b8Nd98bc4d0.jpg"></a>
                                                    </li>
                                                    <li><a href="javascript:;"><img width="76" height="76"
                                                                                    src="//img30.360buyimg.com/n1/s76x76_jfs/t3949/281/2469532311/26158/9bbacd4e/58aa52b7N4fe9dac9.jpg"></a>
                                                    </li>
                                                    <li><a href="javascript:;"><img width="76" height="76"
                                                                                    src="//img30.360buyimg.com/n1/s76x76_jfs/t3184/329/6613813040/53924/92700229/58a94692Ne9c2582d.jpg"></a>
                                                    </li>
                                                    <li><a href="javascript:;"><img width="76" height="76"
                                                                                    src="//img10.360buyimg.com/n1/s76x76_jfs/t3058/126/6627695290/9997/a469a0f4/58a9429eN9d7b09e0.jpg"></a>
                                                    </li>
                                                    <li><a href="javascript:;"><img width="76" height="76"
                                                                                    src="//img30.360buyimg.com/n1/s76x76_jfs/t4051/292/2319924129/66420/9011503b/58a7420aN15ad7312.jpg"></a>
                                                    </li>
                                                    <li><a href="javascript:;"><img width="76" height="76"
                                                                                    src="//img30.360buyimg.com/n1/s76x76_jfs/t3841/277/3756850669/66671/4bc46246/58a1a1a1N148758ec.jpg"></a>
                                                    </li>
                                                    <li><a href="javascript:;"><img width="76" height="76"
                                                                                    src="//img30.360buyimg.com/n1/s76x76_jfs/t3238/350/6190463924/20636/1582fbf0/589fc15aNf8323a34.jpg"></a>
                                                    </li>
                                                    <li><a href="javascript:;"><img width="76" height="76"
                                                                                    src="//img30.360buyimg.com/n1/s76x76_jfs/t3175/67/6308336461/47990/6c76a6c5/589ed0aeNdfbc2d9a.jpg"></a>
                                                    </li>
                                                    <li><a href="javascript:;"><img width="76" height="76"
                                                                                    src="//img30.360buyimg.com/n1/s76x76_jfs/t3214/73/6054099000/30275/3bbc5efa/589d0f03N33b637a7.jpg"></a>
                                                    </li>
                                                    <li><a href="javascript:;"><img width="76" height="76"
                                                                                    src="//img30.360buyimg.com/n1/s76x76_jfs/t3973/321/1774290863/25812/5cc4db21/5897e1e2N7a7ea034.jpg"></a>
                                                    </li>
                                                    <li><a href="javascript:;"><img width="76" height="76"
                                                                                    src="//img30.360buyimg.com/n1/s76x76_jfs/t3256/316/5412944629/26776/b25b119a/5897e1e2Nc47e9158.jpg"></a>
                                                    </li>
                                                    <li><a href="javascript:;"><img width="76" height="76"
                                                                                    src="//img30.360buyimg.com/n1/s76x76_jfs/t3283/208/5986050790/43886/241d9d8d/589720c7N9f64b1f7.jpg"></a>
                                                    </li>
                                                    <li><a href="javascript:;"><img width="76" height="76"
                                                                                    src="//img30.360buyimg.com/n1/s76x76_jfs/t3163/22/6013199740/43314/94caac77/589720c6Nb6166339.jpg"></a>
                                                    </li>
                                                </ul>
                                                <span class="J-thumb-prev i-prev-btn i-prev-disable"></span> <span
                                                        class="J-thumb-next i-next-btn"></span></div>
                                        </div>
                                        <div class="showContent-viewer clearfix">
                                            <div class="photo-viewer">
                                                <div class="photo-wrap"><i></i> <img class="J-photo-img"
                                                                                     src="//img30.360buyimg.com/n1/s760x500_jfs/t3067/180/7171735739/46978/79a2b88b/58b2d04eNb9bfe601.jpg">
                                                    <div class="J-cursor-left cursor-left disable"></div>
                                                    <div class="J-cursor-small cursor-small"></div>
                                                    <div class="J-cursor-right cursor-right"></div>
                                                </div>
                                            </div>
                                            <div class="J-info-viewer info-viewer">
                                                <div class="p-comment">很不错</div>
                                                <div class="features-wrap">
                                                    <div class="p-features">
                                                        <ul>
                                                            <li title="珠光白">珠光白</li>
                                                        </ul>
                                                    </div>
                                                    <div class="user-item-wrap">
                                                        <div class="user-item clearfix"><img
                                                                    src="//misc.360buyimg.com/lib/img/u/b62.gif"
                                                                    width="25" height="25" alt="凌***风" class="user-ico">
                                                            <div class="user-name" alt="凌***风" title="凌***风">凌***风
                                                            </div>
                                                        </div>
                                                        <div class="comment-time type-item" alt="2017.02.12"
                                                             title="2017.02.12">2017.02.12
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="comment-2" data-tab="item" class="hide">
                                <div class="iloading">正在加载中，请稍候...</div>
                            </div>
                            <div id="comment-3" data-tab="item" class="hide">
                                <div class="iloading">正在加载中，请稍候...</div>
                            </div>
                            <div id="comment-4" data-tab="item" class="hide">
                                <div class="iloading">正在加载中，请稍候...</div>
                            </div>
                            <div id="comment-5" data-tab="item" class="hide">
                                <div class="iloading">正在加载中，请稍候...</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

