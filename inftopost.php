<?php 

include("php_functions.php");
session_start();
check_login();

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
</head>

<body>
    <div class="navigation">
        <a href="/home1.php"><button>Back</button></a>
        <button id="reset">Reset</button>
    </div>
    <div id="container">
    </div>
    <div class="operat">
        <div id="control">
            <button id="pause">Pause</button>
            <button id="play">Play</button>
        </div>
        <div class="buttons">
            <input type="text" name="infixvalue" id="infixvalue" placeholder="Enter the Infix Expression">
            <input type="text" name="post" id="post" placeholder="Postfix Expression">
            <button id="push" onclick="InfixtoPostfix()">Evaluate</button>
        </div>
    </div>
    <button id="algo"><a href="./algo_inftopost.html">Algorithm</a></button>
    <!-- <script src="assets/script.js"></script> -->
    <script src="assets/inf_post.js"></script>
    <script src="assets/pushpopgeneralpurpose.js"></script>

</body>

</html>
