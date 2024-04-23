<?php

$host ='localhost';
$user = 'root';
$pw = '';
$db = 'kingchobo';

try{
  $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pw);
  $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "db연결성공";
} catch(PDOException $e){
  echo $e->getMessage();
  exit;
}



?>