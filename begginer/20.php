<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<p style="color:#ddd;">배열, 정렬내장함수</p>
<hr>

<!-- sort() - 배열을 오름차순으로 정렬
rsort() - 배열을 내림차순으로 정렬
asort() - 값에 따라 연관 배열을 오름차순으로 정렬
ksort() - 키에 따라 연관배열을 오름차순으로 정렬
arsort() - 값에 따라 연관배열을 내림차순으로 정렬
krsort() - 키에 따라 연관배열을 내림차순으로 정렬 -->

<?php

$fruits = array("apple", "banana", "orange", "kiwi", "melon");

ksort($fruits);

echo "<pre>";
print_r($fruits);
echo "</pre>";






?>

<script>

</script>
  
</body>
</html>