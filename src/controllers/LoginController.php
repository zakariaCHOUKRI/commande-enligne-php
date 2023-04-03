<?php
    session_start();
    require_once('../../db.php');
?>

<?php

    $entered_email = htmlspecialchars($_POST["email"]);
    $entered_pwd = htmlspecialchars($_POST["password"]);

    $query = "SELECT password FROM user WHERE email = '" . $entered_email . "'";
    $statement = $pdo -> prepare($query);
    $statement -> execute();

    $result = $statement -> fetchAll();

    $db_pwd = $result[0][0];
    if ($entered_pwd === $db_pwd) {
        $_SESSION["email"] = $entered_username;
        header('Location: ../views/dashboard.php');
    } else {
        header('Location: ../views/login.php?failed=true');
    }


?>

<?php

    $pdo = null;

?>