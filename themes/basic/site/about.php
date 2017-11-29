<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->registerCssFile('static/css/article.css', ['depends' => app\assets\AppAsset::className()]);

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-about">
    <div class="article">
    <div class="article-left">
        <div class="article-left-title">
            <h2>文章分类</h2>
        </div>
        <div class="article-left-content">
            <ul>
                <li>
                    <a href="#">企业动态</a>
                </li>
                <li><a href="#">关于我们</a></li>
                <li><a href="#">联系我们</a></li>
                <li><a href="#">投诉与建议</a></li>
            </ul>
        </div>
    </div>
    <div class="article-right">
        <div class="article-detail">
            <div class="article-title">
                <h1>关于我们</h1>
                <div class="summary">
                    <span>时间：2017-11-18 18:18:18</span>
                    <div class="partake">
                        <span>分享到：</span>
                        <a href="#" title="分享到腾讯微博" target="_blank"><i class="fa fa-qq" aria-hidden="true"></i></a>
                        <a href="#" title="分享到人人" target="_blank"><i class="fa fa-renren fa-lg" aria-hidden="true"></i></a>
                        <a href="#" title="分享到新浪微博" target="_blank"><i class="fa fa-weibo fa-lg" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="article-content">
                <p>鸿宇科技有限公司是一家以信息技术服务为主导、立足于高科技领域的前沿，专业致力于网络Web开发及应用的高科技企业。本着“质量第一、诚信为本”的朴素经营理念，以务实创新的精神不断进行开拓实践和探索进取。</p>
            </div>
        </div>
    </div>
</div>
</div>
