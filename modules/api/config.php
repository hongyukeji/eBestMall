<?php
return [
    'components' => [
        // list of component configurations
        'request' => [
            'class' => 'yii\web\Request',
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ]
        ],
        'urlManager' => [
            'class' => 'yii\web\urlManager',
            'enablePrettyUrl' => true,
            'enableStrictParsing' => true,
            'showScriptName' => false,
            'rules' => [
                ['class' => 'yii\rest\UrlRule', 'controller' => 'demo'],
            ],
        ]
    ],
    'params' => [
        // list of parameters
    ],
];