<?php
return [
    'defaultRoute' => 'home',
    'components' => [
        // list of component configurations
        'request' => [
            'class' => 'yii\web\Request',
            'csrfParam' => '_csrf-backend',
            'csrfCookie' => [
                'httpOnly' => true,
                'path' => '/admin',
            ],
        ],
        'user' => [
            'class' => 'yii\web\User',
            'identityClass' => 'app\modules\admin\models\Admin',
            'enableAutoLogin' => true,
            'identityCookie' => [
                'name' => '_identity-backend',
                'path' => '/admin',
                'httpOnly' => true,
            ],
            'loginUrl' => ['/admin/auth/login'],
        ],
        'session' => [
            'class' => 'yii\web\Session',
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
            'cookieParams' => [
                'path' => '/admin',
            ],
        ],
    ],
    'params' => [
        // list of parameters
    ],
];