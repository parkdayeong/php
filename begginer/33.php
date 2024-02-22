<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<p style="color:#ddd;">테스트페이지입니다</p>
<hr>
<?php

date_default_timezone_set("Asia/Seoul");

echo date("Y")."<br>"; //년도 2024
echo date("y")."<br>"; //년도 24
echo date("M")."<br>"; // 월 Feb
echo date("m")."<br>"; // 월 02
echo date("n")."<br>"; // 월 2
echo date("D")."<br>"; // 요일 Mon ~ Sun
echo date("N")."<br>"; // 요일 1월 ~ 7일
echo "날짜: ".date("d")."<br>"; // 날짜 01~ 31
echo "날짜: ".date("j")."<br>"; // 날짜 1~ 31
echo date("h")."<br>"; // 시 08
echo date("i")."<br>"; // 분
echo date("s")."<br>"; // 초 08


echo date("Y-m-d H:i:s D").'<br>'; 

switch(date("N")){
  case 1: $yoil = "월요일"; break;
  case 2: $yoil = "화요일"; break;
  case 3: $yoil = "수요일"; break;
  case 4: $yoil = "목요일"; break;
  case 5: $yoil = "금요일"; break;
  case 6: $yoil = "토요일"; break;
  case 7: $yoil = "일요일"; break;
}

echo "오늘은 $yoil 입니다.";


?>
<script>

</script>
  
</body>
</html>