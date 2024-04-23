<?php

$server_name = 'localhost'; //127.0.0.1
$user = 'root';
$password = '';
//$port = '3306';
$database = 'dayeong';

$connect = mysqli_connect($server_name, $user, $password, $database);

mysqli_select_db($connect, $database) or die("database select failed");


?>