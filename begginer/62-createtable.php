<?php

$servername = 'localhost';
$username = 'root';
$pw = '';
$database = 'php';


// DB연결
try{
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $pw);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "<p>DB연결 성공</p>";
} catch(PDOException $e){
 echo $e->getMessage();
 echo "<p>DB연결 실패</p>";
}


// 테이블생성

try{
$tablename = "MyGuests";
$sql = "CREATE TABLE ".$tablename."(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  
)";
$conn->exec($sql);
echo "<p>".$tablename."이 생성되었습니다.</p>";
} catch(PDOException $e){
  echo $e->getMessage();
}









?>