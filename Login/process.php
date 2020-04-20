<?php
    // Get values passe from form in login.php file
    $username = $_POST['user'];
    $password = $_POST['pass'];


    // to prevent mysql injection

  
    //connect to the server ans select database
    $host = "127.0.0.1";
    $username = "root";
    $pass = "anurag1999";
    $con = mysqli_connect($host, $username, $pass, "login");

   
    die(mysqli_error($con));

    //Query the database for user
    $result = mysqli_query("Select * from users where username = '$username' and password = '$password'")
                or die("Failed to query database ".mysqli_error());
    $row = mysqli_fetch_array($result);
    if ($row['username'] == $username && $row['password'] == $password){
        echo "Login Success!!! Welcome Guys ",$row['username']; 
    } else {
        echo "Failed to login";
    }


?>

