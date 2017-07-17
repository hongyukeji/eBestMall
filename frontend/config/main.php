<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'modules' => [
        'mobile' => [
            'class' => 'frontend\modules\mobile\Mobile',
        ],
        'seller' => [
            'class' => 'frontend\modules\seller\Seller',
        ],
        'api' => [
            'class' => 'frontend\modules\api\Api',
        ],
    ],
    'components' => [
        // language 语言包
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    //'basePath' => '@app/messages',
                    'fileMap' => [
                        'app' => 'app.php',
                    ],
                ]
            ],
        ],
        // 设置主题
        'view' => [
            'theme' => [
                'basePath' => '@app/themes/default',
                'baseUrl' => '@web/themes/default',
                'pathMap' => [
                    '@app/views' => '@app/themes/default',
                ],
            ],
        ],
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'eBestMall-frontend',
            //'class' => 'yii\web\DbSession',
            //'timeout' => 3600 * 24 * 7,
            //'db' => 'db',  // 数据库连接的应用组件ID，默认为'db'.
            //'sessionTable' => 'ebm_session', // session 数据表名，默认为'session'.
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'suffix' => '.html',  // 统一后缀名，若不需要则无需配置
            'rules' => [
            ],
        ],
    ],
    'params' => $params,
];
