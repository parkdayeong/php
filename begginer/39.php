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

# php로 폴더의 파일목록 가져오기 dir()함수 사용

# 파일목록 가져올 경로 설정
$dir_name = "./data";

# 디렉토리 핸들 생성
# dir 함수는 php에서 디렉토리 핸들을 생성하는데 사용합니다.'
# 이 함수는 주어진 디렉토리에 대한 디렉토리 핸들을 반환하며, 이 핸들을 사용하여
# 디렉토리내의 파일 및 디렉토리 목록을 읽을 수 있습니다.
$d = dir($dir_name);
// $file_name = $d->read();

while ($file_name = $d->read()){
  if($file_name == "." || $file_name == ".."){
    continue;
  }
  // echo $file_name;
  // echo "<img src='".$dir_name."/".$file_name."' width='100px;'>"."<br>";
  // echo "<img src='{$dir_name}/{$file_name}' width='100px;'>";
  ?> <img src="<?= $dir_name?>/<?= $file_name ?>" width="100px;" />
  <?php
  
  echo $file_name."<br>";
}

$d->close(); #close


// while (($file_name = $d->read()) !== false){
//   if($file_name == "." || $file_name == ".."){
//     continue;
//   }
//   echo $file_name."<br>";
// }

// $file_name = $d->read();
// echo $file_name;

// $file_name = $d->read();
// echo $file_name;

// $file_name = $d->read();
// echo $file_name;
// $file_name = $d->read();
// echo $file_name;
// $file_name = $d->read();
// echo $file_name;
// $file_name = $d->read();
// echo $file_name;





?>
<script>

</script>
  
</body>
</html>