<?php
include "mailer.php";

$mode = $_REQUEST['mode'];
$name = $_REQUEST['name'];
$hp1 = $_REQUEST['hp1'];
$hp2 = $_REQUEST['hp2'];
$hp3 = $_REQUEST['hp3'];
$hp = $hp1."-".$hp2."-".$hp3;
$email = $_REQUEST['email'];
$areaname = $_REQUEST['areaname'];
$questype = $_REQUEST['questype'];
$content = $_REQUEST['content'];
$ip = $_SERVER['REMOTE_ADDR'];

$subject = "[폼메일] $name ($areaname, $hp)";
$body = "";

$body .= "이 름: $name<br>";
$body .= "휴대폰번호: $hp<br>";
$body .= "이메일주소: $email<br>";
$body .= "거주 지역: $areaname<br>";
$body .= "문의 종류: $questype<br>";
$body .= "메 모: $content<p>&nbsp;<p>";

$body2 = "<table border='0' cellspacing='1' cellpadding='3' bgcolor='#444'>";
$body2.= "<tr bgcolor='white'><td align='center' height='25'>이 름</td><td align='left'>$name</td></tr>";
$body2.= "<tr bgcolor='white'><td align='center' height='25'>휴대폰번호</td><td align='left'>$hp</td></tr>";
$body2.= "<tr bgcolor='white'><td align='center' height='25'>이메일주소</td><td align='left'>$email</td></tr>";
$body2.= "<tr bgcolor='white'><td align='center' height='25'>거주 지역</td><td align='left'>$areaname</td></tr>";
$body2.= "<tr bgcolor='white'><td align='center' height='25'>문의 종류</td><td align='left'>$questype</td></tr>";
$body2.= "<tr bgcolor='white'><td align='center' height='25'>메 모</td><td align='left'>$content</td></tr>";
$body2.= "</table>";

//$admin_email = "받을 메일주소 입력";
$admin_email = "molra0000@douzoneon.com";

if($mode == "send") {
	//파일첨부 시작
	for($i=1;$i<=3;$i++) {
		$file[$i] = $_FILES['userfile'.$i]['name'];
		$target[$i] = "./temp/".$file[$i];

		if (move_uploaded_file($_FILES['userfile'.$i]['tmp_name'], $target[$i])) {
			chmod("$target[$i]", 0777);
		}
	}

	$ret = mailer($name, $email, "Admin", $admin_email, $subject, $body.$body2, $file);

	if($file[1] != "") @unlink($target[1]);
	if($file[2] != "") @unlink($target[2]);
	if($file[3] != "") @unlink($target[3]);
	echo "<meta http-equiv='content-type' content='text/html; charset=utf-8'>";
	if($ret) echo "<script>alert('폼메일 발송 성공');location.href='form.php';</script>";
	else echo "<script>alert('폼메일 발송 실패');history.back();</script>";
}

?>