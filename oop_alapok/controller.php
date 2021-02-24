<?php

include 'User.php';
include 'User1.php';
include 'Customer.php';
include 'Customer1.php';
include 'User4.php';

$user1 = new User();
$user1->name = 'Brad';
echo $user1->name;
echo '</br>';
echo $user1->sayHello();

echo '</br>';

$user2 = new User();
$user2->name = 'Jeff';
echo $user2->name;
echo '</br>';
echo $user2->sayHello();

echo '</br>';

$user3 = new User1('Brad', 36);
echo $user3->name . ' is ' . $user3->age . ' years old';
echo '</br>';
echo $user3->sayHello();

echo '</br>';

$user4 = new User1('Jeff', 28);
echo $user4->name . ' is ' . $user4->age . ' years old';
echo '</br>';
echo $user4->sayHello();

echo '</br>';

$customer = new Customer('Brad', 36);
echo $customer->getEmail();

echo '</br>';

$user5 = new User2('Jeff', 28);
//echo $user5->getName();
echo $user5->__get('name');
//$user5->setName('John');
$user5->__set('name', 'John');
echo '</br>';
//echo $user5->getName();
echo $user5->__get('name');

echo '</br>';

$customer1 = new Customer1('John', 28, 200);
echo $customer1->pay(100);
echo '</br>';
echo $customer1->getBalance();

echo '</br>';

$password = 'hello';
if(User4::validatePass($password)){
    echo 'Password valid';
}else{
    echo 'Passwor not valid';
}

echo '</br>';