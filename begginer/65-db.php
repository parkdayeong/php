<?php

$host = 'localhost';
$username = 'root';
$pw = '';
$dbname = 'kingchobo';


try{
  $conn = new PDO("mysql:host=$host; dbname=$dbname", $username, $pw);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "db연결성공";
  echo "<hr>";
}catch(PDOException $e){
  echo $e->getMessage();
  echo "db연결 실패";
  exit;
}


?>