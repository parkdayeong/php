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
// php 배열 - 연관배열
// key:value
$age = array(
  "Peter"=>32, 
  "Joe"=>43, 
  "John"=>28
);

echo "Peter의 나이는".$age["Peter"]."입니다.";

echo "<br>";

foreach($age as $key=>$value){
  echo "$key 의 나이는 $value 입니다.<br>";
}

$fruits = array();
$fruits["사과"] = "브라질산";
$fruits["배"] = "한국산";
$fruits["포도"] = "칠레산";

foreach($fruits as $key=>$value){
 echo "$key"."는 $value 입니다.<br>"; 
}

?>

<script>
  
</script>
  
</body>
</html>