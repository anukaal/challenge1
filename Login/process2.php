<?php


$host = "127.0.0.1";
$username = "root";
$password = "anurag1999";
$database = "login";

$conn = mysqli_connect($host,$user,$password,$database);


if(isset($_POST['username'])){

    $username = $_POST['user'];
    $password = $_POST['pass'];

    $sql = "select * from login where username = '".$username."'AND password = '".$password."' limit 1";

    $result = mysqli_query($sql);

    if(mysqli_num_rows($result)==1){
        echo " You Have sucessfully Logged in";
        exit();

    }
    else{
        
        echo " You have Entered Incorrect Password";
        exit();
    }
}

?>