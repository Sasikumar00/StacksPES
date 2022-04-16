<?php

include("../php_functions.php");
session_start();
check_login_admin();

if (isset($_GET['logout'])) {
    logout();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="./admin.php">Stacks</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./admin.php">Admin Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./user_data.php">User Data</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="./feedback_data.php">Feedback Data</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./user_op.php">User Operations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="./admin.php?logout=1">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- admin dashboard -->
    <div class="jumbotron text-center" style="width: 100%;">
        <h1>ADMIN DASHBOARD</h1>
        <p>Team IDC members only access page</p>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-6 d-flex justify-content-center">
                <button class="btn-primary btn ml-2"><a href="./feedback_data.php" class="text-white">Feedback</a></button>
                <button class="btn-primary btn ml-2"><a href="./user_data.php" class="text-white">Users</a></button>
                <button class="btn-primary btn ml-2"><a href="./user_op.php" class="text-white">User Operations</a></button>
                <button class="btn-danger btn ml-2"><a href="./admin.php?logout=1" class="text-white">Logout</a></button>
            </div>
        </div>
    </div>
    <script src="./bootstrap/js/bootstrap.js"></script>
</body>

</html>