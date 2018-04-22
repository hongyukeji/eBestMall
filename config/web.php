<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'modules' => [
        'admin' => [
            'class' => 'app\modules\admin\Module',
        ],
        'api' => [
            'class' => 'app\modules\api\Module',
        ],
        'mobile' => [
            'class' => 'app\modules\mobile\Module',
        ],
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'lNfcizgCAw_zo-k9Kp4uID4rnhOjQmDD',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'suffix' => '.html',
            'rules' => [
            ],
        ],
        */

        /**
         * 语言设置
         *
         * @see http://www.yiiframework.com/doc-2.0/guide-tutorial-i18n.html
         */
        'i18n' => [
            'translations' => [
                'app*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@app/messages',
                    //'sourceLanguage' => 'en-US',
                    'fileMap' => [
                        'app' => 'app.php',
                        'app/admin' => 'admin.php',
                        'app/api' => 'api.php',
                        'app/mobile' => 'mobile.php',
                        'app/model' => 'model.php',
                        'app/error' => 'error.php',
                        'app/tips' => 'tips.php',
                    ],
                ],
                // 覆盖更改yii自带语言包
                'yii' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    //'sourceLanguage' => 'en-US',
                    'basePath' => '@app/messages'
                ],
            ],
        ],

        /**
         * 主题视图设置
         *
         * @see http://www.yiiframework.com/doc-2.0/guide-output-theming.html
         */
        'view' => [
            'class' => 'yii\web\View',
            'theme' => [
                'basePath' => '@app/templates/default',
                'baseUrl' => '@web/templates/default',
                'pathMap' => [
                    '@app/views' => '@app/templates/default',
                ],
            ],
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

$config = yii\helpers\ArrayHelper::merge(
    $config,
    require __DIR__ . '/web-local.php'
);

return $config;
