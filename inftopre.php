<?php

include("php_functions.php");
include("connection.php");
session_start();
check_login();

if (isset($_GET['infixvalue'])) {
    $infixvalue = $_GET['infixvalue'];
    //add slashes to the input
    $infixvalue = addslashes($infixvalue);
    //store infix and postfix values in database with user id
    $user_id = $_SESSION['user_id'];
    $sql = "INSERT INTO infixtopre (user_id, infixvalue) VALUES ('$user_id', '$infixvalue')";
    $result = mysqli_query($con, $sql);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/theme.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Practise</title>
</head>

<body>
    <div class="navigation">
        <a href="./home1.php"><button>Back</button></a>
        <a href="/inftopre.php"><button>Reset</button></a>
    </div>
    <div id="container">
    </div>
    <div class="operat">
        <div id="control">
            <button id="pause">Pause</button>
            <button id="play">Play</button>
        </div>
        <div class="buttons">
            <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="get">
                <input type="text" name="infixvalue" id="num" placeholder="Enter the Infix Expression">
                <input type="text" name="pre" id="pre" placeholder="Prefix Expression">
                <input type="submit" value="Evaluate" id="push"></input>
            </form>
        </div>
    </div>
    <button id="algo"><a href="./algo_inftopre.html">Algorithm</a></button>
    <?php
    if (isset($_GET['infixvalue'])) {
        echo "<script>
              document.addEventListener(\"DOMContentLoaded\", function(event) {
                var infixvaluee = '" . $_GET['infixvalue'] . "';
                var infix = document.getElementById('num');
                infix.value = infixvaluee;
                start_conversion();
               });
            </script>";
    }
    ?>
    <script src="assets/js/pushpopgeneralpurpose.js"></script>
    <script src="assets/js/inf_pre.js"></script>

</body>

</html>