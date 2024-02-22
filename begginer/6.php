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


<?php

// echo, print

echo "1";
print "2";

echo("3");
print("4")."<br>";

// 마크업 같이 사용가능
$cat1 = "콩이";
$cat2 = "호야";
$x = 4.33;
$y = 10;
echo "<b>$cat1</b>는 귀엽당<br>";
echo "<b>".$cat2."</b>는 ".$y."살이다.";
echo "하하<hr>";

echo $x + $y."<br>";

// var_dum 변수의 데이터 형식을 알려줌
var_dump($cat1);
echo "<br>";

// strlen() 문자열 bytes 반환 
$cat1_len = strlen($cat1);
echo $cat1_len."<br>";

// str_word_count() 문자열의 단어수 반환 (한글은 안됨 )
echo str_word_count("hi hi hi hello hello hello bye")."<br>";

// strrev() 문자열 뒤집는 함수
echo strrev("hoya cong bizy")."<br>";
echo strrev("안녕")."<br>";

// strpos() 
$a = strpos("hello world", "world");
echo $a."<br>"; //6

$email = "molra0000@naver.com";

if(strpos($email, "@") == false){
  echo "이메일 형식이 올바르지 않습니다.";
} else{
  echo "이메일 형식에 맞습니다.";
}















?>