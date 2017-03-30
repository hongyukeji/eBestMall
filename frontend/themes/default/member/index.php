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
use ebestmall\web\EbmAsset;   // 引入 EbmAsset 资源包
EbmAsset::register($this);  // 在本视图注册此资源包
$baseUrl = $this->assetBundles[EbmAsset::className()]->baseUrl;   // 获取发布后资源包对应的临时目录
$this->registerCssFile($baseUrl .'/css/member.css', ['depends' => EbmAsset::className()]);

?>
<div class="member-index">
    <div class="m_des">
        <table border="0" style="width:870px; line-height:22px;" cellspacing="0" cellpadding="0">
            <tr valign="top">
                <td width="115"><img src="<?= Html::encode($baseUrl) ?>/img/public/user/no_login_default_avatar.jpg" width="90" height="90" /></td>
                <td>
                    <div class="m_user">Shadow</div>
                    <p>
                        等级：注册用户 <br />
                        <font color="#ff4e00">您还差 270 积分达到 分红100</font><br />
                        上一次登录时间: 2017-09-28 18:19:47<br />
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
    <table border="0" class="mon_tab" style="width:870px; margin-bottom:20px;" cellspacing="0" cellpadding="0">
        <tr>
            <td width="33%">用户等级：<span style="color:#555555;">普通会员</span></td>
            <td width="33%">消费金额：<span>￥200元</span></td>
            <td width="33%">返还积分：<span>99R</span></td>
        </tr>
        <tr>
            <td>账户余额：<span>￥200元</span></td></td>
            <td>红包个数：<span style="color:#555555;">3个</span></td></td>
            <td>红包价值：<span>￥50元</span></td></td>
        </tr>
        <tr>
            <td colspan="3">订单提醒：
                <font style="font-family:'宋体';">待付款(<span>0</span>) &nbsp; &nbsp; &nbsp; &nbsp; 待收货(<span>2</span>) &nbsp; &nbsp; &nbsp; &nbsp; 待评论(<span>1</span>)</font>
            </td>
        </tr>
    </table>

    <div class="mem_t">账号信息</div>
    <table border="0" class="acc_tab" style="width:870px;" cellspacing="0" cellpadding="0">
        <tr>
            <td class="td_l">用户ID： </td>
            <td>12345678</td>
        </tr>
        <tr>
            <td class="td_l b_none">身份证号：</td>
            <td>522124***********8</td>
        </tr>
        <tr>
            <td class="td_l b_none">电  话：</td>
            <td>186****1234</td>
        </tr>
        <tr>
            <td class="td_l">邮   箱： </td>
            <td>*******789@qq.com</td>
        </tr>
        <tr>
            <td class="td_l b_none">注册时间：</td>
            <td>2017/10/10</td>
        </tr>
        <tr>
            <td class="td_l">完成订单：</td>
            <td>0</td>
        </tr>
        <tr>
            <td class="td_l b_none">邀请人：</td>
            <td>邀请人</td>
        </tr>
        <tr>
            <td class="td_l">登录次数：</td>
            <td>3</td>
        </tr>
    </table>
</div>
