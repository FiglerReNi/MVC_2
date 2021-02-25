<?php


class User4
{

    /**
     * @var string
     */
    public string $name;

    /**
     * @var int
     */
    public int $age;

    /**
     * @var int
     */
    public static $minPassLength = 6;

    /**
     * @param $pass
     * @return bool
     */
    public static function validatePass($pass) :bool
    {
        if(strlen($pass) >= self::$minPassLength){
            return true;
        }else
            return false;
    }
}