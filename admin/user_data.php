<?php


include("../connection.php");
include("../php_functions.php");
session_start();
check_login_admin();

//get user data from the database
$sql = "SELECT * FROM users";
$result = mysqli_query($con, $sql);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <title>USER Data</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="./admin.php">Stacks</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./admin.php">Admin Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
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
    <div class="jumbotron text-center" style="width: 100%;">
        <h1>User DASHBOARD</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-2" style="border: 2px black solid;">
                <h4>Name</h4>
            </div>
            <div class="col-3" style="border: 2px black solid;">
                <h4>Email</h4>
            </div>
            <div class="col-4" style="border: 2px black solid;">
                <h4>user ID</h4>
            </div>
            <div class="col-2" style="border: 2px black solid;">
                <p style="font-size: large; font-weight: 500;">Register Date</p>
            </div>
        </div>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class=\"row\">";
            echo  "<div class=\"col-2\" style=\"border: 2px black solid;\">";
            echo  $row['name'];
            echo  '</div>';
            echo  '<div class="col-3" style="border: 2px black solid;">';
            echo $row['email'];
            echo  '</div>';
            echo  '<div class="col-4" style="border: 2px black solid;">';
            echo  $row['user_id'];
            echo  '</div>';
            echo  '<div class="col-2" style="border: 2px black solid;">';
            echo  $row['timestamp'];
            echo  "</div>";
            echo "</div>";
        }
        ?>
    </div>
    <script src="./bootstrap/js/bootstrap.js"></script>
</body>

</html>