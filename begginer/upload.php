<?php

echo "<pre>";
print_r($_FILES);
echo "</pre>";

echo "파일명 : ".$_FILES['ufile']['name']."<br>";
echo "파일용량 : ".$_FILES['ufile']['size']."<br>";


$tfile = './upload/'; // 폴더경로
$uploadfile = $_FILES['ufile']['tmp_name']; //업로드할 파일
$destination = $tfile.$_FILES['ufile']['name'];

echo $destination;

if($_FILES['ufile']['size'] > 90000){
  echo "파일용량이 커서 업로드가 불가합니다.";
} else {
  move_uploaded_file($uploadfile, $destination);
  echo "파일업로드완료";
}


// move_uploaded_file($uploadfile, $destination);





// echo $_FILES['ufile']['name']."<br>";


// $uploadDir = 'data/';
// $uploadFile = $_FILES['ufile']['tmp_name'];
// $destination = $uploadDir . $_FILES['ufile']['name'];


// if(move_uploaded_file($uploadFile, $destination)){
//   echo "파일업로드 완료";
// }else{
//   echo "파일업로드 실패";
// }


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