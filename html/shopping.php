<?php
include "pages/conn.php";
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
            <a href="shopping.php">Menu</a>
            <a href="#">Bezorging</a>
            <a href="contact.php">Contact</a>
        </div>
        <div class="login">
        <a href="login.php"><img src="assets/user.png" alt=""></a>
        </div>
        <div class="order">
        <a href="#"><img src="assets/bag.png" alt=""></a>
        </div>

    </div>
</div>
       
<div class="centerbox">
    <div class="productbox">
   
        <div class="foto">
            <img src="assets/bao.jpg" alt="">
        </div>
        <div class="beschrijving">
            <div class="title">
                <h1>Varkens Bao</h1>
            </div>
            <div class="beschrijving1">
                 <?php
                 $stmt = $connection->query("SELECT * FROM producten");
                 while ($row = $stmt->fetch()) {
                 echo $row['naam']."<br />\n";
                 }

                 ?>
        
            </div>
        </div>
        <div class="prijs">
            <div class="niks"></div>

            <div class="winkelmandje">
                -   €6,95   +
                </div>
    
        </div>
        
    </div>

    <div class="productbox">
        <div class="foto">
            <img src="assets/pokebowl.jpg" alt="">
        </div>
        <div class="beschrijving">
            <div class="title">
                <h1>Pokebowl Zalm</h1>
            </div>
            <div class="beschrijving1">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim nunc faucibus a pellentesque sit amet porttitor eget. Blandit libero volutpat sed cras. Sed faucibus turpis in eu. Scelerisque eleifend donec pretium vulputate. Tincidunt ornare massa eget egestas purus viverra
            </div>
        </div>
        <div class="prijs">
            <div class="niks"></div>

            <div class="winkelmandje">
                -   €12,95   +
                </div>
    
        </div>
        
    </div>

    <div class="productbox">
        <div class="foto">
            <img src="assets/dumbling.avif" alt="">
        </div>
        <div class="beschrijving">
            <div class="title">
                <h1>Dumbling Varken</h1>
            </div>
            <div class="beschrijving1">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim nunc faucibus a pellentesque sit amet porttitor eget. Blandit libero volutpat sed cras. Sed faucibus turpis in eu. Scelerisque eleifend donec pretium vulputate. Tincidunt ornare massa eget egestas purus viverra
            </div>
        </div>
        <div class="prijs">
            <div class="niks"></div>

            <div class="winkelmandje">
                -   €8,50   +
                </div>
    
        </div>
        
    </div>
</div>



<div class="div">
<?php
$stmt = $connection->prepare("SELECT * FROM producten");
$stmt -> execute();
$data = $stmt->fetchAll();

foreach ($data as $row){
    echo $row ['naam'];
    echo "<a href='pages/product_update.php?id=".$row['id']."'>Update</a>"; 
}

?>


</div>





<footer>
<div class="text1">
<p>
    Heyendaalseweg 98,
    
    Nijmegen 6525EE
</p>
</div>

<div class="text2">
<p>
theredcafe@gmail.com, +31612345678
</p>
</div>    

</footer>
       
    










</div>
</body>
</html>