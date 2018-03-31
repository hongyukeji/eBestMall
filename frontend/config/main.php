<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\UserModel',
            'enableAutoLogin' => true,
            'idParam' => '__user',
            'identityCookie' => [
                'name' => '_identity-frontend',
                'httpOnly' => true,
                //'path' => '/',
                //'domain' => '.example.com'
            ],
            'loginUrl' => ['auth/login'],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
            //'suffix' => '.html',
            'rules' => [
            ],
        ],

        /**
         * 语言设置
         *
         * @see http://www.yiiframework.com/doc-2.0/guide-tutorial-i18n.html
         */
        'i18n' => [
            'translations' => [
                'app*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',
                    //'sourceLanguage' => 'en-US',
                    'fileMap' => [
                        'app' => 'app.php',
                        'app/model' => 'model.php',
                        'app/frontend' => 'frontend.php',
                        'app/backend' => 'backend.php',
                        'app/api' => 'api.php',
                        'app/mobile' => 'mobile.php',
                        'app/error' => 'error.php',
                        'app/tips' => 'tips.php',
                    ],
                ],
                // 覆盖更改yii自带语言包
                'yii' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    //'sourceLanguage' => 'en-US',
                    'basePath' => '@common/messages'
                ],
            ],
        ],

        /**
         * 主题视图设置
         *
         * @see http://www.yiiframework.com/doc-2.0/guide-output-theming.html
         */
        'view' => [
            'theme' => [
                'basePath' => '@app/themes/basic',
                'baseUrl' => '@web/themes/basic',
                'pathMap' => [
                    '@app/views' => '@app/themes/basic',
                ],
            ],
        ],
    ],
    'params' => $params,
];
