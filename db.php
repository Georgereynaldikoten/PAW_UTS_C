<?php

$host = "sql105.epizy.com";
$user = "epiz_30071835";
$pass = "e6TSZcqYteKDnN";
$name = "epiz_30071835_expressmas";

$con = mysqli_connect($host,$user,$pass,$name);

if(mysqli_connect_errno()){
    echo "failed to connect to MySQL : ". mysqli_connect_errno();
}

?>