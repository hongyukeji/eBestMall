<?php

namespace app\components\authclient\clients;


class AliPayAuth
{
    public $authUrl = 'https://openauth.alipay.com/oauth2/publicAppAuthorize.htm';
    public $tokenUrl = 'https://openauth.alipay.com/oauth2/appToAppAuth.htm';
    public $apiBaseUrl = 'https://openauth.alipay.com';
    public $scope = 'auth_base';

}