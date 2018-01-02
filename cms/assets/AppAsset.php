<?php

namespace cms\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Main cms application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];
    public $js = [
        ['static/home/js/jquery.min.js', 'position' => View::POS_HEAD],
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
