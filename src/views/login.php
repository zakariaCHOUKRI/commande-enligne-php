<?php
    session_start();
    require_once('../../db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Login</h3>
                    </div>
                    <div class="card-body">
                        <form class="form" role="form" autocomplete="off" method="POST" action="../controllers/LoginController.php">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control form-control-lg rounded-0" name="email" id="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control form-control-lg rounded-0" name="password" id="password" required>
                            </div>
                            <button type="submit" class="btn btn-success btn-lg float-right">Login</button>
                        </form>
                    </div>
                    <div class="card-footer">
                        <a href="register.php" class="btn btn-outline-primary btn-lg">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php

if (isset($_GET["failed"])) {
    if ($_GET["failed"] === 'false') {
        echo "you are registered successfully";
    } else {
        echo "your information is incorrect";
    }
}



?>


<?php

    $pdo = null;

?>