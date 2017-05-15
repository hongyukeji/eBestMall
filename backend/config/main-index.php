<?php

$config = [
    'components' => [
        // 根目录backend入口index.php assets关联设置
        'assetManager' => [
            'basePath' => '@backend/web/assets',
            'baseUrl' => '@web/backend/web/assets',
        ],
    ],
];

return $config;
