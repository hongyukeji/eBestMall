$(document).ready(function () {

    $("#add-cart").on('click', function () {
        var addCartButton = $(".goods-cart-add");
        var url = addCartButton.attr("data-url");
        var skuId = addCartButton.attr("data-sku-id");
        var productId = addCartButton.attr("data-goods-id");
        var productNum = $('.goods-number').val();
        $.ajax({
            url: url,
            type: 'post',
            data: {
                sku_id: skuId,
                product_id: productId,
                product_number: productNum
            },
            dataType: 'html',
            success: function (response) {
                //console.log(response);
                var data = JSON.parse(response);
                $('.modal-body').text(data.msg);
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                $('.modal-body').text(textStatus + '：' + XMLHttpRequest.status + ' ' + errorThrown);
            }
        });
    });

    /* Magnifier */
    magnifierProductPreview();

    function magnifierProductPreview() {
        var magnifierImgBox = $('.product-preview-main-img-box');   //中图片容器
        var magnifierImgMagnifier = $('.product-preview-main-img-box-magnifier');   //放大镜容器
        var magnifierBigImgBox = $('.product-preview-main-img-big-box');   //大图片容器
        var magnifierBigImg = $('.product-preview-main-img-big-box img');   //大图片
        magnifierImgBox.on('mouseover', function () {
            magnifierImgMagnifier.css({"display": "block"});
            magnifierBigImgBox.css({"display": "block"});
        });
        magnifierImgBox.on('mouseout', function () {
            magnifierImgMagnifier.css({"display": "none"});
            magnifierBigImgBox.css({"display": "none"});
        });
        magnifierImgBox.on('mousemove', function (ev) {
            var _event = ev || window.event;

            var left = _event.clientX + $(document).scrollLeft() - magnifierImgBox.offset().left - magnifierImgMagnifier.outerWidth() / 2;
            var top = _event.clientY + $(document).scrollTop() - magnifierImgBox.offset().top - magnifierImgMagnifier.outerHeight() / 2;

            if (left < 0) {
                left = 0;
            } else if (left > magnifierImgBox.outerWidth() - magnifierImgMagnifier.outerWidth()) {
                left = magnifierImgBox.outerWidth() - magnifierImgMagnifier.outerWidth();
            }

            if (top < 0) {
                top = 0;
            } else if (top > magnifierImgBox.outerHeight() - magnifierImgMagnifier.outerHeight()) {
                top = magnifierImgBox.outerHeight() - magnifierImgMagnifier.outerHeight();
            }

            magnifierImgMagnifier.css({left: left, top: top});

            var percentX = left / (magnifierImgBox.outerWidth() - magnifierImgMagnifier.outerWidth());
            var percentY = top / (magnifierImgBox.outerHeight() - magnifierImgMagnifier.outerHeight());
            magnifierBigImg.css({
                "left": -percentX * (magnifierBigImg.outerWidth() - magnifierBigImgBox.outerWidth()) + 'px',
                "top": -percentY * (magnifierBigImg.outerHeight() - magnifierBigImgBox.outerHeight()) + 'px'
            });
        });
    }

    /* Product preview Tab */
    tabProductPreview();

    function tabProductPreview() {
        var productPreviewWrap = $('.product-preview');
        var tabBtnPrev = $('.product-preview-thumbnail-wrap .prev');
        var tabBtnNext = $('.product-preview-thumbnail-wrap .next');
        var tabWrap = $('.product-preview-thumbnail-list ul');
        var tabPage = 1;
        var tabPageNum = 5;
        var tabNum = tabWrap.find("li").length;
        var tabWidth = tabWrap.find("li").outerWidth(true) * tabPageNum;
        var tabPageCount = Math.ceil(tabNum / tabPageNum);
        var tabImgList = $('.product-preview-thumbnail-list ul li');
        tabWrap.css("width", (tabNum * tabWrap.find("li").outerWidth(true)));

        tabImgList.eq(0).addClass('active');
        $('.product-preview-main-img-box img').attr({'src': tabImgList.eq(0).find('img').attr('data-img')});
        $('.product-preview-main-img-big-box img').attr({'src': tabImgList.eq(0).find('img').attr('data-img-big')});

        tabImgList.on('mouseover', function () {
            var _this = $(this);
            _this.addClass('active').siblings().removeClass('active');
            var previewImg = _this.find('a img').attr('data-img');
            var previewImgBig = _this.find('a img').attr('data-img-big');
            productPreviewWrap.find('.product-preview-main-img-box img').attr({'src': previewImg});
            productPreviewWrap.find('.product-preview-main-img-big-box img').attr({'src': previewImgBig});
        });
        tabBtnPrev.on('click', function () {
            if (tabPage == 1) {
                var tabPageEnd = tabWidth * tabPageCount - tabWidth;
                tabWrap.animate({left: '-=' + tabPageEnd}, 'slow');
                tabPage = tabPageCount;
            } else {
                tabWrap.animate({left: '+=' + tabWidth}, 'slow');
                tabPage--;
            }
        });
        tabBtnNext.on('click', function () {
            if (tabPage == tabPageCount) {
                tabWrap.animate({left: '0'}, 'slow');
                tabPage = 1;
            } else {
                tabWrap.animate({left: '-=' + tabWidth}, 'slow');
                tabPage++;
            }
        });
    }

    /* Transverse Tab */
    tabGoods('.product-recommend-header li', '.product-recommend-content-list', '.product-recommend-content');
    tabGoods('.product-detail-aside-tab-header li', '.product-detail-aside-item-content ul', '.product-detail-aside-item-content');

    function tabGoods(tabBtnName, tabContentName, tabContentWrapName) {
        var tabBtn = $(tabBtnName);
        var tabContent = $(tabContentName);
        var tabContentWrap = $(tabContentWrapName);
        tabBtn.on('click', function () {
            var _this = $(this);
            if (!_this.hasClass("active")) {
                _this.addClass('active').siblings('li').removeClass("active");
                _this.parent().parent().siblings(tabContentWrap).find(tabContent).eq(_this.index()).css({"display": "block"}).siblings().css({"display": "none"});
            }
        })
    }

    /* Product detail Tab */
    tabProductDetail('.product-detail-header li', '.product-detail-content', '.product-detail-content-wrap');

    function tabProductDetail(tabBtnName, tabContentName, tabContentWrapName) {
        var tabBtn = $(tabBtnName);
        var tabContent = $(tabContentName);
        var tabContentWrap = $(tabContentWrapName);
        tabBtn.on('click', function () {
            var _this = $(this);
            if (!_this.hasClass("active")) {
                var current = _this.parent().parent().siblings(tabContentWrap).find(tabContent).eq(_this.index());
                _this.addClass('active').siblings('li').removeClass("active");
                current.css({"display": "block"});
                current.nextAll().css({"display": "block"});
                current.prevAll().css({"display": "none"});
            }
        })
    }

    /* Product choose attr */
    productChooseAttr();

    function productChooseAttr() {
        var btnChooseAttr = $('.product-info-choose-attr .dd a');
        btnChooseAttr.on('click', function () {
            var _this = $(this);
            if (!_this.hasClass("disabled")) {
                _this.addClass('active').siblings().removeClass('active');
            }
            $('.product-info-choose-amount-wrap-bg').css('z-index', '1');
            var newSku = new Array();
            var url = $('.product-info-choose-attr').attr("data-url");
            var productId = $(".goods-cart-add").attr("data-goods-id");
            for (var i = 0; i < $(".product-info-choose-attr ul li").length; i++) {
                newSku.push($(".product-info-choose-attr ul li").eq(i).find('.active').attr('data-attribute-extend'));
            }
            var sku = JSON.stringify(newSku);
            $.ajax({
                url: url,
                type: 'post',
                data: {
                    id: productId,
                    sku: sku
                },
                dataType: 'html',
                success: function (data) {
                    if (data == "" || data == undefined || data == null) {
                        console.log('没有这个商品sku');
                    } else {
                        var sku = $.parseJSON(data);
                        //改变页面信息
                        $('#product-price').text(sku.price);
                        $('#product-market-price').text(sku.market_price);
                        $('#add-cart').attr('data-sku-id', sku.id);
                        $('.product-info-choose-amount-wrap-bg').css('z-index', '-1');
                    }
                }
            });
        })
    }

    /* Product choose amount */
    productChooseAmount();

    function productChooseAmount() {
        var productNumberText = $('.product-info-choose-amount .goods-number');
        var productBtnAdd = $('.product-info-choose-amount .btn-add');
        var productBtnReduce = $('.product-info-choose-amount .btn-reduce');
        var maxNumber = productNumberText.data('max');

        productNumberText.on('change', function () {
            var productNumber = productNumberText.val();
            if (parseInt(productNumber) <= 0) {
                productNumberText.attr("value", 1);
                productNumberText.val(1);
            } else if (parseInt(productNumber) > maxNumber) {
                productNumberText.attr("value", maxNumber);
                productNumberText.val(maxNumber);
            } else {
                productNumberText.attr("value", productNumber);
            }
        });

        productBtnAdd.on('click', function () {
            var productNumber = productNumberText.attr("value");
            if (productNumber < maxNumber) {
                var number = parseInt(productNumber) + 1;
                productNumberText.attr("value", number);
                productNumberText.val(number);
            }
        });
        productBtnReduce.on('click', function () {
            var productNumber = productNumberText.attr("value");
            if (productNumber > 1) {
                var number = parseInt(productNumber) - 1;
                productNumberText.attr("value", number);
                productNumberText.val(number);
            }
        });
    }

    /* Guess you like Tab */
    tabPublic('.guess-you-like-content ul', '.guess-you-like-content-footer .prev', '.guess-you-like-content-footer .next', 'height');

    function tabPublic(tabWraps, tabBtnPrevs, tabBtnNexts, tabUnitLengths) {
        var tabWrap = $(tabWraps);
        var tabBtnPrev = $(tabBtnPrevs);
        var tabBtnNext = $(tabBtnNexts);
        var tabUnitLength = tabUnitLengths;
        var tabPage = 1;
        var tabPageNum = 3;
        var tabNum = tabWrap.find("li").length;
        var tabLength = null;
        if (tabUnitLength == 'width') {
            tabLength = tabWrap.find("li").outerWidth(true) * tabPageNum;
        } else if (tabUnitLength == 'height') {
            tabLength = tabWrap.find("li").outerHeight(true) * tabPageNum;
        }

        var tabPageCount = Math.ceil(tabNum / tabPageNum);
        tabBtnPrev.on('click', function () {
            if (tabPage == 1) {
                var tabPageEnd = tabLength * tabPageCount - tabLength;
                tabWrap.animate({top: '-=' + tabPageEnd}, 'slow');
                tabPage = tabPageCount;
            } else {
                tabWrap.animate({top: '+=' + tabLength}, 'slow');
                tabPage--;
            }
        });
        tabBtnNext.on('click', function () {
            if (tabPage == tabPageCount) {
                tabWrap.animate({top: '0'}, 'slow');
                tabPage = 1;
            } else {
                tabWrap.animate({top: '-=' + tabLength}, 'slow');
                tabPage++;
            }
        });
    }

});