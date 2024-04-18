<?php
session_start();

require 'pages/conn.php';
if(empty($_POST['username']) || empty($_POST['password'])){
    header("location: login.php");
    exit();
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE username=:username AND email=:password";
$stmt = $connection->prepare($sql);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $password);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["username"] = $row['username'];
        $_SESSION['rol'] = $row['rol'];
    }
    if ($_SESSION['rol'] == "3") {
        header("location: pages/klant.php");
    } elseif ($_SESSION['rol'] == "1") {
        header('Location:dashbord.php');
    }
} else {
    echo "Fout: Verkeerde gebruikersnaam of wachtwoord.";
}
?>
