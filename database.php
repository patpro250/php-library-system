<?php
    $db_host = "localhost";
    $db_name = "mater_dei";
    $db_user = "root";
    $db_pass = "";

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if(!$conn) {
        echo "Database connection error: " . mysqli_connect_error();
    } 
?>