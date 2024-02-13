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
echo "문자 내장함수 <hr>";

$var1 = 1;
$var2 = 2;

var_dump(strcmp($var1, $var2));
echo "<br>";

if(strcmp($var1, $var2) !== 0){
  echo "$var1 is not equal to $var2";
} 

echo '<hr>';

$str = "hello hello";
if(strstr($str, 'H')){echo '있다';} else { echo '없다';}
echo '<br>';
if(strchr($str, 'e')){echo '있다';} else { echo '없다';}
echo '<hr>';

$strposTest = 'abcde';
if(strpos($strposTest, 'c') !== false){
  echo "X";
}
if(strpos($strposTest, 'df') === false ){
 echo "O";
}

?>
</body>
</html>