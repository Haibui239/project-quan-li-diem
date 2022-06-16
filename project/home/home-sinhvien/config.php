<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "thuctap";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
    mysqli_set_charset($conn, 'UTF8');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
?>