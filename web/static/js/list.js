$(function () {
    replaceKeywords();  // 批量替换关键字颜色
    goodsListItemIcons();   // 商品列表icon触发弹框事件

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

    function goodsListItemIcons() {
        var icon = $('.item-icons-wrap');
        icon.hover(function () {
            var _this = $(this);
            var tipsTop = _this.position().top + _this.outerHeight() + 15;
            var triangleLeft = _this.position().left + (_this.children('.item-icons').width() / 2) - 2;
            _this.children('.item-icons-tips').children('.item-icons-triangle').css('left', triangleLeft);
            _this.children('.item-icons-tips').css('top', tipsTop);
            _this.children('.item-icons-tips').show();
        }, function () {
            icon.children('.item-icons-tips').hide();
        });
    }
});
