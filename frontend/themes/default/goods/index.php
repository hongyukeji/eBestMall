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
$this->params['breadcrumbs'][] = $this->title;
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
                    <input type="text" value="1">
                    <div class="product-info-choose-amount-btn">
                        <a href="javascript:;" class="item"><i class="icon-add2"></i></a>
                        <a href="javascript:;"><i class="icon-remove"></i></a>
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
                    </ul>
                </div>
                <div class="guess-you-like-content-footer">
                    <a href="javascript:;"><i class="icon-chevron-up"></i></a>
                    <a href="javascript:;"><i class="icon-chevron-down2"></i></a>
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
                                <div class="product-recommend-content-list-dn"><span><i>1</i>热销<em>13344</em>件</span><strong>￥39.99</strong></div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                <div class="product-recommend-content-list-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                    <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                </div>
                                <div class="product-recommend-content-list-dn"><span><i>2</i>热销<em>13344</em>件</span><strong>￥39.88</strong></div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                <div class="product-recommend-content-list-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                    <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                </div>
                                <div class="product-recommend-content-list-dn"><span><i>3</i>热销<em>13344</em>件</span><strong>￥39.99</strong></div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                <div class="product-recommend-content-list-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                    <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                </div>
                                <div class="product-recommend-content-list-dn"><span><i>4</i>热销<em>13344</em>件</span><strong>￥39.88</strong></div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                <div class="product-recommend-content-list-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                    <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                </div>
                                <div class="product-recommend-content-list-dn"><span><i>5</i>热销<em>13344</em>件</span><strong>￥39.99</strong></div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                <div class="product-recommend-content-list-up">
                                    <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                    <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                </div>
                                <div class="product-recommend-content-list-dn"><span><i>6</i>热销<em>13344</em>件</span><strong>￥39.88</strong></div>
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
                    <li>质检报告</li>
                    <li>售后保障</li>
                    <li>商品评价(2万+)</li>
                    <li>本店好评商品</li>
                </ul>
                <div class="product-recommend-header-btn"><a href="javascript:;">加入购物车</a></div>
            </div>
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
                        <img alt="" id="628726c44c5147f7bd6320e68ec97b20" class="" src="https://img30.360buyimg.com/popWaterMark/jfs/t3460/273/1918189636/924556/c5710aff/58368bd6Nd9f29973.png" style="margin: 0px; padding: 0px; border: 0px; vertical-align: middle; text-align: center;"/>&nbsp;<span style="margin: 0px; padding: 0px; text-align: center;">&nbsp; &nbsp;</span>
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
        </div>
    </div>
</div>

