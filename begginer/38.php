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
// 파일의 확장자 구하는 함수 만들기
// 

// explode() 함수
// 지정된 문자로 문자열을 잘라서 배열을 만들게 도와줌

// $str = 'a,b,c,d,e,f,g,h,i,j';
// $arr = explode(',', $str);

// echo "<pre>";
// print_r($arr);
// echo "</pre>";

// // count(), sizeof() 배열의 길이를 구하는 함수

// echo count($arr)."<br>";

// // end() 배열의 마지막 값을 구해주는 함수

// echo end($arr);




// $arr = explode(".", $file_nmae);
// $ext = end($arr);
// echo $ext;


// $file_name = "a.ddd.dddccc.jpg";
// $arr = explode(".", $file_name);
// $arr_length = count($arr);

// $ext = $arr[$arr_length - 1];
// echo $ext;


// echo "<br>";
// print_r($arr);


// 사용자 정의함수
function getFileExt2($str){
  $arr = explode(".", $str);
  return $arr[count($arr) - 1];
  }

$file_name = 'a.ddd.ddddccc.jpg';
echo getFileExt2($file_name);
 




echo "<hr>";

function getFileExt($str){
  $arr = explode(".", $str);
  $ext = end($arr);
  return $ext;
}

$file_name2 = "aaa.dd---dd.xls";
$ext = getFileExt($file_name2);
echo $ext;

?>
<script>

</script>
  
</body>
</html>