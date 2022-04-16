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
    <link rel="stylesheet" href="assets/css/feedback.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Feedback</title>
</head>

<body>
    <div class="navigation">
        <a href="./home1.php"><button>Back</button></a>
    </div>
    <h1 id="heading">Have any suggestions? Reach out to us</h1>
    <div class="container">
        <form action="thanks.html">
            <h1>Feedback Form</h1>
            <input type="text" name="NAME" id="name" placeholder="Enter your name">
            <input type="email" name="EMAIL" id="email" placeholder="Enter your email address">
            <textarea name="MESSAGE" id="message" placeholder="Enter your message here"></textarea>
            <button id="submit">SUBMIT</button>
        </form>
    </div>
</body>

</html>