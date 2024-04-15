<?php
session_start();
include 'conn.php';

// Check of id is ingesteld in de URL
if(isset($_GET['id'])) {
    // Gebruik parameterbinding om SQL-injecties te voorkomen
    $stmt = $connection->prepare("SELECT * FROM producten WHERE id = ?");
    $stmt->execute([$_GET['id']]);
    $product = $stmt->fetch();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Red Cafe</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="assets/logo.jpg">
</head> 
<body>
    <form action='product_update_logic.php' name='product_update_logic' method="POST">
        <label>Id van product:</label>
        <input type="text" name="id_producten" value="<?php echo isset($product['id']) ? $product['id'] : ''; ?>" required>
        <label>Naam van product:</label>
        <input type="text" name="naam" value="<?php echo isset($product['naam']) ? $product['naam'] : ''; ?>" required>
        <label>Prijs van product:</label>
        <input type="text" name="prijs" value="<?php echo isset($product['prijs']) ? $product['prijs'] : ''; ?>" required>
        <input type="submit" value="update product">
    </form>
</body> 
</html>
