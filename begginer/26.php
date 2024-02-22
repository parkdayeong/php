<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>정규표현식</title>
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

// ^A A로 시작하는 문자열찾기
// A$ A로 끝나는 문자열 찾기
// any .
// []
// - 하이픈

$string = "ABCDEFGHIJKLMNOPQR%STUVW.XYZa_bcdefghizklmnopqrstuvwxyz0123456789@naver.com"; //target string
$pattern = "/[a-z]/";

echo "<h3>before : </h3>";
echo $string . "<br>";

echo "<h3>after : </h3>";
$replacement = "<span>*</span>";
echo preg_replace($pattern, $replacement, $string);



// preg_match($pattern, $string, $result);
// var_dump($result);

// $email = "example@example.com";
// $pattern = "/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/";
// if (preg_match($pattern, $email)) {
//     echo "Valid email address";
// } else {
//     echo "Invalid email address";
// }

?>

<script>

</script>
  
</body>
</html>