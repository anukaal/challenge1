<?php
    // Get values passe from form in login.php file
    $username = $_POST['user'];
    $password = $_POST['pass'];


    //connect to the server ans select database
    mysql_connect("localhost", "root", "");
    mysql_select_db("login");

    //Query the database for user
    $result = mysql_query("Select * from users where username = '$username' and password = '$password'")
                or die("Failed to query database ".mysql_error());
    $row = mysql_fetch_array($result);
    if ($row['username'] == $username && $row['password'] == $password){
        echo "Login Success!!! Welcome Guys ",$row['username']; 
    } else {
        echo "Failed to login";
    }


?>

