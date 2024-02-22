<?php

$server_name = 'localhost';
$user = 'root';
$pw = '';
$database = 'php';

$connect = mysqli_connect($server_name, $user, $pw, $database);
mysqli_select_db($connect, $database) or die("database select failed");






?>