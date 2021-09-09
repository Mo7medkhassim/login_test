<?php

use phpDocumentor\Reflection\Location;

session_start();

// use use defualt damy data as authentication for example
// srore damy username
$_SESSION['username'] = "admin";
$username = $_SESSION['username'];
// srore damy password
$_SESSION['password'] = "admin";
$passwordHash = $_SESSION['password'];
// srore damy password
$_SESSION['greeting'] = "You are Loging Successfully!";

// data send by user

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $formUsername = $_POST['username'];
    $formPassword = $_POST['password'];

    if ($formUsername !== $username) {
        $formError = ['username' => 'The username was not found.'];
    } elseif (!password_verify($formPassword, $passwordHash)) {
        $formError = ['password' => 'The provided password is invalid.'];
    }

    if ($formUsername == $username && $formPassword == $passwordHash) {
        header('Location:home.php');
    }
}





?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title> login </title>
</head>


<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                </li>



            </ul>

            <form class="form-inline my-2 my-lg-0">

                <a class="btn btn-outline-light my-2 my-sm-0" href="">Login</a>
            </form>
        </div>
    </nav>


    <div class="container">
        <div class="row">


            <div  class="d-flex justify-content-center mx-2 mt-3">
                <form method="post" action="" class="" style="width: 100%; max-width: 350px;">
                    <div class="text-center mb-4">
                        <h1 class="h3 mb-3 font-weight-normal">Authenticate</h1>
                        <p>Use <code>admin</code> for both username and password.</p>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>

                    <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block">Login</button>
                </form>

            </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>