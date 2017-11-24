$(function () {
    replaceKeywords();  // 批量替换关键字颜色

    function replaceKeywords() {
        var keySource = $('.goods-list-wrap').data('key');
        var keyArray = new Array();
        var replaceRange = $('.goods-list-item-name a');
        keyArray = keySource.split(' ');    //字符分割
        for (var i = 0; i < keyArray.length; i++) {
            var keyItem = '<em>' + keyArray[i] + '</em>';
            replaceRange.html(replaceRange.html().replace(keyArray[i], keyItem));
        }
    }
});
