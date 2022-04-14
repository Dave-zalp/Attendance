<?php

//DEVELOPMENT CONNECTION
// $host = '127.0.0.1';
// $db = 'attendance_db';
// $user = 'root';
// $pass = '';
// $charset = 'utf8mb4';


// REMOTE CONNECTION
$host = 'remotemysql.com';
$db = 'x51T1ZXGW2';
$user = 'x51T1ZXGW2';
$pass = 'i8mA7lDqBj';
$charset = 'utf8mb4';



$dsn = "mysql:host=$host; dbname=$db; charset=$charset";

try{
    $pdo =new PDO($dsn,$user,$pass);

   
    
}
catch(PDOException $e){
throw new PDOException($e->getMessage());
}

require_once "crud.php";
$crud = new crud($pdo);
?>