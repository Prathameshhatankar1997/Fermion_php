<?php

$servername="localhost";
$username="root";
$password="";
$dbname="register";

$conn=mysqli_connect("localhost","root","","register");

if($conn)
{
    echo "successfully connected";
}
else
{
    echo "connection failed".mysql_connect_error();
}

?>