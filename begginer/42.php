<?php
// Session 세션
// 세션은 여러페이지에서 사용할 정보(변수)를 저장하는 방법
// 쿠키와 달리 정보는 사용자 컴퓨터에 저장되지않습니다.


echo $_COOKIE['PHPSESSID']."<br>";

//세션생성
session_start();

$_SESSION['ss_name'] = '박콩';
$_SESSION['ss_age'] = '3살';



?>
세션이 생성되었습니다.<br>
<a href="42-2.php">세션확인</a>