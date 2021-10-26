<?php

$host = "localhost:4306";
$user = "root";
$pass = "";
$name = "expressmas";

$con = mysqli_connect($host,$user,$pass,$name);

if(mysqli_connect_errno()){
    echo "failed to connect to MySQL : ". mysqli_connect_errno();
}

?>