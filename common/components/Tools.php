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

    /**
     * 用户名、邮箱、手机账号中间字符串以*号隐藏
     * @param $str
     * @param string $type
     * @return null|string|string[]
     */
    function hideStar($str, $type = 'string')
    {
        if ($type == 'email') {
            if (strpos($str, '@')) {
                $email_array = explode("@", $str);
                $str_length = strlen($email_array[0]);
                $str_hide_length = intval(floor($str_length / 2));
                $prev_fix = ($str_length >= 2) ? substr($str, 0, $str_hide_length) : ""; //邮箱前缀
                $count = 0;
                $asterisk_number = $str_length - $str_hide_length;
                $asterisk = null;
                for ($x = 0; $x < $asterisk_number; $x++) {
                    $asterisk = $asterisk . '*';
                }
                $str = preg_replace('/([\d\w+_-]{0,100})@/', $asterisk . '@', $str, -1, $count);
                return $prev_fix . $str;
            }
        }

        if ($type == 'mobile') {
            $pattern = '/(1[0-9]{1}[0-9])[0-9]{4}([0-9]{4})/i';
            if (preg_match($pattern, $str)) {
                return preg_replace($pattern, '$1****$2', $str); // substr_replace($name,'****',3,4);
            }
        }

        if ($type == 'string') {
            //获取字符串长度
            $strlen = mb_strlen($str, 'utf-8');
            //如果字符创长度小于2，不做任何处理
            if ($strlen < 2) {
                return $str;
            } else {
                //mb_substr — 获取字符串的部分
                $firstStr = mb_substr($str, 0, 1, 'utf-8');
                $lastStr = mb_substr($str, -1, 1, 'utf-8');
                //str_repeat — 重复一个字符串
                return $strlen == 2 ? $firstStr . str_repeat('*', mb_strlen($str, 'utf-8') - 1) : $firstStr . str_repeat("*", $strlen - 2) . $lastStr;
            }
        }
        return null;
    }
}