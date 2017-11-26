<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->registerCssFile('/static/css/list.css', ['depends' => app\assets\AppAsset::className()]);
$this->registerJsFile('/static/js/list.js', ['depends' => app\assets\AppAsset::className()]);

$this->title = $goodsKeywords . ' - 商品搜索 - ' . 'eBestMall';

$this->params['breadcrumbs'][] = ['label' => '全部结果', 'url' => ['/search/index', 'keywords' => $goodsKeywords]];
$this->params['breadcrumbs'][] = '" ' . $goodsKeywords . ' "';

?>
<div class="goods-list">
    <div class="shop-wrap">
        <div class="shop-logo">
            <a href="javascript:;">
                <img src="https://img30.360buyimg.com/popshop/jfs/t796/208/1017480188/18198/68cefb7/5565bab1Nc01af6ae.jpg"
                     width="180" height="60"/>
            </a>
        </div>
        <div class="shop-main">
            <div class="shop-info-name">
                <a href="javascript:;" target="_blank">京东Apple产品专营店</a>
                <span class="tips-tag">平台自营</span>
            </div>
            <div class="shop-info-item">主营品牌：苹果（Apple）</div>
            <div class="shop-info-item">店铺简介：Apple 电脑自营店</div>
        </div>
        <div class="shop-extend">
            <div class="shop-extend-btn">
                <a class="shop-extend-btn-focus" href="javascript:;"><i class="icon-heart-o"></i>加关注</a>
                <div class="bar"></div>
                <a class="shop-extend-btn-shop-enter" href="javascript:;" target="_blank">进入店铺</a>
            </div>
        </div>
    </div>
    <div class="bar"></div>
    <div class="selector">
        <div class="selector-item">
            <div class="selector-item-key"><strong>品牌：</strong></div>
            <div class="selector-item-value selector-item-value-brand">
                <ul>
                    <li class="selector-item-value-wrap">
                        <a href="javascript:;" title="苹果（APPLE）">苹果（APPLE）</a>
                        <div class="selector-item-value-img">
                            <img src="https://img30.360buyimg.com/popshop/jfs/t2989/240/151377693/3895/30ad9044/574d36dbN262ef26d.jpg">
                        </div>
                    </li>
                    <li class="selector-item-value-wrap">
                        <a href="javascript:;" title="花花公子（PLAYBOY）">花花公子（PLAYBOY）</a>
                    </li>
                    <li class="selector-item-value-wrap">
                        <a href="javascript:;" title="七匹狼（SEPTWOLVES）">七匹狼（SEPTWOLVES）</a>
                    </li>
                </ul>
            </div>
            <div class="selector-item-extend">
                <a href="javascript:;">更多&nbsp;<i class="fa fa-angle-down"></i></a>
                <!--<a href="javascript:;">收起&nbsp;<i class="fa fa-angle-up"></i></a>-->
            </div>
        </div>
        <div class="selector-item">
            <div class="selector-item-key"><strong>男装：</strong></div>
            <div class="selector-item-value">
                <ul>
                    <li><a href="javascript:;" title="夹克">夹克</a></li>
                    <li><a href="javascript:;" title="T恤">T恤</a></li>
                    <li><a href="javascript:;" title="衬衫">衬衫</a></li>
                    <li><a href="javascript:;" title="风衣">风衣</a></li>
                    <li><a href="javascript:;" title="羽绒服">羽绒服</a></li>
                    <li><a href="javascript:;" title="休闲裤">休闲裤</a></li>
                    <li><a href="javascript:;" title="西服">西服</a></li>
                </ul>
            </div>
            <div class="selector-item-extend">
                <a href="javascript:;">更多&nbsp;<i class="fa fa-angle-down"></i></a>
                <!--<a href="javascript:;">收起&nbsp;<i class="fa fa-angle-up"></i></a>-->
            </div>
        </div>
        <div class="selector-item">
            <div class="selector-item-key"><strong>女装：</strong></div>
            <div class="selector-item-value">
                <ul>
                    <li><a href="javascript:;" title="短外套">短外套</a></li>
                    <li><a href="javascript:;" title="连衣裙">连衣裙</a></li>
                    <li><a href="javascript:;" title="毛呢大衣">毛呢大衣</a></li>
                    <li><a href="javascript:;" title="风衣">风衣</a></li>
                    <li><a href="javascript:;" title="打底衫">打底衫</a></li>
                    <li><a href="javascript:;" title="衬衫">衬衫</a></li>
                    <li><a href="javascript:;" title="西服">西服</a></li>
                </ul>
            </div>
            <div class="selector-item-extend">
                <a href="javascript:;">更多&nbsp;<i class="fa fa-angle-down"></i></a>
                <!--<a href="javascript:;">收起&nbsp;<i class="fa fa-angle-up"></i></a>-->
            </div>
        </div>
        <div class="selector-item">
            <div class="selector-item-key"><span>高级选项：</span></div>
            <div class="selector-item-trig">
                <ul>
                    <li class="trig-item-wrap">
                        <a class="trig-item-title" href="javascript:;">
                            <span>风格</span>&nbsp;<div class="trig-item-title-icon"><i class="fa fa-angle-down"></i>
                            </div>
                        </a>
                        <div class="trig-item-main">内容</div>
                    </li>
                    <li class="trig-item-wrap">
                        <a class="trig-item-title" href="javascript:;">
                            <span>人群</span>&nbsp;<div class="trig-item-title-icon"><i class="fa fa-angle-down"></i>
                            </div>
                        </a>
                        <div class="trig-item-main">内容</div>
                    </li>
                </ul>
            </div>
            <div class="selector-item-extend">
                <!--<a href="javascript:;">更多&nbsp;<i class="fa fa-angle-down"></i></a>-->
                <!--<a href="javascript:;">收起&nbsp;<i class="fa fa-angle-up"></i></a>-->
            </div>
        </div>
    </div>
    <div class="bar"></div>
    <div class="shop-aside">
        <div class="shop-aside-item">
            <div class="shop-aside-title">
                <h3>商品精选</h3>
                <span></span>
            </div>
            <div class="shop-aside-content">
                <ul>
                    <li class="shop-aside-content-item">
                        <div class="item-img">
                            <a href="javascript:;">
                                <img src="https://img10.360buyimg.com/n2/jfs/t11599/365/546757191/493547/931c3354/59f2cde3N0276563e.jpg"
                                     width="160" height="160">
                            </a>
                        </div>
                        <div class="item-price">
                            <strong><em>¥</em><i class="J-prom-p-18788675125">169.00</i></strong>
                        </div>
                        <div class="item-name">
                            <a href="javascript:;" title="花花公子长袖T恤男2017翻领加绒头套条纹免烫男中青年 冬天 衣服 红色">花花公子长袖T恤男2017翻领加绒头套条纹免烫男中青年
                                冬天 衣服 红色</a>
                        </div>
                        <div class="item-comment">
                            <span>已有</span>
                            <span class="item-comment-number"><a href="javascript:;" target="_blank">99999+</a></span>
                            <span>人评价</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="shop-list-wrap">
        <div class="shop-list-filter">
            <div class="shop-list-filter-item sort-wrap">
                <div class="sort-item-main">
                    <div class="sort-item-sort">
                        <a class="active" href="javascript:;">综合<i class="icon-arrow-down"></i></a>
                        <a href="javascript:;">销量<i class="icon-arrow-down"></i></a>
                        <a href="javascript:;">评论数<i class="icon-arrow-down"></i></a>
                        <a href="javascript:;">新品<i class="icon-arrow-down"></i></a>
                        <a href="javascript:;">价格</a>
                    </div>
                    <div class="sort-item-price">
                        <div class="price-search-set">
                            <div class="price-search-start price-search-item"><input type="text" class="input-txt"
                                                                                     autocomplete="off"
                                                                                     style="color: rgb(204, 204, 204);"
                                                                                     placeholder="¥"></div>
                            <em>-</em>
                            <div class="price-search-end price-search-item"><input type="text" class="input-txt"
                                                                                   autocomplete="off"
                                                                                   style="color: rgb(204, 204, 204);"
                                                                                   placeholder="¥"></div>
                        </div>
                    </div>
                </div>
                <div class="sort-item-extend">
                    <div class="sort-page-wrap">
                        <div class="result-sum">共<span class="num">7万+</span>件商品</div>
                        <div class="sort-page">
                            <span class="sort-page-text"><b>1</b><em>/</em><i>100</i></span>
                            <a class="sort-page-prev" href="javascript:;"><</a>
                            <a class="sort-page-next" href="javascript:;">></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shop-list-filter-item transport-wrap"></div>
        </div>
        <div class="goods-list-wrap" data-key="<?= $goodsKeywords ?>">
            <ul>
                <?php foreach ($goodsList as $goods): ?>
                    <li class="goods-list-item">
                        <div class="goods-list-item-wrap">
                            <div class="goods-list-item-img">
                                <a href="<?= Url::toRoute(['/goods/index', 'id' => $goods['goods_id']]) ?>"
                                   target="_blank">
                                    <img src="/static/img/temp/temp-goods_img_001.jpg" width="210" height="210">
                                </a>
                                <div class="goods-focus-wrap">
                                    <a href="javascript:;" class="goods-focus-btn" title="点击收藏"><i
                                                class="icon-heart-o"></i>收藏</a>
                                </div>
                                <!--<div class="goods-note-tips">预订商品</div>-->
                            </div>
                            <div class="goods-list-item-price">
                                <strong><em>¥</em><i
                                            class="J-prom-p-18788675125"><?= $goods['goods_price'] ?></i></strong>
                            </div>
                            <div class="goods-list-item-name">
                                <a href="<?= Url::toRoute(['/goods/index', 'id' => $goods['goods_id']]) ?>"
                                   title="<?= $goods['goods_name'] ?>" target="_blank"><?= $goods['goods_name'] ?></a>
                            </div>
                            <div class="goods-list-item-commit">
                                <strong>
                                    <a href="javascript:;" target="_blank">99999+</a>条评价
                                </strong>
                            </div>
                            <div class="goods-list-item-shop">
                                <a href="javascript:;" title="花花公子旗舰店">花花公子旗舰店</a>
                            </div>
                            <div class="goods-list-item-icons">
                                <div class="item-icons-wrap">
                                    <span class="item-icons active">自营</span>
                                    <div class="item-icons-tips">
                                        <span class="item-icons-triangle"><i></i></span>
                                        <span class="item-icons active">自营</span>
                                        平台自营，品质保障
                                    </div>
                                </div>

                                <div class="item-icons-wrap">
                                    <span class="item-icons">免邮</span>
                                    <div class="item-icons-tips">
                                        <span class="item-icons-triangle"><i></i></span>
                                        <span class="item-icons">免邮</span>
                                        当前收货地址，本商品免邮费
                                    </div>
                                </div>

                                <div class="item-icons-wrap">
                                    <span class="item-icons">满赠</span>
                                    <div class="item-icons-tips">
                                        <span class="item-icons-triangle"><i></i></span>
                                        <span class="item-icons">满赠</span>
                                        购买本商品送赠品
                                    </div>
                                </div>
                                <div class="item-icons-wrap">
                                    <span class="item-icons">秒杀</span>
                                    <div class="item-icons-tips">
                                        <span class="item-icons-triangle"><i></i></span>
                                        <span class="item-icons">秒杀</span>
                                        秒杀活动，千万别错过
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>
