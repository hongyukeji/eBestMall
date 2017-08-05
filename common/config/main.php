<?php
return [
    'name' => 'eBestMall',
    'version' => '0.0.7',
    'language'=>'zh-CN',
    'timeZone'=>'Asia/Shanghai',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'i18n' => [
            'translations' => [
                'app*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    //'basePath' => '@app/messages',
                    //'sourceLanguage' => 'en-US',
                    'fileMap' => [
                        'app' => 'app.php',
                        'app/tips' => 'tips.php',
                        'app/error' => 'error.php',
                    ],
                ],
            ],
        ],
    ],
];
