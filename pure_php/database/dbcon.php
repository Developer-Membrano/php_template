<?php

$server = "localhost";
$root = "root";
$password = "";
$username = "template";

$con = mysqli_connect($server, $root , $password, $username);

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}

?>