<?php


class User4
{
    public $name;
    public $age;
    public static $minPassLength = 6;

    public static function validatePass($pass){
        if(strlen($pass) >= self::$minPassLength){
            return true;
        }else
            return false;
    }
}