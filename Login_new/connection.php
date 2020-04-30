<?php
    $host = "127.0.0.1";
    $user = "root";
    $password = "anurag1999";
    $db_name = "login";

    $con = mysqli_connect($host,$user,$password,$db_name);
    
    if(!$con)
    {
        die('Connection Failed'.mysqli_error());
    }
?>
