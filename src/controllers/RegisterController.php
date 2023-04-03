<?php
    session_start();
    require_once('../../db.php');
?>

<?php

    $entered_email = htmlspecialchars($_POST["email"]);
    $entered_pwd = htmlspecialchars($_POST["password"]);
    $entered_fname = htmlspecialchars($_POST["first_name"]);
    $entered_lname = htmlspecialchars($_POST["last_name"]);

    $query = "INSERT INTO user (fname, lname, email, password) VALUES ('$entered_fname', '$entered_lname', '$entered_email', '$entered_pwd');";
    $statement = $pdo -> prepare($query);
    $statement -> execute();

    header('Location: ../views/login.php?failed=false');


?>

<?php

    $pdo = null;

?>