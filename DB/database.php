<?php

$host="localhost";
$user="root";
$password="";
$db="farming";

$conn=mysqli_connect($host,$user,$password,$db);
if(mysqli_connect_errno()){
    echo "connect error ".mysqli_connect_error();
}
?>
