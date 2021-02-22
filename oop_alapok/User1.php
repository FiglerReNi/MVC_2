<?php


class User1
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
     * User1 constructor.
     * @param $name
     * @param $age
     */
    public function __construct(string $name, int $age)
    {
        echo  __CLASS__ . 'instantiated </br>';
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function sayHello() :string
    {
        return $this->name . ' says Hello';
    }

    public function __destruct()
    {
       echo '</br> destructor run';
    }
}