<?php

$server_name = "localhost";
$user = "root";
$pass = "";

$connect = mysqli_connect($server_name, $user, $pass);

if(!$connect){
	die('Connect failed: ' . mysqli_connect_error());
}