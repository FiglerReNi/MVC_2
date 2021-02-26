<?php
$host = 'localhost';
$user = 'root';
$pass = '12345';
$db = 'pdo_teszt';

$dsn = 'mysql:host=' .$host. ';dbname=' . $db;
$pdo = new PDO($dsn, $user, $pass);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
$sql = 'SELECT * FROM users WHERE status =:status ';
$stmt = $pdo->prepare($sql);
$stmt->execute(['status' => 'admin']);
$users = $stmt->fetchAll();
//$users = $stmt->fetchAll(PDO::FETCH_OBJ);

foreach ($users as $user){
//    echo $user['name']. '</br>';
    echo $user->name. '</br>';
}

$name = 'Karen';
$email = 'teszt@teszt.com';
$status = 'guest';

$sql = 'INSERT INTO users SET name =:name, email =:email, status =:status';
$stmt = $pdo->prepare($sql);
$stmt->execute(['name'=> $name, 'email' => $email, 'status' => $status]);
echo 'Added user';