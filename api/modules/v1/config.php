<?php
return [
    'components' => [
        // list of component configurations
        'urlManager' => [
            'class' => 'yii\web\urlManager',
            'enablePrettyUrl' => true,
            'enableStrictParsing' => true,
            'showScriptName' => false,
            'rules' => require 'urls.php',
        ]
    ],
    'params' => [
        // list of parameters
    ],
];