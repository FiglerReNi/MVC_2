<?php

include 'User3.php';

class Customer1 extends User3
{
    public function pay($amount)
    {
        return $this->name . ' paid ';
    }
}