<?php
/**
 * Created by PhpStorm.
 * User: joe
 * Date: 2018/12/7
 * Time: 11:08 AM
 */

class TimeStampsHelper
{
    /**
     * 获取当天时间戳
     * @return array
     */
    public static function today()
    {
        $beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
        $endToday=mktime(0,0,0,date('m'),date('d')+1,date('Y'))-1;
        return [$beginToday,$endToday];
    }

    /**
     * 获取本周时间戳
     * @return array
     */
    public static function week()
    {
        $beginThisweek=mktime(0,0,0,date('m'),date('d')-date('w')+1,date('Y'));
        $endThisweek=mktime(23,59,59,date('m'),date('d')-date('w')+7,date('Y'));
        return [$beginThisweek,$endThisweek];
    }

    /**
     * 获取本月时间戳
     * @return array
     */
    public static function month()
    {
        $beginThismonth=mktime(0,0,0,date('m'),1,date('Y'));
        $endThismonth=mktime(23,59,59,date('m'),date('t'),date('Y'));
        return [$beginThismonth,$endThismonth];
    }

    /**
     * 获取某时间戳是否是周末
     * @param int $timestamp
     * @return bool
     */
    public static function is_weekend(int $timestamp)
    {
        if((date('w',$timestamp)==6) || (date('w',$timestamp) == 0)){
            return true;
        }else{
            return false;
        }
    }

    /**
     * 获取工作日倒退指定天数的时间戳
     * @param int $num
     * @return false|int
     */
    public static function beforeWorkDay(int $num)
    {
        do{
            $timestamp = strtotime("-{$num} day");
            $num++;
        }while(self::is_weekend(date('Y-m-d',$timestamp)));
        return $timestamp;
    }

}