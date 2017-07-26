<?php
/**
 * Created by PhpStorm.
 * User: frank
 * Date: 2017-07-25
 * Time: 下午 5:09
 */

namespace app\common\services;

//只封装通用方法
class UtilService
{
    public static function getIP(){
        if( !empty( $_SERVER['HTTP_X_FORWARDED_FOR'])){
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        return $_SERVER['REMOTE_ADDR'];
    }

}