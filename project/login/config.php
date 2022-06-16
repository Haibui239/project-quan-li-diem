<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "thuctap";

$conn = mysqli_connect($server, $user, $pass, $database);
mysqli_set_charset($conn, 'UTF8');
if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>