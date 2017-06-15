<?php
/**
 * ============================================================================
 * Copyright © 2016-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/3/30 20:42
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */

use yii\helpers\Html;
use ebestmall\web\EbmAsset;

EbmAsset::register($this);

$baseUrl = $this->assetBundles[EbmAsset::className()]->baseUrl;
$this->registerCssFile($baseUrl .'/css/cart.css', ['depends' => EbmAsset::className()]);
$this->registerJsFile($baseUrl .'/js/cart.js',['depends' => EbmAsset::className()]);

$this->title = Yii::$app->params['name'];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app','Cart'),'url' => ['cart/index']];
$this->params['breadcrumbs'][] = Yii::t('app', 'My') . Yii::t('app', 'Cart');
?>
<div class="cart-index">
    <div class="my-cart">
        <div class="cart-title">
            <div class="see-cart active"><span>1</span>我的购物车<div class="back"></div></div>
            <div class="firm-order"><div class="front"></div><span>2</span>确认订单信息<div class="back"></div></div>
            <div class="place-order"><div class="front"></div><span>3</span>成功提交订单</div>
        </div>
        <div class="cart-header">
            <div class="cart-checkbox">
                <input class="cart-checkbox-all checkbox" type="checkbox" id="cart-checkbox-all">
                <label for="cart-checkbox-all">全选</label>
            </div>
            <div class="cart-goods">商品</div>
            <div class="cart-attribute">属性</div>
            <div class="cart-price">单价</div>
            <div class="cart-number">数量</div>
            <div class="cart-subtotal">小计</div>
            <div class="cart-operation">操作</div>
        </div>
        <div class="cart-body">
            <div class="cart-list-wrap">


                <div class="cart-list">
                    <div class="cart-list-body">
                        <div class="cart-list-body-shop">
                            <div class="cart-checkbox cart-checkbox-list-all">
                                <input class="checkbox" type="checkbox">
                            </div>
                            <div class="cart-shop-name"><a href="javascript:;">网站自营</a></div>
                        </div>
                        <div class="cart-list-body-info-wrap">
                            <?php foreach ($model as $k => $v) { ?>

                            <div class="cart-list-body-info">
                                <div class="cart-list-body-info-item-form">
                                    <div class="item cart-checkbox">
                                        <input class="cart-goods-id checkbox" type="checkbox" value="">
                                    </div>
                                    <div class="item goods">
                                        <div class="goods-item">
                                            <div class="goods-item-img">
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_002.jpg" width="100" height="100" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="goods-item">
                                            <div class="goods-item-info">
                                                <div class="goods-item-info-name"><a href="javascript:;"><?= $v['goodsId'] ?> - 苹果 Apple iPhone7 4G手机 黑色 移动联通版(32G)</a></div>
                                                <div class="goods-item-info-extend">
                                                    <div class="goods-item-info-extend-item"><a href="javascript:;"><i class="icon-shield"></i>支持7天无理由退货</a></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="item attribute">
                                        <div class="goods-attribute">
                                            <div class="goods-attribute-list">颜色：黑色</div>
                                            <div class="goods-attribute-list">尺码：移动联通版(32G)</div>
                                        </div>
                                    </div>
                                    <div class="item price"><strong>¥<span class="cart-goods-unit-price"><?= $v['goodsPrice'] ?></span></strong></div>
                                    <div class="item number">
                                        <div class="cart-goods-number">
                                            <a href="javascript:;" class="increase"><i class="icon-increase"></i></a>
                                            <input type="text" class="goods-number-input" value="<?= $v['goodsNumber'] ?>">
                                            <a href="javascript:;" class="decrease"><i class="icon-decrease"></i></a>
                                        </div>
                                    </div>
                                    <div class="item subtotal"><strong>¥<span class="cart-goods-subtotal"><?= $v['goodsPrice'] * $v['goodsNumber'] ?></span></strong></div>
                                    <div class="item operation">
                                        <a href="javascript:;">删除</a>
                                        <a href="javascript:;">移入收藏夹</a>
                                    </div>
                                </div>
                                <div class="cart-list-body-info-item-extra"></div>
                            </div>

                            <?php } ?>
                        </div>
                    </div>
                </div>


                <!--默认演示商品列表↓↓↓-->

                <div class="cart-list hide">
                    <div class="cart-list-body">
                        <div class="cart-list-body-shop">
                            <div class="cart-checkbox cart-checkbox-list-all">
                                <input class="checkbox" type="checkbox">
                            </div>
                            <div class="cart-shop-name"><a href="javascript:;">网站自营</a></div>
                        </div>
                        <div class="cart-list-body-info-wrap">
                            <div class="cart-list-body-info">
                                <div class="cart-list-body-info-item-form">
                                    <div class="item cart-checkbox">
                                        <input class="cart-goods-id checkbox" type="checkbox" value="">
                                    </div>
                                    <div class="item goods">
                                        <div class="goods-item">
                                            <div class="goods-item-img">
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_002.jpg" width="100" height="100" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="goods-item">
                                            <div class="goods-item-info">
                                                <div class="goods-item-info-name"><a href="javascript:;">苹果 Apple iPhone7 4G手机 黑色 移动联通版(32G)</a></div>
                                                <div class="goods-item-info-extend">
                                                    <div class="goods-item-info-extend-item"><a href="javascript:;"><i class="icon-shield"></i>支持7天无理由退货</a></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="item attribute">
                                        <div class="goods-attribute">
                                            <div class="goods-attribute-list">颜色：黑色</div>
                                            <div class="goods-attribute-list">尺码：移动联通版(32G)</div>
                                        </div>
                                    </div>
                                    <div class="item price"><strong>¥<span class="cart-goods-unit-price">6999.00</span></strong></div>
                                    <div class="item number">
                                        <div class="cart-goods-number">
                                            <a href="javascript:;" class="increase"><i class="icon-increase"></i></a>
                                            <input type="text" class="goods-number-input" value="1">
                                            <a href="javascript:;" class="decrease"><i class="icon-decrease"></i></a>
                                        </div>
                                    </div>
                                    <div class="item subtotal"><strong>¥<span class="cart-goods-subtotal">6999.00</span></strong></div>
                                    <div class="item operation">
                                        <a href="javascript:;">删除</a>
                                        <a href="javascript:;">移入收藏夹</a>
                                    </div>
                                </div>
                                <div class="cart-list-body-info-item-extra"></div>
                            </div>
                            <div class="cart-list-body-info">
                                <div class="cart-list-body-info-item-form">
                                    <div class="item cart-checkbox">
                                        <input class="cart-goods-id checkbox" type="checkbox" value="">
                                    </div>
                                    <div class="item goods">
                                        <div class="goods-item">
                                            <div class="goods-item-img">
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_002.jpg" width="100" height="100" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="goods-item">
                                            <div class="goods-item-info">
                                                <div class="goods-item-info-name"><a href="javascript:;">苹果 Apple iPhone7 4G手机 黑色 移动联通版(32G)</a></div>
                                                <div class="goods-item-info-extend">
                                                    <div class="goods-item-info-extend-item"><a href="javascript:;"><i class="icon-shield"></i>支持7天无理由退货</a></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="item attribute">
                                        <div class="goods-attribute">
                                            <div class="goods-attribute-list">颜色：黑色</div>
                                            <div class="goods-attribute-list">尺码：移动联通版(32G)</div>
                                        </div>
                                    </div>
                                    <div class="item price"><strong>¥<span class="cart-goods-unit-price">6999.00</span></strong></div>
                                    <div class="item number">
                                        <div class="cart-goods-number">
                                            <a href="javascript:;" class="increase"><i class="icon-increase"></i></a>
                                            <input type="text" class="goods-number-input" value="1">
                                            <a href="javascript:;" class="decrease"><i class="icon-decrease"></i></a>
                                        </div>
                                    </div>
                                    <div class="item subtotal"><strong>¥<span class="cart-goods-subtotal">6999.00</span></strong></div>
                                    <div class="item operation">
                                        <a href="javascript:;">删除</a>
                                        <a href="javascript:;">移入收藏夹</a>
                                    </div>
                                </div>
                                <div class="cart-list-body-info-item-extra"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cart-list hide">
                    <div class="cart-list-body">
                        <div class="cart-list-body-shop">
                            <div class="cart-checkbox cart-checkbox-list-all">
                                <input class="checkbox" type="checkbox">
                            </div>
                            <div class="cart-shop-name"><a href="javascript:;">第三方商家</a></div>
                        </div>
                        <div class="cart-list-body-info-wrap">
                            <div class="cart-list-body-info">
                                <div class="cart-list-body-info-item-form">
                                    <div class="item cart-checkbox">
                                        <input class="cart-goods-id checkbox" type="checkbox" value="">
                                    </div>
                                    <div class="item goods">
                                        <div class="goods-item">
                                            <div class="goods-item-img">
                                                <a href="javascript:;"><img src="<?= Html::encode($baseUrl) ?>/img/temp/temp-goods_002.jpg" width="100" height="100" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="goods-item">
                                            <div class="goods-item-info">
                                                <div class="goods-item-info-name"><a href="javascript:;">苹果 Apple iPhone7 4G手机 黑色 移动联通版(32G)</a></div>
                                                <div class="goods-item-info-extend">
                                                    <div class="goods-item-info-extend-item"><a href="javascript:;"><i class="icon-shield"></i>支持7天无理由退货</a></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="item attribute">
                                        <div class="goods-attribute">
                                            <div class="goods-attribute-list">颜色：黑色</div>
                                            <div class="goods-attribute-list">尺码：移动联通版(32G)</div>
                                        </div>
                                    </div>
                                    <div class="item price"><strong>¥<span class="cart-goods-unit-price">6999.00</span></strong></div>
                                    <div class="item number">
                                        <div class="cart-goods-number">
                                            <a href="javascript:;" class="increase"><i class="icon-increase"></i></a>
                                            <input type="text" class="goods-number-input" value="1">
                                            <a href="javascript:;" class="decrease"><i class="icon-decrease"></i></a>
                                        </div>
                                    </div>
                                    <div class="item subtotal"><strong>¥<span class="cart-goods-subtotal">6999.00</span></strong></div>
                                    <div class="item operation">
                                        <a href="javascript:;">删除</a>
                                        <a href="javascript:;">移入收藏夹</a>
                                    </div>
                                </div>
                                <div class="cart-list-body-info-item-extra"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart-footer">
            <div class="cart-checkbox cart-footer-item">
                <input class="cart-checkbox-all checkbox" type="checkbox" id="cart-footer-checkbox-all">
                <label for="cart-footer-checkbox-all">全选</label>
            </div>
            <div class="cart-footer-operation cart-footer-item">
                <a href="javascript:;">删除</a>
                <a href="javascript:;">清除失效商品</a>
                <a href="javascript:;">移入收藏夹</a>
            </div>
            <div class="cart-footer-right">
                <div class="cart-footer-amount-sum cart-footer-item">已选商品 <em class="cart-goods-total-number">3</em> 件</div>
                <div class="cart-footer-total cart-footer-item">总价（不含运费）：<em>¥<span class="cart-goods-total-price">20997.00</span></em></div>
                <div class="cart-footer-btn-area cart-footer-item"><button type="submit">结&nbsp;算</button></div>
            </div>
        </div>
    </div>
</div>