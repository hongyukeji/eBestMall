$(document).ready(function () {
    indexScroll();    // 首页-滚动-事件
    indexClickEvent();    // 首页-单击事件

    /* 首页-滚动-函数 */
    function indexScroll() {
        /* 鼠标滚动监听事件 */
        $(window).on('scroll', function () {
            /* 搜索条背景色 显示/隐藏事件*/
            if ($(window).scrollTop() > ($('.shortcut-menu').offset().top - $('.header').outerHeight())) {
                $('.header-item').fadeIn();
            } else {
                $('.header-item').fadeOut();
            }

            /* 返回顶部按钮 显示/隐藏事件 */
            var returnTop = $('.returnTop');
            if ($(window).scrollTop() > $(window).height()) {
                returnTop.fadeIn();
            } else {
                returnTop.fadeOut();
            }
        });
    }

    /* 首页-单击事件-函数 */
    function indexClickEvent() {
        /* 返回顶部按钮被单击事件 */
        $('.returnTop').click(function () {
            $('html,body').animate({scrollTop: 0}, 'fast');
        });
    }
});