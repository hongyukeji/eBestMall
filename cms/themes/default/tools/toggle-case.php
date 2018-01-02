<?php

use yii\helpers\Html;

$this->title = '字符串大小写转换';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tools'), 'url' => ['/tools']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-5">
                <label>转换前</label>
                <?= Html::textarea('source', '', ['id' => 'source-content', 'class' => 'form-control', 'rows' => '6', 'placeholder' => '请输入需要转换的内容']) ?>
            </div>
            <div class="col-lg-2">
                <div class="row" style="margin-top: 25px;">
                    <div class="form-group">
                        <?= Html::button('全部转大写', ['id' => 'btn-capital', 'class' => 'center-block btn btn-success']) ?>
                    </div>
                    <div class="form-group">
                        <?= Html::button('全部转小写', ['id' => 'btn-lower', 'class' => 'center-block btn btn-info']) ?>
                    </div>
                    <div class="form-group">
                        <?= Html::button('首字母大写', ['id' => 'btn-capital-lower', 'class' => 'center-block btn btn-warning']) ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <label>转换后</label>
                <?= Html::textarea('now', '', ['id' => 'now-content', 'class' => 'form-control', 'rows' => '6']) ?>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function () {
        var sourceContent = $('#source-content');
        var nowContent = $('#now-content');
        var btnCapital = $('#btn-capital');
        var btnLower = $('#btn-lower');
        var btnCapitalLower = $('#btn-capital-lower');
        btnCapital.on('click', function () {
            nowContent.val(sourceContent.val().toUpperCase());
        });
        btnLower.on('click', function () {
            nowContent.val(sourceContent.val().toLowerCase());
        });
        btnCapitalLower.on('click', function () {
            nowContent.val(sourceContent.val().replace(/\b\w+\b/g, function (word) {
                return word.substring(0, 1).toUpperCase() + word.substring(1).toLowerCase();
            }));
        });
    });
</script>