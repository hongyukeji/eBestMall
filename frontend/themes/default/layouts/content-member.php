<?php
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
?>

<div id="content">

    <!-- Content-内容 -->
    <div class="content">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>

        <div class="m_content">
            <div class="m_left">
                <div class="left_n"><a href="<?= Url::to(['member/index'])?>">会员中心</a></div>
                <div class="left_m">
                    <div class="left_m_t"><i class="icon-edit"></i>订单中心</div>
                    <ul>
                        <li><a href="javascript:;">我的订单</a></li>
                        <li><a href="javascript:;">收货地址</a></li>
                        <li><a href="javascript:;">缺货登记</a></li>
                        <li><a href="javascript:;">跟踪订单</a></li>
                    </ul>
                </div>
                <div class="left_m">
                    <div class="left_m_t"><i class="icon-user-o"></i>会员信息</div>
                    <ul>
                        <!--<li><a class="active" href="javascript:;">用户信息</a></li>-->
                        <li><a href="javascript:;">用户信息</a></li>
                        <li><a href="javascript:;">我的收藏</a></li>
                        <li><a href="javascript:;">我的留言</a></li>
                        <li><a href="javascript:;">推广链接</a></li>
                        <li><a href="javascript:;">我的评论</a></li>
                    </ul>
                </div>
                <div class="left_m">
                    <div class="left_m_t"><i class="icon-coin-yen"></i>账户中心</div>
                    <ul>
                        <li><a href="javascript:;">账户安全</a></li>
                        <li><a href="javascript:;">我的红包</a></li>
                        <li><a href="javascript:;">资金管理</a></li>
                    </ul>
                </div>
                <div class="left_m">
                    <div class="left_m_t"><i class="icon-banknote"></i>分销中心</div>
                    <ul>
                        <li><a href="javascript:;">我的会员</a></li>
                        <li><a href="javascript:;">我的业绩</a></li>
                        <li><a href="javascript:;">我的佣金</a></li>
                        <li><a href="javascript:;">申请提现</a></li>
                    </ul>
                </div>
            </div>
            <div class="m_right">
                <?= $content ?>
            </div>
        </div>
    </div>

</div>