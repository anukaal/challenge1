<?php
    include('connection.php');
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $sql = "select * from login where username = '$username' and password = '$password'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
    

    if($row['user']==$username && $row['pass']==$password)
        echo"You are a validated user.";
    else
        echo"Sorry, your credentials are not valid, Please try again.";

        
?>