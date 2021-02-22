<?php


class User2
{
    /**
     * @var string
     */
    private string $name;
    /**
     * @var int
     */
    private int $age;

    /**
     * @var string
     */
    protected string $email = 'teszt@teszt.com';

    /**
     * User2 constructor.
     * @param $name
     * @param $age
     */
    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * @param $property
     * @return string
     */
    public function __get($property): string
    {
        if(property_exists($this, $property)){
            return $this->$property;
        }else{
            return 'Not exists property';
        }
    }

    /**
     * @param $property
     * @param $value
     */
    public function __set($property, $value) :void
    {
        if(property_exists($this, $property)){
           $this->$property = $value;
        }
    }

//    /**
//     * @return string
//     */
//    public function getName(): string
//    {
//        return $this->name;
//    }

//    /**
//     * @param string $name
//     */
//    public function setName(string $name): void
//    {
//        $this->name = $name;
//    }
//
//    /**
//     * @return int
//     */
//    public function getAge(): int
//    {
//        return $this->age;
//    }
//
//    /**
//     * @param int $age
//     */
//    public function setAge(int $age): void
//    {
//        $this->age = $age;
//    }

}