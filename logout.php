<?php
// Logout
    // Session creation 
    session_start();
    if(isset($_SESSION['DataSet'])){
        session_unset();
        session_destroy();
    }else{
        header("location: ./login.php");
    }
?>