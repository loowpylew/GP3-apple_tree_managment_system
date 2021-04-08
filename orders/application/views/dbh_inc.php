<?php

$servername = "localhost";
$dbUsername = "root";
$dbpassword = "";
$dbname = "orders";

$conn = mysqli_connect($servername, $dbUsername, $dbpassword, $dbname); 

if(!$conn){ 
    die("Connection failed: " .mysqli_connect_error()); 
}
