<?php
session_start();
include 'pages/conn.php';

if (empty($_POST["username"]) || empty($_POST["pass"]) || empty($_POST["email"])) {
    header("location: login.php");
    exit();
}

$username = $_POST["username"];
$password = $_POST["pass"]; 
$email = $_POST["email"];

$stmt = $connection->prepare("INSERT INTO user (username, email, password) VALUES(:naam, :pass, :mail)");
$stmt->bindParam(":naam", $username); 
$stmt->bindParam(":pass", $password);
$stmt->bindParam(":mail", $email);
$stmt->execute();

header('location:index.php');
?>