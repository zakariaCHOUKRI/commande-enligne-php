<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Register</h3>
                    </div>
                    <div class="card-body">
                        <form class="form" role="form" autocomplete="off" method="POST" action="register_process.php">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control form-control-lg rounded-0" name="first_name" id="first_name" required>
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control form-control-lg rounded-0" name="last_name" id="last_name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control form-control-lg rounded-0" name="email" id="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control form-control-lg rounded-0" name="password" id="password" required>
                            </div>
                            <button type="submit" class="btn btn-success btn-lg float-right">Register</button>
                        </form>
                    </div>
                    <div class="card-footer">
                        <a href="login.php" class="btn btn-outline-primary btn-lg">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
