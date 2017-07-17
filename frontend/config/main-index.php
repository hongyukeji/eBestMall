<?php

$config = [
    'components' => [
        // 根目录frontend入口index.php assets关联设置
        'assetManager' => [
            'basePath' => '@webroot/frontend/web/assets',
            'baseUrl' => '@web/frontend/web/assets',
        ],
    ],
];

return $config;
