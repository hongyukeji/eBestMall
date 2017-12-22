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
        ],
        'weixin' => [
            'class' => 'app\components\authclient\clients\WeiXinAuth',
            'clientId' => '',
            'clientSecret' => '',
        ],
        'weibo' => [
            'class' => 'app\components\authclient\clients\WeiBoAuth',
            'clientId' => '',
            'clientSecret' => '',
        ],
        'github' => [
            'class' => 'yii\authclient\clients\GitHub',
            'clientId' => '',
            'clientSecret' => '',
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
