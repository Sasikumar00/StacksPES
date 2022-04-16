<?php

include("../connection.php");
include("../php_functions.php");
error_reporting(E_ALL ^ E_WARNING);

session_start();
check_login_admin();
$result;
$row;
//get infix data from the database
if (isset($_POST['user_id'])) {
    $user = $_POST['user_id'];
    $option = $_POST['operation_type'];
    if ($option == "inftopost") {
        //get data from the infixtopost database
        $sql = "SELECT user_id,infixvalue,timestamp FROM infixtopost WHERE user_id='$user'";
        $result = mysqli_query($con, $sql);
        //check result if no data alert user does not have any data
        if (mysqli_num_rows($result) == 0) {
            echo "<script>alert('user does not have any data in the database for this operation');</script>";
            unset($result);
        }
    } elseif ($option == "inftopre") {
        //get data from the infixtoprefix database
        $sql = "SELECT user_id,infixvalue,timestamp FROM infixtopre WHERE user_id='$user'";
        $result = mysqli_query($con, $sql);
        //check result if no data alert user does not have any data
        if (mysqli_num_rows($result) == 0) {
            echo "<script>alert('user does not have any data in the database for this operation');</script>";
            unset($result);
        }
    } elseif ($option == "pretopost") {
        //get data from the prefixtopost database
        $sql = "SELECT user_id,prefixvalue,timestamp FROM prefixtopost WHERE user_id='$user'";
        $result = mysqli_query($con, $sql);
        //check result if no data alert user does not have any data
        if (mysqli_num_rows($result) == 0) {
            echo "<script>alert('user does not have any data in the database for this operation');</script>";
            unset($result);
        }
    }
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
                <li class="nav-item">
                    <a class="nav-link" href="./admin.php">Admin Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./user_data.php">User Data</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./feedback_data.php">Feedback Data</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="./user_op.php">User Operations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="./admin.php?logout=1">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="jumbotron text-center" style="width: 100%;">
        <h1>USER OPERATIONS DASHBOARD</h1>
    </div>

    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="row d-flex justify-content-end">
            <!-- selection box -->
            <div class="col-2 form-group">
                <select name="operation_type" class="form-control">
                    <option value="inftopost">Infix to Postfix</option>
                    <option value="inftopre">Infix to Prefix</option>
                    <option value="pretopost">Prefix to Postfix</option>
                </select>
            </div>
            <div class="col-3 form-group">
                <input type="number" name="user_id" id="userid" class="form-control">
            </div>
            <div class="col-2 form-group">
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </div>
        </form>
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-9 text-center">                
                <?php if (@$_POST['operation_type'] == "inftopost") {
                    echo "<p style=\"font-size: 30px;\">Infix To Postfix data</p>";
                } elseif (@$_POST['operation_type'] == "inftopre") {
                    echo "<p style=\"font-size: 30px;\">Infix To Prefix data</p>";
                } elseif (@$_POST['operation_type'] == "pretopost") {
                    echo "<p style=\"font-size: 30px;\">Prefix To Postfix data</p>";
                } ?>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-2" style="border: 2px black solid;">
                <h4>User ID</h4>
            </div>
            <div class="col-3" style="border: 2px black solid;">
                <h4>Expression Value</h4>
            </div>
            <div class="col-4" style="border: 2px black solid;">
                <h4>TimeStamp</h4>
            </div>
        </div>


        <?php
        if (isset($result)) {
            while ($row = mysqli_fetch_row($result)) {
                echo "<div class=\"row  d-flex justify-content-center\">";
                echo  "<div class=\"col-2\" style=\"border: 2px black solid;\">";
                echo  $row[0];
                echo  '</div>';
                echo  '<div class="col-3" style="border: 2px black solid;">';
                echo $row[1];
                echo  '</div>';
                echo  '<div class="col-4" style="border: 2px black solid;">';
                echo  $row[2];
                echo  '</div>';
                echo "</div>";
            }
        }
        ?>
    </div>


    <script src="./bootstrap/js/bootstrap.js"></script>
</body>

</html>