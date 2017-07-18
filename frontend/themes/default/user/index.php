<?php
/**
 * ============================================================================
 * Copyright © 2016-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/3/30 14:38
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */

use yii\helpers\Html;
use ebestmall\assets\EbmAsset;   // 引入 EbmAsset 资源包
EbmAsset::register($this);  // 在本视图注册此资源包
$baseUrl = $this->assetBundles[EbmAsset::className()]->baseUrl;   // 获取发布后资源包对应的临时目录

$this->title = Yii::t('app', 'User') . Yii::t('app', 'Center');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'User') . Yii::t('app', 'Center'), 'url' => ['user/index']];
?>
<div class="member-index">
    <div class="m_des">
        <table border="0" cellspacing="0" cellpadding="0">
            <tr valign="top">
                <td width="115"><img src="<?= Html::encode($baseUrl) ?>/img/public/user/no_login_default_avatar.jpg"
                                     width="90" height="90"/></td>
                <td>
                    <div class="m_user"><?= $model['username'] ?></div>
                    <p>
                        等级：钻石会员 <br/>
                        <font color="#ff4e00">您还差 270 积分达到 分红100</font><br/>
                        上一次登录时间：<?= date('Y-m-d H:i:s') ?><br/>
                        您还没有通过邮件认证 <a href="javascript:;" style="color:#ff4e00;">点此发送认证邮件</a>
                    </p>
                    <div class="m_notice"><i class="icon-megaphone"></i>
                        用户中心公告！
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <div class="mem_t">资产信息</div>
    <table border="0" class="mon_tab" cellspacing="0" cellpadding="0">
        <tr>
            <td width="33%">用户等级：<span style="color:#555555;">尊享VIP会员</span></td>
            <td width="33%">消费金额：<span>￥200元</span></td>
            <td width="33%">返还积分：<span>99R</span></td>
        </tr>
        <tr>
            <td>账户余额：<span>￥200元</span></td>
            </td>
            <td>红包个数：<span style="color:#555555;">3个</span></td>
            </td>
            <td>红包价值：<span>￥50元</span></td>
            </td>
        </tr>
        <tr>
            <td>订单提醒：待付款（<span>0</span>）</td>
            </td>
            <td>待收货（<span>2</span>）</td>
            </td>
            <td>待评论（<span>1</span>）</td>
            </td>
        </tr>
    </table>

    <div class="mem_t">账号信息</div>
    <table border="0" class="acc_tab" cellspacing="0" cellpadding="0">
        <tr>
            <td class="td_l b_none">真实姓名：</td>
            <td>张鸿宇</td>
        </tr>
        <tr>
            <td class="td_l b_none">身份证号：</td>
            <td>522124***********8</td>
        </tr>
        <tr>
            <td class="td_l b_none">手机号：</td>
            <td><?= $model['mobile_phone'] ?></td>
        </tr>
        <tr>
            <td class="td_l">邮 箱：</td>
            <td><?= $model['email'] ?></td>
        </tr>
        <tr>
            <td class="td_l">收货地址：</td>
            <td>中国 北京市 朝阳区 建设路1288号</td>
        </tr>
        <tr>
            <td class="td_l b_none">注册时间：</td>
            <td><?= date('Y-m-d H:i:s', $model['created_at']) ?></td>
        </tr>
    </table>
</div>
