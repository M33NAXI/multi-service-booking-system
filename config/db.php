<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "appointment_system";

$conn = mysqli_connect($host, $user, $pass, $db);

if(!$conn){
    die("Database connection failed");
}
?>
