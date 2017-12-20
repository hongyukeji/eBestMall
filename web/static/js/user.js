$(function () {

    goodsTabSlider($('.user-collection-goods-slider'));

    function goodsTabSlider(wrap) {
        var ulNow = wrap.find('ul');
        var prev = wrap.find('.prev');
        var next = wrap.find('.next');
        var liWidth = ulNow.children().outerWidth(true);
        var liNumber = ulNow.children().length;

        var tabPage = 1;
        var tabPageNum = 4;
        var tabPageCount = Math.ceil(liNumber / tabPageNum);
        var liNumberCount = liWidth * tabPageNum;

        prev.on('click', function () {
            if (tabPage === 1) {
                ulNow.animate({left: '-=' + liNumberCount * (tabPageCount - 1)}, 'slow');
                tabPage = tabPageCount;
            } else {
                ulNow.animate({left: '+=' + liNumberCount}, 'slow');
                tabPage--;
            }
        });

        next.on('click', function () {
            if (tabPage === tabPageCount) {
                ulNow.animate({left: '0px'}, 'slow');
                tabPage = 1;
            } else {
                ulNow.animate({left: '-=' + liNumberCount}, 'slow');
                tabPage++;
            }
        });
    }
});