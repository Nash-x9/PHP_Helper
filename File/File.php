<?php
/**
 * Created by PhpStorm.
 * User: joe
 * Date: 2018/12/7
 * Time: 11:49 AM
 */

class File
{

    /**
     * 获取文件扩展名，并检查是否合法
     * 返回[is_allow,ext,error_msg]
     *
     * @param $filename
     * @param array $allowext
     * @return array
     */
    public static function checkExt($filename, $allowext = [])
    {
        $exts = explode('.',$filename);
        if(count($exts)>0 && in_array($exts[count($exts)-1],$allowext)){
            return [true,$exts[count($exts)-1],];
        }else{
            return [false,$exts[count($exts)-1],'文件格式不允许!'];
        }
    }
}