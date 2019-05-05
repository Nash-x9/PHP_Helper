<?php
/**
 * Created by PhpStorm.
 * User: Joe
 * Date: 2019/5/5
 * Time: 17:00
 */

class OutputHelper
{
    public static function color_output($message,$color = "normal")
    {
        switch ($color){
            case 'normal':
                $color_ = "\33[0m";
                break;
            case 'red':
                $color_ = "\33[1;31m";
                break;
            case 'yellow':
                $color_ = "\33[1;33m";
                break;
            case 'green':
                $color_ = "\33[1;32m";
                break;
            case 'blue':
                $color_ = "\33[1;34m";
                break;
            case 'pink':
                $color_ = "\33[1;35m";
                break;
            default:
                $color_ = "\33[0m";
                break;
        }
        echo $color_.$message."\33[0m";
    }
}