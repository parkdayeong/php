<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>1. 내장함수(변수관련)</title>
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
echo "<h4>gettype()</h4>";

$data = array(1, 1.0, NULL, new stdClass, 'foo');
foreach($data as $value){
  echo gettype($value)."<br>";
}

$x = -3.14;
settype($x, 'integer');
var_dump($x);
echo "<br>";

var_dump(is_string(12345));

echo "<br>";
$apple=1;
if(isset($apple)){
  echo "apple is set<br>";
}else{
  echo "apple is not set!<br>";
}

$name = "Edward";

// unset($name);
if(isset($name)){
  echo "set";
}else{
  echo "not set!";
}

echo "<br>";

$var = 0;

if(empty($var)){
  echo "0";
}
echo "<br>";
if(isset($var)){
  echo "11";
}

echo "<br>";

echo var_dump(floatval(42))."<br>";
echo var_dump(intval(42))."<br>";
echo var_dump(strval(42))."<br>";

?>
</body>
</html>