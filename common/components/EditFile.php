<?php
/**
 * eBestMall
 * ============================================================================
 * Copyright 2015-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/12/7 15:33
 * E-mail: hongyukeji@126.com
 * ============================================================================
 */

namespace app\common\components;

use Yii;
use yii\base\Component;

class EditFile extends Component
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