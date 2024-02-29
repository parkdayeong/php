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

$filepath = "a.txt";
$filesize = filesize($filepath);
$filename = 'ad.txt';

$is_member = false;


if($is_member === true){
//헤더설정
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename= $filename" );
header("Content-Transfer-Encoding: binary");
header("Content-Length: $filesize");

ob_clean();
flush();
readfile($filepath);

} else{
  echo '<script>';
echo 'alert("회원만 다운로드가 가능합니다.");'; // 알림 창 표시
echo 'window.history.back();'; // 이전 페이지로 이동
echo '</script>';
}





// $file_path = './a.txt';

// // 파일을 읽어서 바로 출력합니다.
// if (file_exists($file_path)) {
//     header('Content-Description: File Transfer');
//     header('Content-Type: application/octet-stream');
//     header('Content-Disposition: attachment; filename="' . basename($file_path) . '"');
//     header('Expires: 0');
//     header('Cache-Control: must-revalidate');
//     header('Pragma: public');
//     header('Content-Length: ' . filesize($file_path));
//     readfile($file_path);
//     exit;
// } else {
//     echo 'File not found.';
// }
?>
<script>

</script>
  
</body>
</html>