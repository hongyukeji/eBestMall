<?php
/**
 * eBestMall
 * ============================================================================
 * Copyright 2015-2018 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2018/1/2 16:40
 * E-mail: hongyukeji@126.com
 * ============================================================================
 */

namespace common\helpers;

use yii\helpers\BaseArrayHelper;

class ToolsHelper extends BaseArrayHelper
{
    /**
     * 限制字符串长度, 超出显示...
     *
     * @example Yii::$app->tools->strLimit('string',5)
     *
     * @param $str
     * @param int $limit
     * @param string $end
     * @param int $start
     * @param string $charset
     * @return string
     */
    public static function strLimit($str, $limit = 100, $end = '...', $start = 0, $charset = 'utf-8')
    {
        if (function_exists('mb_substr'))
            $slice = mb_substr($str, $start, $limit, $charset);
        elseif (function_exists('iconv_substr')) {
            $slice = iconv_substr($str, $start, $limit, $charset);
            if (false === $slice) {
                $slice = '';
            }
        } else {
            $re['utf-8'] = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|[\xe0-\xef][\x80-\xbf]{2}|[\xf0-\xff][\x80-\xbf]{3}/";
            $re['gb2312'] = "/[\x01-\x7f]|[\xb0-\xf7][\xa0-\xfe]/";
            $re['gbk'] = "/[\x01-\x7f]|[\x81-\xfe][\x40-\xfe]/";
            $re['big5'] = "/[\x01-\x7f]|[\x81-\xfe]([\x40-\x7e]|\xa1-\xfe])/";
            preg_match_all($re[$charset], $str, $match);
            $slice = join("", array_slice($match[0], $start, $limit));
        }

        if (mb_strlen($str) <= $limit) {
            $result = $slice;
        } else {
            $result = $slice . $end;
        }

        return $result;
    }
}