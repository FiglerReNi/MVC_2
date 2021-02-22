<?php


class User
{
    //public $name = 'Brad';
    public $name;

    public function sayHello() :string
    {
        return $this->name . ' says Hello';
    }
}