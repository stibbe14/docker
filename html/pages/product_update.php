<?php
session_start();
include'conn.php';

$stmt = $connection->prepare("SELECT * FROM producten WHERE id=id");
$stmt-> execute(['id=> $_GET'['id']])
$producten = $stmt->fetch();
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
    <from action='product_update_logic.php' name='product_updat_logic'method="POST">
        <label>Id van product:</label>
         <input type="text" name="id_producten" value="<?php echo $producten['id']; ?>" required>
        <label>Naam van product: </label>
         <input type="text" name="naam" value="<?php echo $producten['naam']; ?>" required>
         <label>Prijs van product: </label>
          <input type="text" name="prijs" value="<?php echo $producten['prijs']; ?>" required>
          <input type="submit" value="update product">
    </form>
    

</body> 
</html>