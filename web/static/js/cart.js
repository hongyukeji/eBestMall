$(document).ready(function () {

    cartClickEvent();

    function cartClickEvent() {
        cartScroll();
        cartGoodsNumber();
        cartCheckbox();
    }

    /* Cart Scroll Event */
    function cartScroll() {
        $(window).on('scroll', function () {
            var cartList = $('.my-cart');
            var cartFooter = $('.cart-footer');
            var className = 'cart-footer-fixed';
            var triggerHeight = cartList.offset().top + cartList.outerHeight(true) - $(window).height();
            if ($(window).scrollTop() > triggerHeight) {
                cartFooter.removeClass(className);
            } else {
                cartFooter.addClass(className);
            }
        });
    }

    /* Cart Goods Number */
    function cartGoodsNumber() {
        var NumberValue = $('.cart-goods-number .goods-number-input');
        var maxNumber = NumberValue.data('max');

        function isPositiveInteger(s) {
            var re = /^[0-9]+$/;
            return re.test(s);
        }

        NumberValue.on('change', function () {
            var index = NumberValue.index(this);
            var Number = NumberValue.eq(index).val();
            if (isPositiveInteger(Number)) {
                if (Number <= 0) {
                    NumberValue.eq(index).val(1);
                    NumberValue.eq(index).attr("value", parseInt(1));
                } else if (Number > maxNumber) {
                    NumberValue.eq(index).val(maxNumber);
                    NumberValue.eq(index).attr("value", parseInt(maxNumber));
                } else {
                    NumberValue.eq(index).attr("value", NumberValue.eq(index).val());
                }
            } else {
                NumberValue.attr("value", 1);
                NumberValue.val(1);
            }
            calcTotalPrice();
        });

        var BtnIncrease = $('.cart-goods-number .increase');
        var BtnDecrease = $('.cart-goods-number .decrease');
        var inputName = '.goods-number-input';

        BtnIncrease.on('click', function () {
            var _this = this;
            var Number = $(_this).siblings(inputName).attr("value");
            if (parseInt(Number) < maxNumber) {
                $(_this).siblings(inputName).attr("value", parseInt(Number) + 1);
                $(_this).siblings(inputName).val(parseInt(Number) + 1);
                CalculatePrice($(_this).siblings(inputName));
            }
            calcTotalPrice();
        });
        BtnDecrease.on('click', function () {
            var _this = this;
            var Number = $(_this).siblings(inputName).attr("value");
            if (parseInt(Number) > 1) {
                $(_this).siblings(inputName).attr("value", parseInt(Number) - 1);
                $(_this).siblings(inputName).val(parseInt(Number) - 1);
                CalculatePrice($(_this).siblings(inputName));
            }
            calcTotalPrice();
        });

        /* Cart Price */
        var cartListItem = '.cart-list-body-info-item-form';
        var cartNumber = $('.goods-number-input');
        var cartUnitPrice = $('.cart-goods-unit-price');
        var cartSubtotal = $('.cart-goods-subtotal');
        var cartTotalPrice = $('.cart-goods-total-price');
        var cartTotalNumber = $('.cart-goods-total-number');
        cartNumber.change(function () {
            var _this = $(this);
            CalculatePrice(_this);
        });

        function CalculatePrice(_this) {
            var _Number = _this.attr("value");
            var _UnitPrice = _this.parents(cartListItem).find(cartUnitPrice).text();
            var _Subtotal = (_UnitPrice * _Number).toFixed(2);
            _this.parents(cartListItem).find(cartSubtotal).text(_Subtotal);
            // cartTotal();
        }

        function cartTotal() {
            var _TotalPrice = 0;
            var _TotalNumber = 0;
            cartNumber.each(function () {
                var _NumberThis = $(this);
                _TotalNumber += parseFloat(_NumberThis.val()) * 1;
            });
            cartSubtotal.each(function () {
                var _SubtotalThis = $(this);
                _TotalPrice += parseFloat(_SubtotalThis.text()) * 1;
            });

            cartTotalNumber.text(_TotalNumber);
            cartTotalPrice.text(_TotalPrice.toFixed(2));
        }
    }

    /* Cart Checkbox */
    function cartCheckbox() {
        var cartCheckboxAll = $('.cart-checkbox-all');
        var cartCheckboxWrap = $('.cart-list');
        var cartCheckbox = $('.cart-checkbox-list-all .checkbox');

        cartCheckboxAll.on('click', function () {
            $('.my-cart').find($('.checkbox')).prop('checked', this.checked);
            calcTotalPrice();
        });

        cartCheckboxWrap.find(cartCheckbox).on('click', function () {
            if ($(this).prop('checked') === true) {
                if ($(this).parents('.cart-list').siblings('.cart-list').find(cartCheckbox).prop('checked') !== false) {
                    cartCheckboxAll.prop('checked', this.checked);
                }
            } else {
                $('.my-cart').find(cartCheckboxAll).prop('checked', this.checked);
            }
            $(this).parents('.cart-list-body-shop').siblings('.cart-list-body-info-wrap').find('.checkbox').prop('checked', this.checked);
            calcTotalPrice();
        });

        $('.cart-list-body-info-wrap').find('.checkbox').on('click', function () {
            if ($(this).prop('checked') === true) {
                if ($(this).parents('.cart-list-body-info').siblings('.cart-list-body-info').find('.checkbox').prop('checked') !== false) {
                    $(this).parentsUntil(cartCheckboxWrap).find(cartCheckbox).prop('checked', this.checked);
                    if ($(this).parents('.cart-list').siblings('.cart-list').find(cartCheckbox).prop('checked') === true) {
                        cartCheckboxAll.prop('checked', this.checked);
                    }
                }
            } else {
                cartCheckboxAll.prop('checked', this.checked);
                $(this).parentsUntil(cartCheckboxWrap).find(cartCheckbox).prop('checked', this.checked);
            }
            calcTotalPrice();
        });
    }

    /* Calc Total Price */
    function calcTotalPrice() {
        var selected = [];
        var wrap = $('.cart-body');
        var goodsChebox = '.goods-selected';
        var goodsNum = wrap.find(goodsChebox).length;

        var _TotalNumber = 0;
        var _TotalPrice = 0;

        var cartTotalPrice = $('.cart-goods-total-price');
        var cartTotalNumber = $('.cart-goods-total-number');

        for (var i = 0; i < goodsNum; i++) {
            if (wrap.find(goodsChebox).eq(i).is(':checked') === true) {
                //console.log(wrap.find(goodsChebox).eq(i).attr('value'));
                // console.log(wrap.find(goodsChebox).eq(i).parent().siblings('.number').find('.goods-number-input').attr('value'));
                // console.log(wrap.find(goodsChebox).eq(i).parent().siblings('.number').find('.goods-number-input').addClass("test"));
                // console.log(wrap.find(goodsChebox).eq(i).parent().siblings('.price').find('.cart-goods-unit-price').text());
                selected.push(wrap.find(goodsChebox).eq(i).attr('value'));
                _TotalNumber += Number(wrap.find(goodsChebox).eq(i).parent().siblings('.number').find('.goods-number-input').attr('value'));
                _TotalPrice += Number(wrap.find(goodsChebox).eq(i).parent().siblings('.number').find('.goods-number-input').attr('value')) * (Number(wrap.find(goodsChebox).eq(i).parent().siblings('.price').find('.cart-goods-unit-price').text())).toFixed(2);
            }
        }
        // console.log(selected);
        // console.log(_TotalNumber);
        // console.log(_TotalPrice);
        $('.settlement-button').attr("data-id", selected);
        cartTotalNumber.text(_TotalNumber);
        cartTotalPrice.text(_TotalPrice.toFixed(2));
    }

});