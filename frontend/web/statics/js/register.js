$(function () {
    hasCookie();
    hasErrorEmail();

    $('#getSmsCode').on('click', function () {
        var _this = $(this);
        sendSmsCode(_this);
    });

    function sendSmsCode(obj) {
        var sendSmsItem = $('.register-send-sms-code');
        // 查询手机号是否存在url
        var queryUrl = sendSmsItem.data('check-mobile-url');
        // 发送短信验证码url
        var sendSmsUrl = sendSmsItem.data('send-sms-code-url');
        // 发送倒计时
        var sendSmsCountDown = sendSmsItem.data('count-down');
        // 手机号
        var mobile = $('#register-mobile-phone').val();

        // 检查手机号是否合法
        var result = isPhoneNum(mobile);

        var verifyCode = isVerifyCode();
        if (result) {
            if(verifyCode){
                obj.attr("disabled", true);
                //obj.text(obj.data('text-sending'));
                //console.info("error: " + obj.attr("disabled"));
                if (obj.attr("disabled")) {
                    // 检查手机号是否存在
                    var existsResult = checkMobileExists(obj, queryUrl, mobile);
                    if (existsResult) {
                        obj.removeAttr("disabled");
                        obj.text(obj.data('text-get'));
                        $("#registerTipsModal").modal("show");
                    } else {
                        // 手机号不存在
                        // 判断Cookie缓存是否存在
                        var smsCodeCookie = getCookie('smsCode');
                        if (smsCodeCookie) {
                            // 存在则调用倒计时
                            hasCookie();
                        } else {
                            var sendResult = sendSmsCodeAjax(obj, sendSmsUrl, mobile);
                            if (sendResult === 'OK') {
                                setCookie('smsCode', new Date().toISOString(), sendSmsCountDown);
                                smsCountDown(obj, sendSmsCountDown);
                            } else {
                                obj.removeAttr("disabled");
                                obj.text(obj.data('text-get'));
                                $("#registerTipsModal").find('.modal-title').text(obj.data('text-error'));
                                $("#registerTipsModal").find('.register-tips-content').text(JSON.stringify(sendResult));
                                $("#registerTipsModal").modal("show");
                            }
                        }
                    }
                }
            }else{
                $('#registerform-verify_code').parent().parent().addClass('has-error');
                $('#registerform-verify_code').focus();
            }
        } else {
            $("#register-mobile-phone").parent().addClass('has-error');
            $("#register-mobile-phone").focus();
        }
    }

    function sendSmsCodeAjax(obj, sendUrl, mobile) {
        var sendResult = null;
        $.ajax({
            url: sendUrl,
            type: 'POST',
            cache: false,
            async: false,
            data: {'mobile': mobile},
            dataType: 'json',
            /*beforeSend: function () {
                // 请求前执行
            },
            complete: function () {
                // 请求完成后执行
            },*/
            success: function (result) {
                if (result === 'OK') {
                    sendResult = result;
                } else {
                    sendResult = result;
                }
            },
            /*error: function (data) {
                console.info("error: " + data.responseText);
            }*/
        });
        return sendResult;
    }

    function checkMobileExists(obj, queryUrl, mobile) {
        var queryResult = null;
        $.ajax({
            url: queryUrl,
            type: 'POST',
            cache: false,
            async: false,
            data: {'mobile': mobile},
            dataType: 'json',
            success: function (result) {
                if (result === 'success') {
                    queryResult = true;
                } else {
                    queryResult = false;
                }
            }
        });
        return queryResult;
    }

    function smsCountDown(obj, timesRun) {

        var interval = setInterval(function () {
            obj.attr("disabled", true);
            obj.text(timesRun + obj.data('text-tips'));
            timesRun = parseInt(timesRun) - 1;
            if (timesRun <= 0) {
                obj.removeAttr("disabled");
                obj.text(obj.data('text-get'));
                clearInterval(interval);
            }
        }, 1000);
    }

    function hasCookie() {
        var sendSmsItem = $('.register-send-sms-code');
        var sendSmsCountDown = sendSmsItem.data('count-down');

        var dataStart = new Date(getCookie('smsCode')).getTime();
        var dataNow = new Date().getTime();
        var TimeEnd = parseInt((dataNow - dataStart) / 1000);

        if (TimeEnd < sendSmsCountDown) {
            smsCountDown($('#getSmsCode'), sendSmsCountDown - TimeEnd);
        }
    }

    function addCookie(name, value, expiresHours) {
        var cookieString = name + "=" + escape(value);
        if (expiresHours > 0) {
            var date = new Date();
            date.setTime(date.getTime() + expiresHours * 1000);
            cookieString = cookieString + ";expires=" + date.toUTCString();
        }
        document.cookie = cookieString;
    }

    function getCookie(name) {
        var strCookie = document.cookie;
        var arrCookie = strCookie.split("; ");
        for (var i = 0; i < arrCookie.length; i++) {
            var arr = arrCookie[i].split("=");
            if (arr[0] === name) {
                return unescape(arr[1]);
                break;
            }
        }
    }

    function setCookie(name, value, expiresHours) {
        var cookieString = name + "=" + escape(value);
        if (expiresHours > 0) {
            var date = new Date();
            date.setTime(date.getTime() + expiresHours * 1000); //单位是毫秒
            cookieString = cookieString + ";expires=" + date.toGMTString();
        }
        document.cookie = cookieString;
    }

    function isPhoneNum(mobile) {
        var validateRule = /^1[0-9]{10}$/;
        if (validateRule.test(mobile)) {
            return true;
        } else {
            return false;
        }
    }

    function isVerifyCode() {
        var registerVerifyCode = $('#registerform-verify_code');
        if (registerVerifyCode.val() !== '') {
            return true;
        } else {
            return false;
        }
    }

    function hasErrorEmail() {
        var btnOn = $('.register-options-email-switch-on');
        var emailItem = $('.register-options-email');
        if (emailItem.hasClass('has-error')) {
            emailItem.removeClass('hidden');
            btnOn.text(btnOn.data('off'));
        }
    }

    $('.register-options-email-switch-on').on('click', function () {
        var _this = $(this);
        var emailItem = $('.register-options-email');
        if (emailItem.hasClass("hidden")) {
            emailItem.removeClass('hidden');
            _this.text(_this.data('off'));
        } else {
            emailItem.addClass('hidden');
            _this.text(_this.data('on'));
        }
    });
});