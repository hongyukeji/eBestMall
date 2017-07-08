<?php
/**
 * eBestMall
 * ============================================================================
 * Copyright © 2016-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/7/8 13:39
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */

$js = <<<JS
    $("#btn").click(function () {
        /*$.get('http://shop.com/index.php?r=test/ajax-data',{'username':'shadow','age':'28'},function (data) {
            $("#box").html(data);
        });*/
        /*$.post('http://shop.com/index.php?r=test/ajax-data',{'username':'shadow','age':'28'},function (data) {
            $("#box").html(data);
        });*/
        $.ajax({
            'url':'http://shop.com/index.php?r=test/ajax-data',
            'data':{'username':'shadow','age':'28'},
            'success':function(data) {
                $("#box").html(data);
            },
            'dataType':'html'
            //'type':'get'
            //'type':'post'
        });
    });
JS;
$this->registerJs($js, \yii\web\View::POS_END);

?>

<div class="test-ajax">
    <button id="btn">发送一个Ajax请求</button>
    <div id="box"></div>
</div>
<script type="text/javascript">

</script>