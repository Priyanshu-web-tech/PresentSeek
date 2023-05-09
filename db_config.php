<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "presentseek";

$con = mysqli_connect($host, $user, $password, $db);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

?>