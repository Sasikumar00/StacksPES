<?php

include("php_functions.php");
include("connection.php");
session_start();
check_login();

//prevent repeated execution

if (isset($_GET['prefixvalue'])) {
    $prefixvalue = $_GET['prefixvalue'];
    //add slashes to the input
    $prefixvalue = addslashes($prefixvalue);
    $user_id = $_SESSION['user_id'];
    $sql = "INSERT INTO prefixtopost (user_id, prefixvalue) VALUES ('$user_id', '$prefixvalue')";
    $result = mysqli_query($con, $sql);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/theme.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Practise</title>
    <style>
        .stack {
            font-size: 60px;
        }
    </style>
</head>

<body>
    <div class="navigation">
        <a href="/home1.php"><button>Back</button></a>
        <a href="/pretopost.php"><button>Reset</button></a>
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
                <input type="text" name="prefixvalue" id="num" placeholder="Enter the Prefix Expression">
                <input type="text" name="pre" id="pre" placeholder="Postfix Expression">
                <!-- <button id="push" onclick="start_conversion()">Evaluate</button> -->
                <input type="submit" value="Evaluate" id="push"></input>
            </form>
        </div>
    </div>
    <button id="algo"><a href="./algo_pretopost.html">Algorithm</a></button>
    <?php
    if (isset($_GET['prefixvalue'])) {
        echo "<script>
              document.addEventListener(\"DOMContentLoaded\", function(event) {
                var prefixvaluee = '" . $_GET['prefixvalue'] . "';
                var prefix = document.getElementById('num');
                prefix.value = prefixvaluee;
                start_conversion();
               });
            </script>";
    }
    ?>
    <script src="assets/pushpopgeneralpurpose.js"></script>
    <script src="assets/pre_post.js"></script>

</body>

</html>