<?php
/**
 * eBestMall
 * ============================================================================
 * Copyright 2015-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/12/24 11:56
 * E-mail: hongyukeji@126.com
 * ============================================================================
 */


use yii\helpers\Html;
$css = <<< CSS

CSS;

$this->registerCss($css);

if ($messages) {
    $js = <<< JS
$('#alertTipsModal').modal();
JS;
    $this->registerJs($js);
}

?>
<div class="modal fade" id="alertTipsModal" tabindex="-1" role="dialog" aria-labelledby="alertTipsModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">系统提示</h4>
            </div>
            <div class="modal-body">

                <?php foreach ($messages as $message): ?>
                    <?php foreach ($message['list'] as $item): ?>
                        <div id="<?= $message['options']['id'] ?>" class="<?= $message['options']['class'] ?> alert"
                             role="alert">
                            <span class="sr-only">:</span>
                            <?= nl2br(Html::encode($item)) ?>
                        </div>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-success" data-dismiss="modal">知道了</button>
            </div>
        </div>
    </div>
</div>
