$(function () {
    /* JavaScript Test */
    // console.log();
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
            if (btnNum == 0) {
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
        var searchInput = $('.header-search-form-input-text');
        var searchListBar = $('.header-search-record');

        var searchData = [];
        for (var i = 0; i < searchListBar.find('ul .item').length; i++) {
            searchData.push(searchListBar.find('ul .item').eq(i).find('.item-left a').text());
        }

        searchInput.keyup(function () {
            var _this = this;
            searchLists(_this);
        });
        searchInput.on('focus', function () {
            var _this = this;
            searchLists(_this);
        });
        searchBar.find('button[type="submit"]').on('click', function () {
            hideSearchList();
        });
        searchBar.find('.close .item-left').on('click', function () {
            // 后台待对接post请求-Shadow
            searchData.splice(0, searchData.length);//清空数组
            searchListBar.find('li').remove();
            hideSearchList();
        });
        searchBar.find('.close .item-right').on('click', function () {
            hideSearchList();
        });

        // 页面鼠标点击事件
        $(document).click(function whichButton(event) {
            var btnNum = event.button;
            if (btnNum == 0) {
                hideSearchList();  // 关闭搜索下拉框
            }
        });

        // 阻止搜索下拉框冒泡事件
        searchBar.click(function (event) {
            event.stopPropagation();
        });

        function searchLists(_this) {
            var searchVal = _this.value;
            var searchMatchedData = [];

            for (var i = 0; i < searchData.length; i++) {
                if (searchVal.trim().length >= 0 && searchData[i].indexOf(searchVal) > -1) {
                    searchMatchedData.push(searchData[i]);
                }
            }

            if (searchMatchedData.length > 0) {
                searchListBar.find('li').remove();
                showSearchList();
            }

            for (var i = 0; i < searchMatchedData.length; i++) {
                var ele_data_list = document.getElementById("header-search-record-ul");
                var ele_li = document.createElement('li');
                var ele_div_left = document.createElement('div');
                var ele_div_right = document.createElement('div');
                var ele_div_delete = document.createElement('div');
                var ele_div_left_a = document.createElement('a');
                var ele_div_delete_a = document.createElement('a');

                ele_div_left.setAttribute("class", "item-left");
                ele_div_left_a.setAttribute("href", "javascript:;");
                ele_div_left_a.textContent = searchMatchedData[i];

                ele_div_right.setAttribute("class", "item-right");
                ele_div_right.textContent = "搜索历史";

                ele_div_delete.setAttribute("class", "item-delete");
                ele_div_delete_a.setAttribute("href", "javascript:;");
                ele_div_delete_a.textContent = "删除";


                ele_li.setAttribute("class", "item");
                ele_div_delete_a.onclick = function () {
                    // 后台待对接post请求-Shadow
                    var arr = searchData.indexOf(this.parentNode.parentNode.firstChild.textContent);
                    searchData.splice(arr, 1);// 删除数组中当前搜索记录的值
                    this.parentNode.parentNode.remove();
                };

                ele_div_left.onclick = function () {
                    _this.value = this.textContent;
                };

                ele_div_delete.appendChild(ele_div_delete_a);
                ele_div_left.appendChild(ele_div_left_a);
                ele_li.appendChild(ele_div_left);
                ele_li.appendChild(ele_div_right);
                ele_li.appendChild(ele_div_delete);

                ele_data_list.appendChild(ele_li);
            }
        }

        function showSearchList() {
            searchListBar.css('visibility', 'visible');
        }

        function hideSearchList() {
            searchListBar.css('visibility', 'hidden');
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