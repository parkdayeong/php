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
/*
PHP산술연산자
1. + : 더하기
2. - : 빼기
3. * : 곱하기
4. / : 나누기
5. ** : 제곱하기
6. % : 나머지
*/

$a = 2 ** 3;
echo $a."<hr>";

// if($a % 2 == 0){
//   echo "even";
// } else{
//   echo "odd";
// }


/*
PHP 할당연산자
*/

$b = 5;
$a = $b;
$b--;

echo $a."<br>";

$y = 2;
$x = 11;

$x %= $y; // $x = $x + $y;
echo $x."<br>";



?>
