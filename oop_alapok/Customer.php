<?php

include 'User2.php';

class Customer extends User2
{

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
}