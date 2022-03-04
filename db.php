<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="student";
$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(mysqli_connect_errno($con))
{
    echo "Failed to connect".mysqli_connect_errno($con);
}
?>