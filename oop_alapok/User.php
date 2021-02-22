<?php


class User
{
    //public $name = 'Brad';
    /**
     * @var
     */
    public $name;

    /**
     * @return string
     */
    public function sayHello() :string
    {
        return $this->name . ' says Hello';
    }
}