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

<a href="download.php">파일다운로드하기</a>
<?php

// $filepath = "a.txt";
// $filesize = filesize($filepath);
// $filename = 'ad.txt';

// //헤더설정

// header("Content-Type: application/octet-stream");
// header("Content-Disposition: attachment; filename= $filename" );
// header("Content-Transfer-Encoding: binary");
// header("Content-Length: $filesize");

// ob_clean();
// flush();
// readfile($filepath);





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