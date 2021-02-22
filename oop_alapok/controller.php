<?php

include 'User.php';
include "User1.php";

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

$user3 = new User1("Brad", 36);
echo $user3->name . ' is ' . $user3->age . ' years old';
echo '</br>';
echo $user3->sayHello();

echo '</br>';

$user4 = new User1("Jeff", 28);
echo $user4->name . ' is ' . $user4->age . ' years old';
echo '</br>';
echo $user4->sayHello();