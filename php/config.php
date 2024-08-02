<?php
$host = "localhost";
$user = "root"; // or your MySQL username
$password = ""; // or your MySQL password
$database = "chat";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
