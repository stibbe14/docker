<?php
$host = "db";
$db = "mydatabase";
$user = "user";
$pass = "password";
$charset = "utf8mb4";
 
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try{
    $connection = new PDO ($dsn, $user, $pass, $options);
    } catch(\PDOExceptions $e) {
        echo "Connection failed: " . $e->getMessage();;
    }
    
?>