$(function () {

    tabSwitchBrowse();

    function tabSwitchBrowse() {
        var tabMain = $('.user-browsing-history-wrap');
        var prevBtn = tabMain.find('.prev');
        var nextBtn = tabMain.find('.next');
        var tabUl = tabMain.find('ul');
        var childrenNumber = tabUl.children().length;
        var tabPage = 1;
        var tabPageNum = 4;
        var tabPageCount = Math.ceil(childrenNumber / tabPageNum);

        prevBtn.on('click', function () {
            if (tabPage === 1) {
                tabUl.animate({left: '-=' + (tabUl.children().outerWidth(true) * tabPageNum) * (tabPageCount - 1)}, 'slow');
                tabPage = tabPageCount;
            } else {
                tabUl.animate({left: '+=' + (tabUl.children().outerWidth(true) * tabPageNum)}, 'slow');
                tabPage--;
            }
        });

        nextBtn.on('click', function () {
            if (tabPage === tabPageCount) {
                tabUl.animate({left: '0px'}, 'slow');
                tabPage = 1;
            } else {
                tabUl.animate({left: '-=' + (tabUl.children().outerWidth(true) * tabPageNum)}, 'slow');
                tabPage++;
            }
        });
    }

    tabSwitchShop();

    function tabSwitchShop() {
        var tabMain = $('.user-collection-shop');
        var prevBtn = tabMain.find('.prev');
        var nextBtn = tabMain.find('.next');
        var tabUl = tabMain.find('ul');
        var childrenNumber = tabUl.children().length;
        var tabPage = 1;
        var tabPageNum = 4;
        var tabPageCount = Math.ceil(childrenNumber / tabPageNum);

        prevBtn.on('click', function () {
            if (tabPage === 1) {
                tabUl.animate({left: '-=' + (tabUl.children().outerWidth(true) * tabPageNum) * (tabPageCount - 1)}, 'slow');
                tabPage = tabPageCount;
            } else {
                tabUl.animate({left: '+=' + (tabUl.children().outerWidth(true) * tabPageNum)}, 'slow');
                tabPage--;
            }
        });

        nextBtn.on('click', function () {
            if (tabPage === tabPageCount) {
                tabUl.animate({left: '0px'}, 'slow');
                tabPage = 1;
            } else {
                tabUl.animate({left: '-=' + (tabUl.children().outerWidth(true) * tabPageNum)}, 'slow');
                tabPage++;
            }
        });
    }

    goodsTabSlider($('.user-collection-goods-slider'));

    function goodsTabSlider(wrap) {
        var ulNow = wrap.find('ul');
        var prev = wrap.find('.prev');
        var next = wrap.find('.next');
        var liNumber = ulNow.children().length;

        var tabPage = 1;
        var tabPageNum = 4;
        var tabPageCount = Math.ceil(liNumber / tabPageNum);

        prev.on('click', function () {
            if (tabPage === 1) {
                ulNow.animate({left: '-=' + (ulNow.children().outerWidth(true) * tabPageNum) * (tabPageCount - 1)}, 'slow');
                tabPage = tabPageCount;
            } else {
                ulNow.animate({left: '+=' + (ulNow.children().outerWidth(true) * tabPageNum)}, 'slow');
                tabPage--;
            }
        });

        next.on('click', function () {
            if (tabPage === tabPageCount) {
                ulNow.animate({left: '0px'}, 'slow');
                tabPage = 1;
            } else {
                ulNow.animate({left: '-=' + (ulNow.children().outerWidth(true) * tabPageNum)}, 'slow');
                tabPage++;
            }
        });
    }
});