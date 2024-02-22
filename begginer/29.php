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
  </style>
</head>
<body>
<p style="color:#ddd;">테스트페이지입니다</p>
<hr>
<?php

// Not [^문자] 문자가 아닌
// ^A A로 시작하는
// 서브패턴 (|) 버티컬 바 (Mon|Tues|Fri)day

$string = "Monday Tuesday Friday";
$pattern = "/..(n|i|es)day/";

echo "<h3>before:</h3>";
echo $string;

echo "<br>";

echo "<h3>after:</h3>";
$replacement = "<span>*</span>";



echo preg_replace($pattern, $replacement, $string);



?>
<script>

</script>
  
</body>
</html>