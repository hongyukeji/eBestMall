<?php

namespace app\common\components;

use Yii;
use yii\base\Component;

class Test extends Component
{
    /**
     * @param $filePath
     * @param $content
     */
    public function log($content, $filePath = 'info/log.txt')
    {
        file_put_contents($filePath, $content);
    }
}