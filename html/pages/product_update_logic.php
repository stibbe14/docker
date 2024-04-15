<?php
include 'conn.php';

if(isset($_POST['naam'], $_POST['prijs'], $_POST['id_producten'])) {
    $data = [
        'naam' => $_POST['naam'],
        'prijs' => $_POST['prijs'],
        'id' => $_POST['id_producten']
    ];

    $sql = "UPDATE producten SET naam=:naam, prijs=:prijs WHERE id=:id";
    $stmt = $connection->prepare($sql);
    $stmt->execute($data);

  
    header('location: ../shopping.php');
    exit;
} else {

    echo "Niet alle vereiste gegevens zijn ontvangen.";
}

?>
