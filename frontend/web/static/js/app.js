$(function () {
    /* JavaScript Test */
    /* console.log(); */
});

/* 全局-在DOM加载完成时运行 */
$(document).ready(function () {
    clickEventOverall();    // 全局-页面鼠标点击-事件
    scrollOverall();    // 全局-滚动-事件
    sideBarOverall();    // 全局-侧边栏-事件
    searchOverall();    // 全局-input搜索框-事件

    /* 全局-页面鼠标点击-函数 */
    function clickEventOverall() {
        /* 页面鼠标点击事件 */
        $(document).click(function whichButton(event) {
            var btnNum = event.button;
            if (btnNum === 0) {
                // console.log("鼠标左键被点击！");
                // $('.header-search-record').css('display', 'none');  // 关闭搜索下拉框
            }
            /*
             if (btnNum == 2) {
             console.log("鼠标右键被点击！");
             }
             else if (btnNum == 0) {
             console.log("鼠标左键被点击！");
             } else if (btnNum == 1) {
             console.log("鼠标中键被点击！");
             } else {
             console.log("您点击了" + btnNum + "号键，我不能确定它的名称。");
             }
             */
            /* 阻止搜索下拉框冒泡事件 */
            $('.header-search').click(function (event) {
                event.stopPropagation();
            });
        });
        /* 返回顶部按钮被单击事件 */
        $('.returnTop').click(function () {
            $('html,body').animate({scrollTop: 0}, 588);
        });
    }

    /* 全局-滚动-函数 */
    function scrollOverall() {
        /* 鼠标滚动监听事件 */
        $(window).on('scroll', function () {
            /* 搜索历史列表隐藏事件 */
            var searchListBar = $('.header-search-record');
            searchListBar.css('visibility', 'hidden');

            /* 侧边栏-返回顶部按钮 显示/隐藏事件 */
            var sideBarReturnTop = $('#sideBar .returnTop');
            if ($(window).scrollTop() > $(window).height()) {
                sideBarReturnTop.fadeIn();
            } else {
                sideBarReturnTop.fadeOut();
            }
        });
    }

    /* 全局-input搜索框-函数*/
    function searchOverall() {
        var searchBar = $('.header-search');
        var searchInput = $('#header-search-form-input-public');
        var searchMenu = $('.header-search-menu-record');
        var searchMenuUl = $('.search-menu-record-wrap');
        var searchHistoryInit = new Array();

        // 搜索框单击事件
        searchInput.on('click', function () {
            showSearchMenu();
        });

        searchMenu.on('click', '.search-menu-history-key', function () {
            var _this = $(this);
            searchInput.val(_this.text());
            searchInput.attr('value', _this.text());
            $(".header-search-form").submit();
        });

        // 表单提交时触发事件
        $(".header-search-form").submit(function (e) {
            // 判断关键字是否为空
            if (!searchInput.val()) {
                if (searchInput.attr('placeholder') && searchInput.attr('placeholder') != searchInput.data('error-tips')) {
                    searchInput.val(searchInput.attr('placeholder'));
                } else {
                    searchInput.attr('placeholder', searchInput.data('error-tips'));
                    return false;
                }
            }

            var strSearchHistory = getSearchHistory();
            var keywords = searchInput.val();
            if ($.inArray(keywords, strSearchHistory) == -1) {
                strSearchHistory.unshift(keywords);
                setSearchHistory(strSearchHistory);
            } else {
                strSearchHistory.splice($.inArray(keywords, strSearchHistory), 1);
                strSearchHistory.unshift(keywords);
                setSearchHistory(strSearchHistory);
            }
        });

        // 删除按钮单击事件
        searchMenu.on('click', '.search-menu-history-delete', function () {
            var _this = $(this);
            // 获取搜索记录数组
            var strSearchHistory = getSearchHistory();
            var keyword = _this.siblings('.search-menu-history-key').text();
            var liItem = _this.parent('.search-menu-record-item');

            // 在数组中删除当前关键字
            strSearchHistory.splice($.inArray(keyword, strSearchHistory), 1);

            // 设置搜索数组
            setSearchHistory(strSearchHistory);

            // 删除当前html元素
            liItem.remove();

            // 判断关键词数量是否为0，为真则隐藏搜索菜单
            if (searchMenuUl.children().length <= 0) {
                hideSearchMenu();
            }
        });

        // 全部删除搜索缓存事件
        searchMenu.on('click', '.search-menu-history-delete-all', function () {
            allDeleteSearchHistory();
            hideSearchMenu();
        });

        // 页面鼠标点击事件
        $(document).click(function whichButton(event) {
            var btnNum = event.button;
            if (btnNum == 0) {
                hideSearchMenu();
            }
        });

        // 阻止搜索下拉框冒泡事件
        searchBar.click(function (event) {
            event.stopPropagation();
        });

        // 显示搜索菜单
        function showSearchMenu() {
            if (!localStorage.hasOwnProperty('searchHistory')) {
                initSearchHistory();
            } else {
                if (localStorage.getItem("searchHistory")) {
                    searchMenuUl.empty();
                    $.each(getSearchHistory(), function (key, val) {
                        searchMenuUl.append('<li class="search-menu-record-item"><span class="search-menu-history-key">' + val + '</span><a class="search-menu-history-delete" href="javascript:;">删除</a></li>');
                    });

                    if (searchMenuUl.children().length > 0) {
                        searchMenu.show();
                    }
                }
            }
        }

        // 隐藏搜索菜单
        function hideSearchMenu() {
            searchMenu.hide();
        }

        // 初始化搜索记录
        function initSearchHistory() {
            localStorage.setItem("searchHistory", searchHistoryInit);
        }

        // 获取搜索记录
        function getSearchHistory() {
            if (localStorage.getItem("searchHistory")) {
                return localStorage.getItem("searchHistory").split(',');
            } else {
                return searchHistoryInit;
            }
        }

        // 设置搜索记录
        function setSearchHistory(searchHistory) {
            localStorage.setItem("searchHistory", searchHistory);
        }

        // 删除全部搜索记录
        function allDeleteSearchHistory() {
            localStorage.removeItem("searchHistory");
        }

    }

    /* 全局-侧边栏-函数 */
    function sideBarOverall() {
        $(document).click(function whichButton(event) {
            var btnNum = event.button;
            if (btnNum == 0) {
                sideBarClose(); // 关闭侧边栏
            }
        });

        /* 阻止侧边栏冒泡事件 */
        $('#sideBar').click(function (event) {
            event.stopPropagation();
        });

        $('#sideBar .item .item-body .item-body-head-close a').on('click', function () {
            sideBarClose();
        });

        /* 购物车 goods div 超出显示滚动条*/
        if ($('.sideBar-cartBar-body-content').height() > ($('.sideBar-cartBar-body').height() - ($('.sideBar-cartBar-body-head').height() + $('.sideBar-cartBar-body-footer').height()))) {
            var contentHeight = $('.sideBar-cartBar-body').height() - ($('.sideBar-cartBar-body-head').height() + $('.sideBar-cartBar-body-footer').height());
            $('.sideBar-cartBar-body-content').css({
                "height": contentHeight,
                "overflow-y": "scroll",
                "overflow-x": "hidden"
            });
        }

        $('#sideBar .item-btn').on('click', function () {
            var itemAll = $('.item');
            var thisNow = $(this).parent(itemAll);
            var sideBarRight = $('#sideBar').css("right");
            var itemBody = $(this).parent(itemAll).find('.item-body').css("right");

            if (sideBarRight == "0px" && itemBody == "-270px") {
                sideBarOpen(thisNow);
            } else if (sideBarRight == "270px" && itemBody == "0px") {
                sideBarClose();
            } else if (sideBarRight == "270px" && itemBody == "-270px") {
                sideBarChange(thisNow, itemAll);
            }
        });

        function sideBarOpen(thisNow) {
            var sideBar = $('#sideBar');
            var sideBarOpen = "270px";
            var itemBg = "#C40000";
            sideBar.animate({"right": sideBarOpen}, "fast");
            thisNow.css({"background-color": itemBg}).find('.item-body').animate({"right": "0"}, "fast");
        }

        function sideBarClose() {
            var sideBar = $('#sideBar');
            var sideBarClose = "0px";
            var itemBodyClose = "-270px";
            sideBar.animate({"right": sideBarClose}, "fast");
            $('.item').css({"background-color": ""}).find('.item-body').animate({"right": itemBodyClose}, "fast");
        }

        function sideBarChange(thisNow, thisAll) {
            var itemBodyOpen = "0px";
            var itemBodyClose = "-270px";
            var itemBg = "#C40000";
            thisAll.css({"background-color": ""}).find('.item-body').animate({"right": itemBodyClose}, "fast");
            thisNow.css({"background-color": itemBg}).find('.item-body').animate({"right": itemBodyOpen}, "fast");
        }
    }
});