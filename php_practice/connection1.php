<?php
$servername="localhost";
$username="root";
$password="";
$dbname="registration";

$conn=mysqli_connect("localhost","root","","registration");

if($conn)
{
    // echo "successfully connected";
}
else
{
    echo "Failed to connect".mysql_connect_error();
}

?>