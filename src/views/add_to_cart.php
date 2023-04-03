<?php
    session_start();
    require_once('../../db.php');
?>

<?php

$dish_name = htmlspecialchars($_GET["item"]);

$query = "SELECT did FROM dish WHERE dname = '$dish_name';";
$statement = $pdo -> prepare($query);
$statement -> execute();
$dish_id_array = $statement -> fetchAll();
$dish_id = $dish_id_array[0][0];




echo "the id of the selected dish to be inserted into the cart: " . $dish_id;

// header('Location: ../views/login.php?failed=false');

?>