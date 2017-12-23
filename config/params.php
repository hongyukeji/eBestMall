<?php

return [
    'adminEmail' => '',
    'siteConfig' => [
        'name' => '',
        'title' => '',
        'keywords' => '',
        'description' => '',
        'copyright' => '',
    ],
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
        ],
        'weixin' => [
            'class' => 'app\components\authclient\clients\WeiXinAuth',
            'clientId' => '',
            'clientSecret' => '',
            'name' => '',
            'title' => '',
        ],
        'weibo' => [
            'class' => 'app\components\authclient\clients\WeiBoAuth',
            'clientId' => '',
            'clientSecret' => '',
            'name' => '',
            'title' => '',
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
