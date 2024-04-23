<?php

$servername = 'localhost';
$username = 'root';
$pw = '';
$db = 'member';


try{
  $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $pw);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "<p>db연결성공</p>"; 
  
}catch(PDOException $e){
  echo $e->getMessage();
  echo "<p>db연결 실패</p>";
}


try{
$sql = "INSERT INTO myguests(firstname, lastname, email)
VALUES('cong', 'park', 'cong@naver.com')
";
$conn->exec($sql);
echo "<p>데이터가 추가되었습니다.</p>";
}catch(PDOException $e){
  echo $e->getMessage();
}

$conn = null;



?>