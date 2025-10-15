<?php
if (file_exists(__DIR__ . '/../credentials.php')) {
    include(__DIR__ . '/../credentials.php');
} else {
    $main_username = getenv('ADMIN_USERNAME');
    $main_password = getenv('ADMIN_PASSWORD');
}

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == $main_username && $password == $main_password ) {
        session_start();
        $_SESSION["user"] = $main_username;
        header("Location:index.php");
    }
    else {
        echo "<script>alert('Invalid credentials');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5" style="max-width:600px" >
        <div class="login-form">
            <form action="login.php" method="post" >
                <div class="form-field mb-4">
                    <input class="form-control" type="text" name = "username" id="" placeholder="Username">
                </div>
                <div class="form-field mb-4">
                    <input class="form-control" type="password" name = "password" id="" placeholder="Password">
                </div>
                <div class="form-field mb-4">
                    <input class="btn btn-primary" type="submit" value = "Login" name = "login">
                </div>
            </form>
        </div>
    </div>
</body>
</html>