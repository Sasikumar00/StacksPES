<?php

include("../connection.php");
include("../php_functions.php");
session_start();
check_login();

//get feedback data from the database
$sql = "SELECT * FROM feedback";
$result = mysqli_query($con, $sql);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <title>FeedBack Data</title>
</head>

<body>
    <div class="jumbotron text-center" style="width: 100%;">
        <h1>FEEDBACK DASHBOARD</h1>
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
                <h4>Message</h4>
            </div>
            <div class="col-2" style="border: 2px black solid;">
                <h4>Date</h4>
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
            echo  $row['message'];
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