<?php
session_start();
if(empty($_POST['username']) || empty($_POST['password'])){
    header("location: login.php");
    exit();
}


$username = $_POST['username'];
$password = $_POST['password'];

if( $username == "admin@gmail.com" && $password == "admin"){
    $_SESSION['user'] = $username;
    header("Location: dashbord.php");
} else{
    header("location: login.php");
}
?>

