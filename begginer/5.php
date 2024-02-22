<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>테스트페이지입니다.</title>
  <style>
    table{
      border:1px solid grey;
      border-collapse: collapse;  
    }
    table td,th{
      border: 1px solid grey;
      padding:10px;
    }
    th{
      background-color : #f2f2f2;
    }
  </style>
</head>
<body>
<p style="color:#ddd;">테스트페이지입니다</p>
<hr>

<!-- C:\xampp\apache\conf\extra\httpd-vhosts.conf
<VirtualHost *:80>
    ServerAdmin webmaster@test.sir.com
    DocumentRoot "C:/xampp/htdocs/begginer"
    ServerName test.beg.com
    ErrorLog "logs/test.begginer.com-error.log"
    CustomLog "logs/test.begginer.com-access.log" common
</VirtualHost>
-->

<!-- html주석 -->

<!-- html주석은 소스 확인시 확인이 가능 -->


<?php
// 한줄주석
# 한줄주석
/*
여러줄
주석
php주석은 소스확인시 확인불가
*/


$txt = 'php'; //문자열
$x = 5; //정수
$y = 10.5; //실수
$X = 10; // 변수는 대소문자 구분 한다
echo "x = $x, X = $X";
echo "<hr>";

# 전역변수
# 로컬변수(지역변수)

$a = 11;

function myTest(){
  global $a;
  // $a++;
  $a++;
  $a = 4;
 
  echo "변수 x의 출력값 $a"."<br>";

}

myTest();
echo "변수 x의 출력값 $a";
?>

<p>Hello <?= $txt; ?></p>