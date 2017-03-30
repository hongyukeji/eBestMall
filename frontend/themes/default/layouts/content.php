<?php
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
        <?= $content ?>
    </div>

</div>