<?php

session_start();
 require_once './database.php';
 $user = $_POST['user'];
 $password = $_POST['password'];
    $statements = "SELECT * FROM admin";
 $credentials = mysqli_query($conn,$statements);
 $data = mysqli_fetch_assoc($credentials);
 if($data['user'] == $user && $data['password'] == $password){
    echo "code04";
    $_SESSION['DataSet'] = "code04";
 }
 else{
    echo 'User Not found!';
 }

?>