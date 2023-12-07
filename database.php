<?php

$hostname = "localhost";
$dbuser = "root";
$dbPassword = "";
$dbName = "login_register";
$conn = mysqli_connect($hostname, $dbuser, $dbPassword, $dbName);
 
if (!$conn){
    die("Something went wrong");
}
?>