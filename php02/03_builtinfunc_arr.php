<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>1. 내장함수(배열관련)</title>
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
echo "배열 내장함수 <br>";


$arr = array(1, 2, 3, 4, 5, 6, 7, 7, 1, 2, 3);

var_dump($arr);
echo "<br>";
echo count($arr)."<br>";
echo sizeof($arr);
echo "<br>";

$num = array_count_values($arr);

foreach($num as $key => $value){
  echo $key." = ".$value."<br>";  
}

echo "<br>";

$transport = array('foot', 'bike', 'car', 'bus', 'train');

$mode = current($transport);
var_dump($mode);

echo "<br>";
$mode = next($transport);
var_dump($mode);

echo "<br>";
$mode = prev($transport);
var_dump($mode);

echo "<br>";
$mode = end($transport);
var_dump($mode);

echo "<hr>";

$arr = array();

$arr[0] = 90;
$arr[1] = 80;
$arr[2] = 95;
$arr[3] = 50;
sort($arr);

var_dump($arr);

echo "<br>";
rsort($arr);

var_dump($arr);

echo "<hr>";

$arr = array();
$arr['php'] = 'ksort 예제1';
$arr['bs'] = 'ksort 예제2';
$arr['athon'] = 'ksort 예제3';

krsort($arr);
var_dump($arr);

echo "<hr>";

$arr = array(1, 2, 3, 4, 5, 6, 7, 8,);
$arr2 = array("cong", 8, 9);
// shuffle($arr);
var_dump($arr);

echo "<hr>";

array_push($arr, $arr2);
var_dump($arr);



// $foo = array("bob", "fred", "cong", "cookie", "apple");
// $bar = each($foo);
// print_r($bar);
// echo "<br>";
?>
</body>
</html>