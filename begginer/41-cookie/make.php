<?php
// 쿠키만들기
setcookie("ck_name", "박콩", time() + 240, "/");
setcookie("ck_age", 2, time() + 240, "/");

//$_COOKIE["ck_name"] 

?>

<a href="cookie.php">쿠키확인</a>