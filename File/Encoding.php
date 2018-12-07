<?php
/**
 * Created by PhpStorm.
 * User: joe
 * Date: 2018/12/7
 * Time: 11:47 AM
 */

class Encoding
{

    /**
     * 获取文件编码
     * @param $file
     * @return mixed|null
     */
    public static function detect_encoding($file)
    {
        $list = array("ASCII", 'UTF-8', "GB2312", "GBK", 'BIG5', 'ISO-8859-1');
        $str = file_get_contents($file);
        foreach ($list as $item) {
            $tmp = mb_convert_encoding($str, $item, $item);
            if (md5($tmp) == md5($str)) {
                return $item;
            }
        }
        return null;
    }
}