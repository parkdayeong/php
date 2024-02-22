<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>수퍼 전역 globals</title>
</head>
<body>
<p style="color:#ddd;">테스트페이지입니다</p>
<hr>
<?php
// $GLOBALS["name"] = "콩이";

function test(){
  $GLOBALS["name"] = "콩이";
  // echo $GLOBALS["name"];
}

test();

echo $name;

?>

<script>

</script>
  
</body>
</html>