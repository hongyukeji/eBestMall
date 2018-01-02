<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Main application asset bundle.
 *
 * @author Shadow <hongyukeji@126.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'statics/css/font-awesome-free/web-fonts-with-css/css/fontawesome-all.min.css',
        //'statics/css/bootstrap.min.css',
        'statics/css/app.css',
    ];
    public $js = [
        ['statics/js/jquery.min.js', 'position' => View::POS_HEAD],
        //'statics/css/font-awesome-free/svg-with-js/js/fontawesome-all.min.js',
        'statics/js/bootstrap.min.js',
        'statics/js/app.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
