<?php
$servername = 'localhost';
$username = 'root';
$password = '';

try{
  $conn = new PDO("mysql:host=$servername", $username, $password);
  $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  echo "<p>Database에 연결했습니다.</p>";
} catch(PDOException $e){
  echo $e->getMessage();
  echo "<p>DB연결에 실패했습니다.</p>";
  exit;
}


try{
  $dbname = "aaa";
  // $sql = "CREATE DATABASE ".$dbname;
  $sql = "DROP DATABASE ".$dbname;
  $conn->exec($sql);
  // echo "<p> $dbname 이 생성되었습니다.</p>";
  echo "<p> $dbname 이 삭제되었습니다.</p>";
} catch(PDOException $e){
  echo "에러메세지: " . $e->getMessage();
  }



$conn = null;










?>