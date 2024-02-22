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

// echo $_SERVER['PHP_SELF']."<br>";
// echo $_SERVER['MYSQL_HOME']."<br>";
// echo $_SERVER['HTTP_ACCEPT_LANGUAGE']."<br>";
echo $_SERVER['REMOTE_ADDR'];

echo "<hr>";
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
echo "<hr>";


// if(strpos($ag,'Chrome') == true){
//   echo "크롬브라우져인가용";
// }else{
//   echo "크롬이 아니네용";
// }



?>

<a href="<?=$_SERVER['PHP_SELF']; ?>?a=b ">b</a>

<script>

</script>
  
</body>
</html>