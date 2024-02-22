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
// php배열
// 인덱스배열 , 연관배열, 다차원배열

$car = array("자동차", "비행기", "요트");
$car2 = $car;

$car2[0] = "비행기";
echo "<pre>";
print_r($car);
echo "</pre><br>";
print_r($car2);

?>

<script>
  document.write("<hr>script");
  const arr1 = ["자동차", "비행기", "요트"];
  const arr2 = [...arr1];
  arr1.pop();
  document.write("arr1 = " + arr1 + "<br>");
  document.write("arr2 = " + arr2);

</script>
  </body>
  </html>