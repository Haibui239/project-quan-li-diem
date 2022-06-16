<?php 
include 'config.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
  $_SESSION = array(); session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <meta http-equiv="refresh" content="18;url=/">
</head>
<body>
    <?php
        header('Location: ../home/index.php');
    ?>
    <a href="logout.php">Logout</a>
</body>
</html>