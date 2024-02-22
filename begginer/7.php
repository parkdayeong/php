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


//str_replace() 문자열 치환하기 
$str = "콩이 엄마 바보.";
$search = array("엄마", "바보");
$replace = array("호야", "귀여워");

echo str_replace($search, $replace, $str)."<br>";

$str1 = str_replace("엄마", "호야", $str);
echo $str1."<br>";

$string = "cong cong hoya cong cong hoya";
$search = array("cong", "hoya");
$replace = array("conge", "cong2");
$new_string = str_replace($search, $replace, $string);
echo $new_string."<hr>";


// is_int(); 정수판별
// is_float(); 실수판별
// is_numeric(); 숫자 문자 판별

// $x = 33443.55;
// // var_dump(is_int($x));
// if(is_int($x) == true){
//   echo "x는 정수입니다.";
// } else{
//   echo "x는 정수가 아닙니다.";
// }
// echo "<hr>";


$x = "123.45";
if (is_numeric($x) == false){
  echo "x는 숫자가 아닙니다.";
}else{
  echo "x는 숫자입니다..";
}

echo "<hr>";
echo(pi())."<hr>";

echo (max(1,2,3,4,5,6,7,8,9,1));
?>