<?php

$params = require __DIR__ . '/params.php';
$params = require __DIR__ . '/params-local.php';
$db = require __DIR__ . '/db.php';
$db = require __DIR__ . '/db-local.php';

$config = [
    'name' => 'eBestMall',
    'version' => '8.0.0',
    'language' => 'zh-CN',
    'timeZone' => 'Asia/Shanghai',
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'oRlG9FOw_V415wt0Madkhnq8J4i1wYIu',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
            'idParam' => '__user',
            'identityCookie' => [
                'name' => '_identity-user',
                //'path' => '/',
                'httpOnly' => true,
                //'domain' => '.xxx.com'
            ],
            'loginUrl' => ['auth/login'],
        ],
        'admin' => [
            'class' => 'yii\web\User',
            'identityClass' => 'app\modules\admin\models\Admin',
            'enableAutoLogin' => true,
            'idParam' => '__admin',
            'identityCookie' => [
                'name' => '_identity-admin',
                //'path' => '/admin',
                'httpOnly' => true,
            ],
            'loginUrl' => ['admin/auth/login'],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            //'viewPath' => '@app/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            //'useFileTransport' => YII_DEBUG ? true : false,
            'useFileTransport' => false,
            'transport' => $params['mail']['transport'],
            'messageConfig' => $params['mail']['messageConfig'],
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
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            //'suffix' => '.html',
            'rules' => [
            ],
        ],
        'i18n' => [
            'translations' => [
                'app*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    //'basePath' => '@app/messages',
                    //'sourceLanguage' => 'en-US',
                    'fileMap' => [
                        'app' => 'app.php',
                        'app/error' => 'error.php',
                        'app/tips' => 'tips.php',
                    ],
                ],
                // 覆盖更改yii自带语言包
                'yii' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'sourceLanguage' => 'en-US',
                    'basePath' => '@app/messages'
                ],
            ],
        ],
        'view' => [
            'theme' => [
                'basePath' => '@app/themes/default',
                'baseUrl' => '@web/themes/default',
                'pathMap' => [
                    '@app/views' => '@app/themes/default',
                ],
            ],
        ],
        'session' => [
            'class' => 'yii\web\DbSession',
            // 'db' => 'mydb',  // the application component ID of the DB connection. Defaults to 'db'.
            // 'sessionTable' => 'my_session', // session table name. Defaults to 'session'.
            'timeout' => 3600,
        ],
        'authClientCollection' => [
            'class' => 'yii\authclient\Collection',
            'clients' => [
                /*'google' => [
                    'class' => 'yii\authclient\clients\Google',
                    'clientId' => 'google_client_id',
                    'clientSecret' => 'google_client_secret',
                ],
                'facebook' => [
                    'class' => 'yii\authclient\clients\Facebook',
                    'clientId' => 'facebook_client_id',
                    'clientSecret' => 'facebook_client_secret',
                ],*/
                'github' => [
                    'class' => 'yii\authclient\clients\GitHub',
                    'clientId' => 'ea88c7d55b1fbc34ba37',
                    'clientSecret' => '3707091c309210513af417015469d9906503d0ea',
                ],
                'qq' => [
                    'class'=> 'app\components\authclient\clients\QqAuth',
                    'clientId'=>'101446601',
                    'clientSecret'=>'d2a78de91dfac964f4deab55aa1bbe48'
                ],
            ],
        ],

        // 自定义组件
        'siteConfig' => [
            'class' => 'app\components\SiteConfig',
        ],
        'sendSms' => [
            'class' => 'app\components\SendSms',
            'config' => [
                'aliSms' => $params['sms']['aliSms'],
            ],
        ],
        'sendMail' => [
            'class' => 'app\components\SendMail',
            'config' => [
                'aliSms' => $params['mail'],
            ],
        ],
        'tools' => [
            'class' => 'app\components\Tools',
        ],
    ],

    'modules' => [
        'api' => [
            'class' => 'app\modules\api\Module',
        ],
        'admin' => [
            'class' => 'app\modules\admin\Module',
        ],
        'mobile' => [
            'class' => 'app\modules\mobile\Module',
        ],
        'seller' => [
            'class' => 'app\modules\seller\Module',
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

return $config;
