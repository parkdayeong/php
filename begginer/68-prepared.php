<?php
#PHP Mysql Prepared Statements

$servername = 'localhost';
$username = 'root';
$pw = '';
$database = 'kingchobo';


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

// try{
//   $tablename = "myguests";
//   $sql = "CREATE TABLE ".$tablename."(
//     id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     email VARCHAR(50),
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  
//   )";
//   $conn->exec($sql);
//   echo "<p>".$tablename."이 생성되었습니다.</p>";
//   } catch(PDOException $e){
//     echo $e->getMessage();
//   }
  
  



$stmt = $conn->prepare("INSERT INTO myguests (firstname, lastname, email) VALUES (:firstname, :lastname, :email)");

$stmt->bindParam(':firstname', $firstname);
$stmt->bindParam(':lastname', $lastname);
$stmt->bindParam(':email', $email);

$firstname = "Cong";
$lastname ="Park";
$email = "cong@example.com";
$stmt->execute();

$firstname = "Hoya";
$lastname ="Han";
$email = "hoya@example.com";
$stmt->execute();


?>