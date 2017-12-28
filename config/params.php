<?php

return [
    'cookieValidationKey' => '',
    'user.rememberMeDuration' => '',
    'adminEmail' => '',
    'siteConfig' => [
        'name' => '',
        'title' => '',
        'keywords' => '',
        'description' => '',
        'copyright' => '',
    ],
    'payment' => [
        'aliPay' => [
            'app_id' => '',
            'merchant_private_key' => '',
            'notify_url' => '',
            'return_url' => '',
            'charset' => '',
            'sign_type' => '',
            'gatewayUrl' => '',
            'alipay_public_key' => '',
        ],
    ],
    'sms' => [
        'default'=>'',
        'aliSms' => [
            'accessKeyId' => '',
            'accessKeySecret' => '',
            'signName' => '',
            'templateCode' => [
                'verificationCode' => '',
            ],
        ],
        'yunpianSms' => [
            'apikey' => '',
            'signName' => '',
            'templateCode' => [
                'verificationCode' => '',
            ],
        ],
    ],
    'authClients' => [
        'qq' => [
            'class' => 'app\components\authclient\clients\QqAuth',
            'clientId' => '',
            'clientSecret' => '',
            'name' => '',
            'title' => '',
            'viewOptions' => [
                'popupWidth' => 860,
                'popupHeight' => 480,
            ],
        ],
        'alipay' => [
            'class' => 'app\components\authclient\clients\AliPayAuth',
            'clientId' => '',
            'clientSecret' => '',
            'name' => 'alipay',
            'title' => 'AliPay',
            'viewOptions' => [
                'popupWidth' => 860,
                'popupHeight' => 480,
            ],
        ],
        'weixin' => [
            'class' => 'app\components\authclient\clients\WeiXinAuth',
            'clientId' => '',
            'clientSecret' => '',
            'name' => '',
            'title' => '',
            'viewOptions' => [
                'popupWidth' => 860,
                'popupHeight' => 480,
            ],
        ],
        'weibo' => [
            'class' => 'app\components\authclient\clients\WeiBoAuth',
            'clientId' => '',
            'clientSecret' => '',
            'name' => '',
            'title' => '',
            'viewOptions' => [
                'popupWidth' => 860,
                'popupHeight' => 480,
            ],
        ],
        'github' => [
            'class' => 'app\components\authclient\clients\GitHub',
            'clientId' => '',
            'clientSecret' => '',
            'viewOptions' => [
                'popupWidth' => 860,
                'popupHeight' => 480,
            ],
        ],
    ],
    'mail' => [
        'transport' => [
            'class' => 'Swift_SmtpTransport',
            'host' => '',
            'username' => '',
            'password' => '',
            'port' => '25',
            'encryption' => 'tls',
        ],
        'messageConfig' => [
            'charset' => 'UTF-8',
            'from' => ['' => '']
        ],
    ],
];
