<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "thuctap";

    //Create connection
  $conn = new mysqli($servername,$username,$password, $dbname );
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed:" . $conn->connect_error);

    }
   
    mysqli_set_charset($conn, 'UTF8');
?>