<?php
phpinfo();
exit;


// MySQLI OOP
$servername = 'localhost';
$username = 'root';
$password = '';

// $conn = new mysqli($servername, $username, $password);
// $conn = mysqli_connect($servername, $username, $password);
$conn = new PDO("mysql:host=$servername", $username, $password);

// if($conn-> connect_error){
//   echo "db연결 실패";
//   echo $conn-> connect_error;
//   exit;
// }else{
//   echo "db연결에 성공했습니다.";
// }

// if(!$conn){
//   // echo "db 연결 실패";
//   // exit;
//   die('db연결 실패');
// } 
// echo "db연결 성공"

try{
  $conn = new PDO("mysql:host=$servername", $username, $password);
  echo " db연결 성공";
}catch(PDOException $e){
  echo "db연결 실패";
  echo $e->getMessage();
}


?>