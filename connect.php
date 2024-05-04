<?php

$host = "localhost";
$user = "root";
$password = "";
$db ="projetdata";
$connect = new mysqli($host ,$user,$password ,$db);
if($connect->connect_error){
    echo "Failed to connect DB ".$connect->connect_error;
}
?>