<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    span{color:white; background-color: red;}
    *{line-height: 1; margin: 0;}
    h3{color:lightgray;}
    .container{ width: 95%;
    margin: 0 auto;}
  </style>
</head>
<body>
<p style="color:#ddd;">테스트페이지입니다</p>
<hr>
<div class="container">
<?php

// * 앞에 있는 문자가 0개 이상 : 없거나, 있거나, 많거나
// + 앞에 있는 문자가 1회이상 : 있거나 , 많거나
// ? 앞에 있는 문자가 1개만 있거나 없거나



$string = "<p><em>정규표현식</em>이란? 특정한 규칙을 가진 문자열의 집합을 표현하는데 사용하는 형식언어이다.</p><p>정규 표현식은 많은 텍스트 편집기와 중략...있다.</p>";
$pattern = "/<p>(.*)<\/p>/";

echo "<h3>before:</h3>";
echo $string;

echo "<br>";
echo "<br>";

echo "<h3>after:</h3>";
$replacement = "<span>*</span>";



echo preg_replace($pattern, $replacement, $string);



?>

</div>
<script>

</script>

</body>
</html>