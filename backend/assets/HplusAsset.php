<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class HplusAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        //'css/site.css',
        'statics/css/bootstrap.min14ed.css?v=3.3.6',
        'statics/css/font-awesome.min93e3.css?v=4.4.0',
        'statics/css/animate.min.css',
        'statics/css/style.min862f.css?v=4.1.0',
    ];

    public $js = [
        'statics/js/jquery.min.js?v=2.1.4',
        'statics/js/bootstrap.min.js?v=3.3.6',
        'statics/js/plugins/metisMenu/jquery.metisMenu.js',
        'statics/js/plugins/slimscroll/jquery.slimscroll.min.js',
        'statics/js/plugins/layer/layer.min.js',
        'statics/js/hplus.min.js?v=4.1.0',
        'statics/js/contabs.min.js',
        'statics/js/plugins/pace/pace.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
