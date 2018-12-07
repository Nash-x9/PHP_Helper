<?php
/**
 * Created by PhpStorm.
 * User: joe
 * Date: 2018/12/7
 * Time: 1:55 PM
 */

class ArrayHelper
{

    /**
     * 二维数组取差集
     * @param array $array1
     * @param array $array2
     * @return array
     */
    public static function dyadicArrayDiff(array $array1, array $array2)
    {
        try{
            return array_filter($array1,function($v) use ($array2){
                return !in_array($v,$array2);
            });
        }catch (\Exception $exception){
            return $array1;
        }
    }

    /**
     * 数组转字符串
     * @param array $arr
     * @param string $separator
     * @return string
     */
    public static function arrayToString(array $arr, $separator = ',')
    {
        $string = implode($separator,$arr);
        return $string;
    }

}