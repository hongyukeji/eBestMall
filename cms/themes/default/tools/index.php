<?php

use yii\helpers\Url;

$this->title = '工具大全';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app','Tools'),'url' => ['/tools']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="col-lg-2">

</div>
<div class="col-lg-10">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">常用工具</h3>
            </div>
            <div class="panel-body">
                <!-- Standard button -->
                <a href="<?= Url::toRoute(['/tools/toggle-case'])?>" type="button" class="btn btn-default">字符串大小写转换</a>
            </div>
        </div>
    </div>

    <div class="row hidden">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">常用按钮样式</h3>
            </div>
            <div class="panel-body">
                <!-- Standard button -->
                <button type="button" class="btn btn-default">（默认样式）Default</button>

                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                <button type="button" class="btn btn-primary">（首选项）Primary</button>

                <!-- Indicates a successful or positive action -->
                <button type="button" class="btn btn-success">（成功）Success</button>

                <!-- Contextual button for informational alert messages -->
                <button type="button" class="btn btn-info">（一般信息）Info</button>

                <!-- Indicates caution should be taken with this action -->
                <button type="button" class="btn btn-warning">（警告）Warning</button>

                <!-- Indicates a dangerous or potentially negative action -->
                <button type="button" class="btn btn-danger">（危险）Danger</button>

                <!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
                <button type="button" class="btn btn-link">（链接）Link</button>
            </div>
        </div>
    </div>
</div>
