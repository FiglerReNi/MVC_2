<?php

include 'User.php';

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