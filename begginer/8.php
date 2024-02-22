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
// abs() 절대값
$a = -4;
$b = abs($a);
echo $b."<br>";

// sqrt() 제곱근
$x = sqrt(10000);
echo $x."<br>";


//round() 반올림
echo round(3.5)."<br>";


// rand($min, $max) 임의의 정수생성
$min = 1;
$max = 100;
echo rand($min, $max)."<br>";

// 상수선언
define("greeting", "hello world");
echo greeting."<br>";



?>
<hr>
<script>
 //자바스크립트 상수
 const greeting = "안녕";
 document.write(greeting);

</script>
