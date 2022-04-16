<?php

function check_login(){
    if(isset($_SESSION['user_id'])){
        return true;
    }
    header("location: ../entry.php");
    die;
}

function check_login_admin(){
    if(isset($_SESSION['user_id']) && $_SESSION['user_id'] == 9845){
        return true;
    }
    header("location: ../entry.php");
    die;
}

function logout(){
    if(isset($_SESSION['user_id'])){
        unset($_SESSION['user_id']);
        unset($_SESSION['userName']);
        unset($_SESSION['userEmail']);
    }
    header("location: ../entry.php");
    die;
}

