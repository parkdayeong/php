<?php
 session_start();

 
 if(!isset($_SESSION['user_id']) && empty($_SESSION['user_id'])){
   echo "로그인을 해야 이용할 수 있는 페이지입니다.<br>";
   echo "<a href='./login.php'>로그인</a>";
   exit;
 }


require_once('./config/db_conn.php');


// print_r($_POST);
// print_r($_FILES);

/*
Array ( [user_id] => cong [user_pw] => qkrzhd1004@ [name] => 박콩 [age] => 3 [gender] => 여 ) 정상처리완

Array ( [user_id] => cookie [user_pw] => 1234 [name] => 심쿠키 [age] => 5 [gender] => 여 ) 
Array ( [photo] => Array ( [name] => cookie.jpg [type] => image/jpeg [tmp_name] => C:\xampp\tmp\phpA957.tmp [error] => 0 [size] => 7478 ) ) 정상처리완
*/

$user_id = trim($_POST['user_id']);
$user_pw = trim($_POST['user_pw']);

// print_r($user_pw);
// echo "<br>";
// var_dump(md5($user_pw));
// exit;

$name = trim($_POST['name']);
$age = trim($_POST['age']);

if($_POST['gender'] == "" && empty($_POST['gender'])) {
  $gender ='선택안함';
}else{
  $gender = $_POST['gender'] ;
}

// 변수 초기화
$file_name = $upload_dir = "";


if($_FILES['photo']['name'])
{
// 파일업로드 추가
$upload_dir = "./uploads";
$ext_chk = array("jpg", "png", "jpeg", "gif");

// 변수선언
$err = $_FILES['photo']['error'];
$file_name = $_FILES['photo']['name'];
$file_ext = explode('.', $file_name);

if( !in_array(end($file_ext), $ext_chk) ){
  echo "허용되지 않는 파일입니다. <br>" ;
  echo "<a href='index.php'>홈으로</a>";
  exit;
} else{
  move_uploaded_file($_FILES['photo']['tmp_name'], $upload_dir."/".$file_name);
}
}
// file.jpg 

$sql_query = "insert into members set user_pw='".md5($user_pw)."',user_id='".$user_id."',name='".$name."', age='".$age."', gender='".$gender."',img_path='".$upload_dir."',img_name='".$file_name."', regdate=now()";
$result = mysqli_query($connect, $sql_query);

if($result){
  echo "정상처리완";
} else{
  echo " 실패";
}

echo "<br>";
echo "<a href='index.php'>홈으로</a>";

?>