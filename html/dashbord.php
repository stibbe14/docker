<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>The Red Cafe</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="assets/logo.jpg">
</head>
<body>
    <!-- jo -->
<div class="all">
    <div class="infobalk">
        <div class="logo">
            <img src="assets/logo.png" alt="">
        </div>
    <div class="parent">
        <div class="menubalk">
            <a href="index.php">Home</a>
            <a href="">Toevoegen</a>
            <a href="#">Werknemers</a>
            <a href="#">Omzet</a>
        </div>
        <div class="login">
        <a href="logout.php"><img src="assets/user.png" alt=""></a>
        </div>
       

    </div>
</div>

    <div class="center">
    <div class="box12">
        <div class="box1">
            <h1>Omzet</h1>
        </div>
        <div class="box2">
            <h1>Werknemers</h1>
        </div>
    </div>
    <div class="box34">
        <div class="box3">
            <h1>werknemer van de maand</h1>
        </div>
        <div class="box4">
            <div class="boxtext">    
                <h1>menu</h1> 
        
        
        </div>
            <div class="shoppingbox">

                

            </div>
       
           
        </div>
    </div>



    </div>








</div>
       


       
    










</div>
</body>
</html>