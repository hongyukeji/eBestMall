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
 * Author: Shadow  QQ: 1527200768  Time: 2017/12/14 10:15
 * E-mail: hongyukeji@126.com
 * ============================================================================
 */

namespace app\common\components;

use Yii;
use yii\base\Component;

class Tools extends Component
{
    /**
     * 截取字符串
     * @param $value
     * @param int $limit
     * @param string $end
     * @return string
     */
    public function str_limit($value, $limit = 100, $end = '...')
    {
        $result = '';
        $value = html_entity_decode(trim(strip_tags($value)), ENT_QUOTES, 'UTF-8');
        $strlen = strlen($value);
        for ($i = 0; (($i < $strlen) && ($limit > 0)); $i++) {
            if ($number = strpos(str_pad(decbin(ord(substr($value, $i, 1))), 8, '0', STR_PAD_LEFT), '0')) {
                if ($limit < 1.0) {
                    break;
                }
                $result .= substr($value, $i, $number);
                $limit -= 1.0;
                $i += $number - 1;
            } else {
                $result .= substr($value, $i, 1);
                $limit -= 0.5;
            }
        }
        $result = htmlspecialchars($result, ENT_QUOTES, 'UTF-8');
        if ($i < $strlen) {
            $result .= $end;
        }
        return $result;
    }

}