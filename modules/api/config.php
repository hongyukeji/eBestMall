<?php
return [
    'components' => [
        // list of component configurations
        'request' => [
            'class' => 'yii\web\Request',
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ]
        ]
    ],
    'params' => [
        // list of parameters
    ],
];