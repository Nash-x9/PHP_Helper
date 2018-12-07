<?php
/**
 * Created by PhpStorm.
 * User: joe
 * Date: 2018/12/7
 * Time: 2:00 PM
 */

class StringHelper
{
    /**
     * 隐私数据处理
     * @param $string
     * @param int $show_left
     * @param int $show_right
     * @param string $symbol
     * @return mixed|string
     */
    public static function privacyDeal($string, $show_left = 3, $show_right=4, $symbol = '*'){

        $str_len = mb_strlen($string);
        if($str_len< 0 && $show_left > $str_len){
            return '';
        }

        if(($show_right+$show_left) > $str_len){
            return '';
        }

        $replace_string = mb_substr($string,$show_left,$str_len-$show_right-$show_left);

        return str_replace($replace_string,str_repeat($symbol,strlen($replace_string)),$string);
    }

    /**
     * 获取指定长度的数字验证码
     * @param int $length
     * @return string
     */
    public static function numericCode($length = 6)
    {
        $code = '';
        for($i = 0;$i<$length;$i++){
            try {
                $code .= random_int(0, 9);
            } catch (\Exception $e) {
                return '';
            }
        }
    }

}