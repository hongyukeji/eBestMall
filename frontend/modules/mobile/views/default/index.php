<?php
use ebestmall\web\EbmMobileAsset;   // 引入 EbmMobileAsset 资源包
EbmMobileAsset::register($this);  // 在本视图注册此资源包
$baseUrl = $this->assetBundles[EbmMobileAsset::className()]->baseUrl;   // 获取发布后资源包对应的临时目录

//$this->registerCssFile($baseUrl .'/css/index.css', ['depends' => EbmMobileAsset::className()]); // 视图引用单独文件示例
$this->registerJsFile($baseUrl .'/js/index.js',['depends' => EbmMobileAsset::className()]);

?>
<div class="content-wrap">
    <div class="slide"></div>
    <div class="shortcut-menu">
        <ul>
            <li><a href="javascript:;">团购</a></li>
            <li><a href="javascript:;">一元购</a></li>
            <li><a href="javascript:;">秒杀</a></li>
            <li><a href="javascript:;">本地生活</a></li>
            <li><a href="javascript:;">众筹</a></li>

            <li><a href="javascript:;">团购</a></li>
            <li><a href="javascript:;">一元购</a></li>
            <li><a href="javascript:;">秒杀</a></li>
            <li><a href="javascript:;">本地生活</a></li>
            <li><a href="javascript:;">众筹</a></li>

        </ul>
    </div>

    <div class="returnTop"><a href="javascript:;"><i class="icon-arrow-up"></i></a></div>
</div>