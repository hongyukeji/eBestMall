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
