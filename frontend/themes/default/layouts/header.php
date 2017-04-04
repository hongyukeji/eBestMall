<?php

use yii\helpers\Url;
use yii\helpers\Html;

?>
<div id="header">
    <!-- Public-Header Top-Images -->
    <div class="header-event">
        <div class="w">
            <a class="header-event-bar" href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/header-top.jpg" /> </a>
            <a class="close-event" href="javascript:;"><span class="icon-close"></span></a>
        </div>
    </div>

    <!-- Public-Header Top-Nav -->
    <div class="headerTop">
        <div class="w">
            <ul class="fl">
                <li class="headerRegion"><i class="icon-location"></i><span>北京</span>
                    <div class="listRegion">
                        <div><a class="active" href="javascript:;">北京</a></div>
                        <div><a href="javascript:;">上海</a></div>
                        <div><a href="javascript:;">深圳</a></div>
                        <div><a href="javascript:;">天津</a></div>
                        <div><a href="javascript:;">重庆</a></div>
                        <div><a href="javascript:;">河北</a></div>
                        <div><a href="javascript:;">山西</a></div>
                        <div><a href="javascript:;">河南</a></div>
                        <div><a href="javascript:;">辽宁</a></div>
                        <div><a href="javascript:;">吉林</a></div>
                    </div>
                </li>
            </ul>
            <ul class="menuTop fr">
                <?php if(Yii::$app->user->isGuest) : ?>
                <li><div><a href="<?= Url::to(['site/login']) ?>">您好，请登录</a></div></li>
                <li><div><a class="active" href="<?= Url::to(['site/register']) ?>">免费注册</a></div></li><li class="spacer"></li>
                <?php else : ?>
                    <li class="downTop">
                        <div><a href="<?= Url::to(['member/index']) ?>"><?= Html::encode(Yii::$app->user->identity->username);?></a><div class="effectTop"><i class="icon-chevron-down"></i></div></div>
                        <div class="listTop">
                            <div><a href="<?= Url::to(['site/logout']) ?>" data-method="post">退出</a></div>
                        </div>
                    </li><li class="spacer"></li>
                <?php endif; ?>

                <li class="downTop">
                    <div><a href="<?= Url::to(['member/index']) ?>">会员中心</a><div class="effectTop"><i class="icon-chevron-down"></i></div></div>
                    <div class="listTop">
                        <div><a href="javascript:;">已买到的宝贝</a></div>
                        <div><a href="javascript:;">我的收藏</a></div>
                        <div><a href="javascript:;">浏览过的宝贝</a></div>
                    </div>
                </li><li class="spacer"></li>
                <!-- Top顶部购物车 -->
                <li class="downTop header-top-cart">
                    <div><a href="javascript:;">购物车<span class="down-top-span-cart-number">0</span></a><div class="effectTop"><i class="icon-chevron-down"></i></div></div>
                    <div class="listTop cartTop"></div>
                </li><li class="spacer header-top-cart"></li>
                <li class="downTop">
                    <div><a href="javascript:;">卖家中心</a><div class="effectTop"><i class="icon-chevron-down"></i></div></div>
                    <div class="listTop">
                        <div><a href="javascript:;">免费开店</a></div>
                        <div><a href="javascript:;">已卖出的宝贝</a></div>
                        <div><a href="javascript:;">出售中的宝贝</a></div>
                    </div>
                </li><li class="spacer"></li>
                <li class="downTop">
                    <div><a href="javascript:;">商品分类</a><div class="effectTop"><i class="icon-chevron-down"></i></div></div>
                    <div class="listTop">
                        <div><a href="javascript:;">家用电器</a></div>
                        <div><a href="javascript:;">手机数码</a></div>
                        <div><a href="javascript:;">电脑办公</a></div>
                        <div><a href="javascript:;">食品烟酒</a></div>
                    </div>
                </li><li class="spacer"></li>
                <li class="downTop">
                    <div><span class="down-top-span-a">客户服务</span><div class="effectTop"><i class="icon-chevron-down"></i></div></div>
                    <div class="listTop">
                        <div><a href="javascript:;">买家客服</a></div>
                        <div><a href="javascript:;">联系我们</a></div>
                    </div>
                </li><li class="spacer"></li>
                <li class="downTop">
                    <div><span class="down-top-span-a">网址导航</span><div class="effectTop"><i class="icon-chevron-down"></i></div></div>
                    <div class="siteTop">
                        <dl>
                            <dt>鸿宇专场</dt>
                            <dd>
                                <div><a href="javascript:;">鸿宇科技</a> </div>
                                <div><a href="javascript:;">鸿宇科技</a> </div>
                                <div><a href="javascript:;">鸿宇科技</a> </div>
                                <div><a href="javascript:;">鸿宇科技</a> </div>
                                <div><a href="javascript:;">鸿宇科技</a> </div>
                                <div><a href="javascript:;">鸿宇科技</a> </div>
                                <div><a href="javascript:;">鸿宇科技</a> </div>
                                <div><a href="javascript:;">鸿宇科技</a> </div>
                                <div><a href="javascript:;">鸿宇科技</a> </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>鸿宇B2BC商城</dt>
                            <dd>
                                <div><a href="javascript:;">eBestMall</a> </div>
                                <div><a href="javascript:;">eBestMall</a> </div>
                                <div><a href="javascript:;">eBestMall</a> </div>
                                <div><a href="javascript:;">eBestMall</a> </div>
                                <div><a href="javascript:;">eBestMall</a> </div>
                                <div><a href="javascript:;">eBestMall</a> </div>
                                <div><a href="javascript:;">eBestMall</a> </div>
                                <div><a href="javascript:;">eBestMall</a> </div>
                                <div><a href="javascript:;">eBestMall</a> </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>鸿宇科技</dt>
                            <dd>
                                <div><a href="javascript:;">鸿宇科技</a> </div>
                                <div><a href="javascript:;">鸿宇科技</a> </div>
                                <div><a href="javascript:;">鸿宇科技</a> </div>
                                <div><a href="javascript:;">鸿宇科技</a> </div>
                                <div><a href="javascript:;">鸿宇科技</a> </div>
                                <div><a href="javascript:;">鸿宇科技</a> </div>
                                <div><a href="javascript:;">鸿宇科技</a> </div>
                                <div><a href="javascript:;">鸿宇科技</a> </div>
                                <div><a href="javascript:;">鸿宇科技</a> </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>鸿宇专场</dt>
                            <dd>
                                <div><a href="javascript:;">eBestMall</a> </div>
                                <div><a href="javascript:;">eBestMall</a> </div>
                                <div><a href="javascript:;">eBestMall</a> </div>
                                <div><a href="javascript:;">eBestMall</a> </div>
                                <div><a href="javascript:;">eBestMall</a> </div>
                                <div><a href="javascript:;">eBestMall</a> </div>
                                <div><a href="javascript:;">eBestMall</a> </div>
                                <div><a href="javascript:;">eBestMall</a> </div>
                                <div><a href="javascript:;">eBestMall</a> </div>
                            </dd>
                        </dl>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- Public-Header-Main -->
    <div class="headerMain">
        <div class="w">
            <div class="logo">
                <h1><a href="<?= Yii::$app->homeUrl ?>">eBestMall<img src="<?= Html::encode($baseUrl) ?>/img/public/logo-e.png" alt="eBestMall" /> </a></h1>
            </div>
            <!-- Public-Header Search-Cart-Nav -->
            <div class="header-main-right">
                <div class="header-search-cart-bar">
                    <div class="header-search-bar">
                        <div class="header-search">
                            <form class="header-search-form" action="javascript:;" method="get">
                                <input class="header-search-form-input-text" type="text" name="key" placeholder="eBestMall" autocomplete="off" />
                                <button type="submit"><i class="icon-search"></i></button>
                            </form>
                            <div class="header-search-record">
                                <ul id="header-search-record-ul">
                                    <li class="item" title="eBestMall">
                                        <div class="item-left"><a href="javascript:;">eBestMall</a></div>
                                        <div class="item-right">搜索历史</div>
                                        <div class="item-delete"><a href="javascript:;">删除</a></div>
                                    </li>
                                    <li class="item" title="eBestMall">
                                        <div class="item-left"><a href="javascript:;">鸿宇科技</a></div>
                                        <div class="item-right">搜索历史</div>
                                        <div class="item-delete"><a href="javascript:;">删除</a></div>
                                    </li>
                                </ul>
                                <div class="close">
                                    <div class="item-left"><a href="javascript:;">清空历史</a></div>
                                    <div class="item-right"><a href="javascript:;">关闭</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="header-hot-words">
                            <ul>
                                <li class="item"><a class="active" href="javascript:;">平板电脑</a></li>
                                <li class="item"><a href="javascript:;">液晶电视</a></li>
                                <li class="item"><a href="javascript:;">家电</a></li>
                                <li class="item"><a href="javascript:;">风衣</a></li>
                                <li class="item"><a href="javascript:;">靴子</a></li>
                                <li class="item"><a href="javascript:;">亿元红包</a></li>
                                <li class="item"><a href="javascript:;">品质家电</a></li>
                                <li class="item"><a href="javascript:;">女包</a></li>
                                <li class="item"><a href="javascript:;">羽绒服</a></li>
                                <li class="item"><a href="javascript:;">笔记本</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-cart-bar">
                        <div class="header-cart">
                            <div class="header-cart-btn">
                                <i class="icon-shopping_cart"></i>
                                <a href="<?= Url::to(['cart/index']) ?>">我的购物车</a>
                                <span>0</span>
                            </div>
                            <div class="header-cart-body">
                                <div class="header-cart-spacer"></div>

                                <!-- not have goods -->
                                <div class="header-cart-prompt">
                                    <div class="no-goods"><b></b>购物车中还没有商品，赶紧选购吧！</div>
                                </div>

                                <!-- have goods -->
                                <div class="header-cart-list hide">
                                    <div class="header-cart-list-title"><h4 class="fl">最新加入的商品</h4></div>
                                    <div class="header-cart-list-goods">
                                        <ul>
                                            <li class="item">
                                                <div class="goods-img">
                                                    <a href="javascript:;" target="_blank">
                                                        <img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_img_001_small.jpg" width="50" height="50" alt="">
                                                    </a>
                                                </div>
                                                <div class="goods-name">
                                                    <a href="javascript:;" title="Apple iPhone 7 Plus (A1661) 256G 金色 移动联通电信4G手机" target="_blank">Apple iPhone 7Plus (A1661) 256G 金色 移动联通电信4G手机</a>
                                                </div>
                                                <div class="goods-detail">
                                                    <span><strong>￥7988.00</strong>×1</span> <br>
                                                    <a href="javascript:;" class="delete-goods" data-id="">删除</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="header-cart-list-total-money">
                                        <div class="p-total">共<b>1</b>件商品　共计<strong>￥ 7988.00</strong></div>
                                        <a href="//cart.jd.com/" title="去购物车" id="btn-payforgoods">去购物车</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-nav-bar">
                    <ul>
                        <li class="item"><a href="javascript:;">首页</a></li>
                        <li class="item"><a href="javascript:;">商城</a></li>
                    </ul>
                    <div class="spacer"> </div>
                    <ul>
                        <li class="item"><a href="javascript:;">秒杀</a></li>
                        <li class="item"><a href="javascript:;">优惠券</a></li>
                        <li class="item"><a href="javascript:;">团购</a></li>
                        <li class="item"><a href="javascript:;">拍卖</a></li>
                        <li class="item"><a href="javascript:;">预售</a></li>
                        <li class="item"><a href="javascript:;">服装城</a></li>
                    </ul>
                    <div class="spacer"> </div>
                    <ul>
                        <li class="item"><a href="javascript:;">本地生活</a></li>
                        <li class="item"><a href="javascript:;">全球购</a></li>
                    </ul>
                </div>
                <div class="header-activity-bar"><a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/activity.png" alt="新年红包抢不停"/></a></div>
            </div>
        </div>
    </div>
</div>