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

//for 문 
//for(시작값; 조건; 증감식){
// 실행내용
// }
// for($i = 0; $i <= 10; $i++){
//   echo "$i"."<br>";
// }


//for each문
//배열

// $a = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j');
// $a =['a','b','c','d','e','f','g'];

$arr = array(
  1 => 'apple',
  2 => 'banana',
  3 => 'cherry',
  4 => 'durian',
  
);

foreach($arr as $key => $fruit){
  echo "$arr[$key]<br />";
  };
?>
