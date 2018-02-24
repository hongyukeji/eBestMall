<?php

namespace common\widgets\authclient\pc;

use yii\web\AssetBundle;

/**
 * AuthChoiceAsset is an asset bundle for [[AuthChoice]] widget.
 *
 * @author Paul Klimov <klimov.paul@gmail.com>
 * @since 2.0
 */
class AuthChoiceStyleAsset extends AssetBundle
{
    public $sourcePath = '@yii/authclient/assets';
    public $css = [
        'authchoice.css',
    ];
}