<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot/web';
    public $baseUrl = '@web/web';
    public $css = [
        'static/css/app.css',
    ];
    public $js = [
        'static/js/jquery.min.js',
        'static/js/app.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
