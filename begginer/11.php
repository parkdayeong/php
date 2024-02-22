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
// 논리연산자
// and, or, xor, &&, ||, !


$x = false; // 1
$y = false; // 0


var_dump(!$x);


// 논리곱 and, &&
// true and true = true
// true and false = false
// false and true = false
// false and false = false

//논리합 or, ||
// true or true = true
// true or false = true 
// false or true = true
// false or false = false

//switch,case

$a = rand(1, 3);

switch($a){
  case 1:
    echo "가위입니다.";
    break;
  case 2:
    echo "바위입니다.";
    break;
  case 3:
    echo "보입니다.";
    break; 
  default:
    echo "기타입니다.";
  }

?>
