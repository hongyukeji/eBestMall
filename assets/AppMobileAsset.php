<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppMobileAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '/static/mobile/css/app.css',
    ];
    public $js = [
        '/static/mobile/js/app.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
