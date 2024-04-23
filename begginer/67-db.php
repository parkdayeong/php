<?php

$host = 'localhost';
$uname = 'root';
$pw = '';
$dbname = 'kingchobo';

try{

  $conn = new PDO("mysql:host=$host;dbname=$dbname", $uname, $pw);
  $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  echo "db연결성공 <hr>";
  
}catch(PDOException $e){
  echo $e->getMessage();
  echo "db연결실패 <hr>";
  exit;
}

// echo "hi";





?>