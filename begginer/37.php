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

//fopen()

$file = "a.txt";

// if(file_exists($file)){
//   $pf = fopen($file, 'r');
//   if($pf){
//     $fz = filesize($file);
//     $fr = fread($pf, $fz);
//     if($fr){
//       echo $fr;
//       fclose($pf);
//     } else{
//       "파일 읽기에 실패햇습니다.";
//     }
//   } else{
//     echo "파일 열기에 실패했습니다.";
//   }
// } else{
//   echo "존재하지 않는 파일입니다.";
// }



$pf = fopen($file, 'a');
fwrite($pf, PHP_EOL."cong is cute");


fclose($pf);

?>
<script>

</script>
  
</body>
</html>