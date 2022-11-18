<?php

$servername="localhost";
$username="root";
$password="";
$dbname="registration";

$conn=mysqli_connect("localhost","root","","registration");

if($conn)
{
    echo "successfully connected";
}
else
{
    echo "connection failed".mysql_connect_error();
}

?>