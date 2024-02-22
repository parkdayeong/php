<?php

echo "<pre>";
var_dump($_FILES);
echo "</pre>";


echo $_FILES['ufile']['name'];


$uploadDir = 'data/';
$uploadFile = $_FILES['ufile']['tmp_name'];
$destination = $uploadDir . $_FILES['ufile']['name'];


if(move_uploaded_file($uploadFile, $destination)){
  echo "파일업로드 완료";
}else{
  echo "파일업로드 실패";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <img src="<?= $destination ?>" alt="">
</body>
</html>