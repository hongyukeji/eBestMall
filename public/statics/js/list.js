$(function () {
    replaceKeywords();  // 批量替换关键字颜色
    goodsListItemIcons();   // 商品列表icon触发弹框事件
    selectorTrig(); // 属性选择鼠标触发事件

    function replaceKeywords() {
        var keySource = $('.goods-list-wrap').data('key');
        if (keySource) {
            var replaceRange = $('.goods-list-item-name a');
            var keyArray = keySource.split(' ');    //字符分割
            $.each(keyArray, function (key, val) {
                var result = replaceRange.text().indexOf(val);
                if (result !== -1) {
                    var keyItem = '<em>' + val + '</em>';
                    replaceRange.html(replaceRange.html().replace(val, keyItem));
                }
            });
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

    function selectorTrig() {
        var trigItem = $('.trig-item-wrap');
        trigItem.hover(function () {
            var _this = $(this);
            _this.addClass('trig-item-wrap-active');
            var topDistance = _this.children('.trig-item-title').position().top + _this.children('.trig-item-title').outerHeight(true) - 1;
            _this.children('.trig-item-main').css('top', topDistance);
            _this.children('.trig-item-main').show();
        }, function () {
            var _this = $(this);
            _this.removeClass('trig-item-wrap-active');
            _this.children('.trig-item-main').hide();
        });
    }
});
