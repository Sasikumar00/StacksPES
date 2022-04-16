<?php 

include("connection.php");
include("php_functions.php");
session_start();
check_login();

// get feedback data and store in database
if (isset($_GET['NAME'])) {
    $name = $_GET['NAME'];
    $email = $_GET['EMAIL'];
    $message = $_GET['MESSAGE'];
    //remove slashes to prevent sql injection
    $name = stripslashes($name);
    $email = stripslashes($email);
    $message = stripslashes($message);
    $userId = $_SESSION['user_id'];
    $query = "INSERT INTO feedback (user_id, name, email, message) VALUES ('$userId','$name', '$email', '$message')";
    $result = mysqli_query($con, $query);
    if ($result) {
        //redirect to home page
        header("location: home1.php?feedback=success");
        die;
    }
    //redirect to home page
    header("location: home1.php");
    die;
}

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
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
            <h1>Feedback Form</h1>
            <input type="text" name="NAME" id="name" placeholder="Enter your name">
            <input type="email" name="EMAIL" id="email" placeholder="Enter your email address">
            <textarea name="MESSAGE" id="message" placeholder="Enter your message here"></textarea>
            <input type="submit" value="submit" id="submit"></input>
        </form>
        <script>
            <?php
            //set value of name and email from session variables
            if (isset($_SESSION['userName'])) {
                echo "document.getElementById('name').value = '" . $_SESSION['userName'] . "';";
            }
            if (isset($_SESSION['userEmail'])) {
                echo "document.getElementById('email').value = '" . $_SESSION['userEmail'] . "';";
            }

            ?>
        </script>
    </div>
</body>

</html>