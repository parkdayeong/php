<?php

$host = 'localhost';
$uname = 'root';
$pw = '';
$db_name = 'csvmember';


try{
  $conn = new PDO("mysql:host=$host;db_name=$db_name", $uname, $pw);
  $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "db연결성공<hr>";
}catch(PDOException $e){
  echo $e -> getMessage();
}

?>