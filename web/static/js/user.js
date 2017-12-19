$(function () {

    goodsTabSlider($('.user-collection-goods-slider'));

    function goodsTabSlider(wrap) {
        var ulNow = wrap.find('ul');
        var prev = wrap.find('.prev');
        var next = wrap.find('.next');
        var liWidth = ulNow.children().outerWidth(true);
        var liNumber = ulNow.children().length;

        var tabPage = 1;

        prev.on('click', function () {
            if (tabPage === 1) {
                ulNow.animate({left: '-=' + liWidth * (liNumber - 1)}, 'slow');
                tabPage = liNumber;
            } else {
                ulNow.animate({left: '+=' + liWidth}, 'slow');
                tabPage--;
            }
        });

        next.on('click', function () {
            if (tabPage === liNumber) {
                ulNow.animate({left: '0px'}, 'slow');
                tabPage = 1;
            } else {
                ulNow.animate({left: '-=' + liWidth}, 'slow');
                tabPage++;
            }
        });
    }
});