<?php


class User3
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var int
     */
    protected $age;

    /**
     * User3 constructor.
     * @param string $name
     * @param int $age
     */
    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

}