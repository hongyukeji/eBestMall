<?php

return [
    'user.rememberMeDuration' => '',
    'adminEmail' => '',
    'siteConfig' => [
        'name' => '',
        'title' => '',
        'keywords' => '',
        'description' => '',
        'copyright' => '',
    ],
    'payment' => [],
    'sms' => [
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
