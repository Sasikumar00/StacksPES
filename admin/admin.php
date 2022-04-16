<?php

include("../php_functions.php");
session_start();
check_login();

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
    <!-- admin dashboard -->
    <div class="jumbotron text-center" style="width: 100%;">
        <h1>ADMIN DASHBOARD</h1>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-6 d-flex justify-content-center">
                <button class="btn-primary btn ml-2"><a href="./feedback_data.php" class="text-white">Feedback</a></button>
                <button class="btn-primary btn ml-2"><a href="./user_data.php" class="text-white">Users</a></button>
                <button class="btn-primary btn ml-2"><a href="./user_data.php" class="text-white">User Operations</a></button>
                <button class="btn-danger btn ml-2"><a href="./logout.php" class="text-white">Logout</a></button>
            </div>
        </div>
    </div>
    <script src="./bootstrap/js/bootstrap.js"></script>
</body>

</html>