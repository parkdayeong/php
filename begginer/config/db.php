<?php

$servername = 'localhost';
$username = 'root';
$pw = '';
$dbname = 'member';

try{
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $pw);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "db연결에 성공하였습니다.";
  echo "<hr>";
}catch(PDOException $e){
  $e->getMessage();
  echo "db연결에 실패하였습니다."; 
  echo "<hr>";
}

?>