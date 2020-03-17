<?php
    require_once('conn.php');
    // get form inputs
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $pass = $_POST['pass'];

    $query_insert = "INSERT INTO `sign_up` (`Username`, `Gender`, `Password`) VALUES ('$username', '$gender', '$pass');";

    // check if entry successful
    if(mysqli_query($conn,$query_insert)){
        echo "Sign up successful,you will receive weekly notifications via " . $username; 
    }else{
        echo "Something went wrong";
    }
?>