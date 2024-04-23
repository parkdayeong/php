<?php
session_start(); //세션을 이용하기 위해서 반드시 최상단에 선언되어야함

 

require_once("config/db_conn.php");


$sql_query = "select * from members where user_id='".$_POST['user_id']."' ";
$result = mysqli_query($connect, $sql_query);

$row = mysqli_fetch_array($result);

if(!$row['user_id']){
  echo "해당 아이디가 존재하지않습니다.";
  exit;
}

$sql_query = "select * from members where user_id='".$_POST['user_id']."' and user_pw='".md5($_POST['user_pw'])."' ";
$result = mysqli_query($connect, $sql_query);

$row = mysqli_fetch_array($result);

if(!$row['user_id']){
  echo "정확한 정보가 아닙니다..ㅠ_ㅠ <br>";
  echo "<a href='index.php'>홈으로</a>";
  exit;
}

// 모두 정상 로그인이 진행된 상태
$_SESSION['user_id'] = $row['user_id'];
echo "정상로그인 되었습니다.";
echo "<br>";
echo "<a href='index.php'>홈으로</a>";
?>