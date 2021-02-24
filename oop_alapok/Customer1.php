<?php

include 'User3.php';

class Customer1 extends User3
{
    /**
     * @var int
     */
    private int $balance;

    /**
     * Customer1 constructor.
     * @param string $name
     * @param int $age
     * @param int $balance
     */
    public function __construct(string $name, int $age, int $balance)
    {
        parent::__construct($name, $age);
        $this->balance = $balance;
    }

    /**
     * @return int
     */
    public function getBalance() :int
    {
        return $this->balance;
    }

    /**
     * @param int $amount
     * @return string
     */
    public function pay(int $amount) :string
    {
        return $this->name . ' paid $' . $amount;
    }

}