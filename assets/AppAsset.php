<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'static/css/font-awesome-free/web-fonts-with-css/css/fontawesome-all.min.css',
        'static/css/bootstrap.min.css',
        'static/css/app.css',
    ];
    public $js = [
        ['static/js/jquery.min.js', 'position' => View::POS_HEAD],
        //'static/css/font-awesome-free/svg-with-js/js/fontawesome-all.min.js',
        'static/js/bootstrap.min.js',
        'static/js/app.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
