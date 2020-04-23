<?php


$host = "localhost";
$username = "root";
$password = "";
$db = "login";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['username'])){

    $username = $_POST['user'];
    $password = $_POST['pass'];

    $sql = "select * from login where username = '".$username."'AND password = '".$password."' limit 1";

    $result = mysql_query($sql);

    if(mysql_num_rows($result)==1){
        echo " You Have sucessfully Logged in";
        exit();

    }
    else{
        
        echo " You have Entered Incorrect Password";
    }
}