<?php
    require_once("register.php");
        // var_dump($_COOKIE);
        setcookie("fullname","",0,"/");
        setcookie("username","",0,"/");
        setcookie("password","",0,"/");
        setcookie("email","",0,"/");
        setcookie("phone_number","",0,"/");
    register();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="text-center">
                    Registation Form - Input User's Detail Information 
                </h2>
            </div>
        </div>
        <div class="panel-body">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="name">Ho ten: </label>
                    <input type="text" class="form-control" name="fullname">
                </div>
                <div class="form-group">
                    <label for="text">User Name: </label>
                    <input type="text" class="form-control" name="username">
                </div>

                <div class="form-group">
                    <label for="pwd">Password: </label>
                    <input type="password" class="form-control" name="password">
                </div>

                <div class="form-group">
                    <label for="email">Email address: </label>
                    <input type="email" class="form-control" name="email">
                </div>

                <div class="form-group">
                    <label for="number">Phone Number: </label>
                    <input type="number" class="form-control" name="phone_number">
                </div>
                <button type="submit" class="btn btn-default">Register</button>
            </form>
        </div>
    </div>
</body>
</html>