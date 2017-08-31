$(document).ready(function () {
    indexClickEvent();    // 首页-单击事件
    indexScroll();    // 首页-滚动事件
    indexBannerSlider();    // 首页-轮播图
    indexNoticeTab();    // 首页-公告Tab选项卡
    indexSecKill();    // 首页-秒杀
    indexHotTab();  // 首页-Hot排行榜Tab选项卡
    indexStoreysTab();   // 首页-楼层Tab选项卡
    /* 首页-单击事件-函数 */
    function indexClickEvent() {

        /* 关闭顶部广告 */
        $('.close-event').on('click', function () {
            $(this).parent().parent().fadeOut(588);
            /* $(this).parent().next().find().addClass("hidden").removeClass("hidden");  // @父辈 parent() @同辈 siblings() next()  @儿子 find() */
        });

        /* 首页-鼠标点击事件 */
        /*
         $(document).click(function whichButton(event) {
         var btnNum = event.button;
         if (btnNum == 0) {
         // console.log("鼠标左键被点击！");
         }
         });
         */
    }

    /* 首页-滚动事件-函数 */
    function indexScroll() {
        /* 鼠标滚动监听事件 */
        $(window).on('scroll', function () {
            /* 首页顶部搜索框-返回顶部按钮 显示/隐藏事件 */
            var searchBar = $('#searchBar');
            if ($(window).scrollTop() > $(window).height()) {
                searchBar.fadeIn();
            } else {
                searchBar.fadeOut();
            }

            /* 首页-楼层导航-滚动 显示/隐藏/焦点事件 */
            var storeyName = $('.content-storey-bar');
            var storeyInitDistance = storeyName.offset().top;
            var storeyBtn = $('.content-storey-nav .item');
            var storeyHeight = $('.content-storey').outerHeight(true);
            if ($(window).scrollTop() > storeyInitDistance - 150) {
                if (document.body.clientWidth <= (1366 - 27)) {
                    $('.content-storey-nav-bar').css("left", "-35px");
                } else {
                    $('.content-storey-nav-bar').css("left", "-65px");
                }
                var storeyFloorOn = Math.round(($(window).scrollTop() - (storeyInitDistance)) / storeyHeight);
                storeyNavActive(storeyBtn.eq(storeyFloorOn));
                $('.content-storey-nav-bar').fadeIn();
            } else {
                storeyBtn.removeClass('active');
                $('.content-storey-nav-bar').fadeOut();
            }

            /* 首页-更多商品ajax数据加载事件 */
            if ($(window).scrollTop() > (storeyInitDistance + storeyName.outerHeight(true) - storeyHeight)) {
                var moreGoodsName = $('.content-more-goods');
                var ajaxUrl = moreGoodsName.attr('date-ajax');
                // console.log('ajax无限加载更多商品');
                // console.log(ajaxUrl);
            }
        });

        /* 首页-楼层按钮被单击事件 */
        $('.content-storey-nav .item').on('click', function () {
            var storeyInitDistance = $('.content-storey-bar').offset().top;
            var _this = $(this);
            var storeyNum = _this.index();
            var storeyHeight = $('.content-storey').outerHeight(true);
            storeyNavActive(_this);
            $('html,body').animate({scrollTop: storeyInitDistance + (storeyNum * storeyHeight)}, 'normal');
        });

        function storeyNavActive(_this) {
            _this.addClass('active').siblings('.item').removeClass('active');
        }

        /* 首页-楼层返回顶部按钮 */
        $('.content-storey-nav .returnTop').on('click', function () {
            $(this).siblings('.item').removeClass('active');
        })
    }

    /* 首页-轮播图-函数 */
    function indexBannerSlider() {
        var bannerSlider = new Slider($('#sliderBar'), {
            time: 5000,
            delay: 400,
            event: 'hover',
            auto: true,
            mode: 'fade',
            controller: $('#sliderIndicator'),
            activeControllerCls: 'active'
        });
        $('#sliderBar .slider-prev').click(function () {
            bannerSlider.prev()
        });
        $('#sliderBar .slider-next').click(function () {
            bannerSlider.next()
        });
        function Slider(container, options) {
            /*
             options = {
             auto: true,
             time: 3000,
             event: 'hover' | 'click',
             mode: 'slide | fade',
             controller: $(),
             activeControllerCls: 'className',
             exchangeEnd: $.noop
             }
             */

            "use strict"; //stirct mode not support by IE9-

            if (!container) return;

            var options = options || {},
                currentIndex = 0,
                cls = options.activeControllerCls,
                delay = options.delay,
                isAuto = options.auto,
                controller = options.controller,
                event = options.event,
                interval,
                slidesWrapper = container.children().first(),
                slides = slidesWrapper.children(),
                length = slides.length,
                childWidth = container.width(),
                totalWidth = childWidth * slides.length;

            function init() {
                var controlItem = controller.children();

                mode();

                event == 'hover' ? controlItem.mouseover(function () {
                        stop();
                        var index = $(this).index();

                        play(index, options.mode);
                    }).mouseout(function () {
                        isAuto && autoPlay();
                    }) : controlItem.click(function () {
                        stop();
                        var index = $(this).index();

                        play(index, options.mode);
                        isAuto && autoPlay();
                    });

                isAuto && autoPlay();
            }

            //animate mode
            function mode() {
                var wrapper = container.children().first();

                options.mode == 'slide' ? wrapper.width(totalWidth) : wrapper.children().css({
                        'position': 'absolute',
                        'left': 0,
                        'top': 0
                    })
                        .first().siblings().hide();
            }

            //auto play
            function autoPlay() {
                interval = setInterval(function () {
                    triggerPlay(currentIndex);
                }, options.time);
            }

            //trigger play
            function triggerPlay(cIndex) {
                var index;

                (cIndex == length - 1) ? index = 0 : index = cIndex + 1;
                play(index, options.mode);
            }

            //play
            function play(index, mode) {
                slidesWrapper.stop(true, true);
                slides.stop(true, true);

                mode == 'slide' ? (function () {
                        if (index > currentIndex) {
                            slidesWrapper.animate({
                                left: '-=' + Math.abs(index - currentIndex) * childWidth + 'px'
                            }, delay);
                        } else if (index < currentIndex) {
                            slidesWrapper.animate({
                                left: '+=' + Math.abs(index - currentIndex) * childWidth + 'px'
                            }, delay);
                        } else {
                            return;
                        }
                    })() : (function () {
                        if (slidesWrapper.children(':visible').index() == index) return;
                        slidesWrapper.children().fadeOut(delay).eq(index).fadeIn(delay);
                    })();

                try {
                    controller.children('.' + cls).removeClass(cls);
                    controller.children().eq(index).addClass(cls);
                } catch (e) {
                }

                currentIndex = index;

                options.exchangeEnd && typeof options.exchangeEnd == 'function' && options.exchangeEnd.call(this, currentIndex);
            }

            //stop
            function stop() {
                clearInterval(interval);
            }

            //prev frame
            function prev() {
                stop();

                currentIndex == 0 ? triggerPlay(length - 2) : triggerPlay(currentIndex - 2);

                isAuto && autoPlay();
            }

            //next frame
            function next() {
                stop();

                currentIndex == length - 1 ? triggerPlay(-1) : triggerPlay(currentIndex);

                isAuto && autoPlay();
            }

            //init
            init();

            //expose the Slider API
            return {
                prev: function () {
                    prev();
                },
                next: function () {
                    next();
                }
            }
        }
    }

    /* 首页-公告Tab选项卡-函数 */
    function indexNoticeTab() {
        var tabTitle = $('.content-focus-right-middle-tab-title li');
        var tabBody = $('.content-focus-right-middle-tab-body ul');
        tabTitle.on('mouseover', function () {
            var index = tabTitle.index(this);
            tabTitle.eq(index).find('a').addClass('active').parent().siblings().find('a').removeClass('active');
            tabBody.eq(index).show().siblings().hide();
        });
    }

    /* 首页-秒杀-函数 */
    function indexSecKill() {
        var tabBar = $('.content-sec-kill-body-list-wrapper ul');
        var tabPrev = $('.content-sec-kill-body-list-wrapper-navigate-prev');
        var tabNext = $('.content-sec-kill-body-list-wrapper-navigate-next');
        var tabBarWidth = tabBar.width();
        var tabPage = 1;
        var tabPageNum = 5;
        var tabBarNum = tabBar.find(".item").length;
        var tabPageCount = Math.ceil(tabBarNum / tabPageNum);

        tabNext.click(function () {
            if (tabPage == tabPageCount) {
                tabBar.animate({left: '0px'}, 'slow');
                tabPage = 1;
            } else {
                tabBar.animate({left: '-=' + tabBarWidth}, 'slow');
                tabPage++;
            }
        });
        tabPrev.click(function () {
            if (tabBar.css('left') == '0px' || tabBar.css('left') == 'auto') {
                var _tabPageNum = tabPageNum - 1;
                tabBar.animate({left: '-' + _tabPageNum * tabBarWidth}, 'slow');
                tabPage = tabPageCount;
            } else {
                tabBar.animate({left: '+=' + tabBarWidth}, 'slow');
                tabPage--;
            }
        });
    }

    /* 首页-Hot排行榜Tab选项卡-函数 */
    function indexHotTab() {
        var tabTitle = $('.content-hot-content-title li');
        var tabBody = $('.content-hot-content-body ul');
        tabTitle.on('mouseover', function () {
            var index = tabTitle.index(this);
            tabTitle.eq(index).find('a').addClass('active').parent().siblings().find('a').removeClass('active');
            tabBody.eq(index).show().siblings().hide();
        });
    }

    /* 首页-楼层Tab选项卡-函数 */
    function indexStoreysTab() {
        var tabBtnPrev = $('.content-storey-bar .tab .tab-btn .prev');
        var tabBtnNext = $('.content-storey-bar .tab .tab-btn .next');

        tabBtnPrev.on('click', function () {
            var _this = $(this);
            var tabBtnName = this.className;
            var tabName = _this.parent().parent();
            storeyTab(tabName, tabBtnName);
        });
        tabBtnNext.on('click', function () {
            var _this = $(this);
            var tabBtnName = this.className;
            var tabName = _this.parent().parent();
            storeyTab(tabName, tabBtnName);
        });

        function storeyTab(tabName, tabBtnName) {
            var tabBar = $(tabName);
            var tabPages = 1;
            var tabPageNum = 6;
            if (tabBar.outerWidth(true) > 600) {
                tabPageNum = 12;
            } else {
                tabPageNum = 6;
            }
            var tabNum = tabBar.find("ul li").length;
            var tabWidth = tabBar.find("li").outerWidth(true) * tabPageNum;
            var tabPageCount = Math.ceil(tabNum / tabPageNum);
            tabBar.find("ul").css("width", (tabNum * tabBar.find("li").outerWidth(true)));

            if (tabBtnName == 'next') {
                tabBarNext(tabPages);
            }
            if (tabBtnName == 'prev') {
                tabBarPrev(tabPages);
            }

            function tabBarNext(tabPages) {
                if (isNaN(tabBar.attr('data-page')) == true) {
                    tabBar.attr('data-page', tabPages);
                }
                var tabPage = tabBar.attr('data-page');
                if (tabPage == tabPageCount) {
                    tabBar.find("ul").animate({left: '0'}, 'slow');
                    tabPage = 1;
                } else {
                    tabBar.find("ul").animate({left: '-=' + tabWidth}, 'slow');
                    tabPage++;
                }
                tabBar.attr('data-page', tabPage);
            }

            function tabBarPrev(tabPages) {
                if (isNaN(tabBar.attr('data-page')) == true) {
                    tabBar.attr('data-page', tabPages);
                }
                var tabPage = tabBar.attr('data-page');
                if (tabPage == 1) {
                    var tabPageEnd = tabWidth * tabPageCount - tabWidth;
                    tabBar.find("ul").animate({left: '-=' + tabPageEnd}, 'slow');
                    tabPage = tabPageCount;
                } else {
                    tabBar.find("ul").animate({left: '+=' + tabWidth}, 'slow');
                    tabPage--;
                }
                tabBar.attr('data-page', tabPage);
            }

        }
    }
});