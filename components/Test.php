<?php

namespace app\components;

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

    /**
     * @param $content
     * @param string $file
     * @param string $dir
     * @param string $type [w-写入, a-增加]
     */
    public function write($content, $file = 'log.txt', $dir = 'info/', $type = 'a')
    {
        if ($dir !== null && !file_exists($dir)) {
            mkdir($dir);
        }

        $path = fopen($dir . $file, $type) or die("无法打开文件！");

        fwrite($path, $content . "\n");

        fclose($path);
    }
}