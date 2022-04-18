<?php
//only modify username and password if you are using the 
//provided Sql file for Database creation.
//connection to the data base
$servername = "localhost";
$dbusername = "root";
$dbpassword = "Alphacentauri12";
$dbname = "stacks";

$con = mysqli_connect($servername,$dbusername,$dbpassword,$dbname);

//check if connected
if(!$con){
    die("Connection failed: " . mysqli_connect_error());
}
