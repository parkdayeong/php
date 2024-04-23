<!--
# PHP 개발자 #
이  름: 조재상
이메일: oralol@naver.com
블로그: https://blog.naver.com/oralol
-->
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densitydpi=medium-dpi'/>
<title>폼메일</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

<table>
<tr>
<td valign="top">
<center><h1>무료 폼메일</h1></center></p>
<table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#888">
<form enctype="multipart/form-data" id="form1" name="form1" method="post" action="form_send.php">
<input type="hidden" name="mode" value="send">
<tr bgcolor="white"> 
<td width="25%" height="22" align="center" bgcolor="#FECBCB">이 름 </td>
<td width="75%"><input id="name" name="name" type="text" size="10" maxlength="40"> <font color='red'>*</font></td>
</tr>

<tr bgcolor="white"> 
<td height="22" align="center" bgcolor="#FECBCB">휴대폰번호 </td>
<td><select name="hp1"><option value="010">010</option>
<option value="010">011</option>
<option value="010">016</option>
<option value="010">017</option>
<option value="010">018</option>
<option value="010">019</option></select>-
<input name="hp2" type="text" size="4" maxlength="4">-
<input name="hp3" type="text" size="4" maxlength="4"> <font color='red'>*</font></td>
</tr>

<tr bgcolor="white"> 
<td height="22"  align="center" bgcolor="#FECBCB">이메일주소</td>
<td><input name="email" type="text" style="width:200px" maxlength="100"> <font color='red'>*</font></td>
</tr>

<tr bgcolor="white"> 
<td height="22" align="center" bgcolor="#FECBCB">거주 지역 </td>
<td><input name="areaname" type="text"  style="width:200px" maxlength="100"> <font color='red'>*</font><br>
<span class="caption">예)서울, 부산, 광주, 대전</span></td>
</tr>

<tr bgcolor="white"> 
<td height="22" align="center" bgcolor="#FECBCB">문의 종류 </td>
<td><input type="radio" name="questype" value="사업문의">사업문의 
<input type="radio" name="questype" value="제품문의">제품문의 
<input type="radio" name="questype" value="기타">기타  <font color='red'>*</font>
</td>
</tr>

<tr bgcolor="white"> 
<td height="22" align="center" bgcolor="#FECBCB">파일 첨부 </td>
<td>#1 <input type="file" name="userfile1" value="파일첨부1" style="width:200px;"><br>
#2 <input type="file" name="userfile2" value="파일첨부2" style="width:200px;"><br>
#3 <input type="file" name="userfile3" value="파일첨부3" style="width:200px;">
</td>
</tr>

<tr bgcolor="white"> 
<td height="22" align="center" bgcolor="#FECBCB">메 모</td>
<td><textarea name="content" cols="70" rows="12" style="width:100%;"></textarea></td>
</tr>
</table>

<!-- 개인정보 수집 및 활용 동의 -->
<div>&nbsp;</div>
<div>
	<div class="bg-success p-2 text-white">[개인정보 수집 및 활용 동의]</div><br>
	<div class="bg-success p-2 text-dark bg-opacity-25">
		O 개인정보 수집 목적: OOO 서비스 이용<br>
		O 개인정보 수집 항목(필수): 이름, 휴대폰번호, 거주 지역<br>
		O 보유 및 이용기간: 서비스 이용 기간(상담 후 즉시 파기)<br>
		O 동의를 거부할 권리가 있으며, 거부시 서비스 문의 불가함<br>&nbsp;<br>
		<input type="radio" id="agreeyes" name="agree" value="yes"> 동의합니다. &nbsp;&nbsp;&nbsp;
		<input type="radio" id="agreeno" name="agree" value="no"> 동의하지 않습니다.
	</div>
</div>

<p align="center">
<input type="button" class="btn_red" value=" 전송 " onclick="form_Check();" style="cursor:hand;"> 
</p>
</td>
</tr>
</table>
<p>
<font color="red">
1. form_send.php 에서 36번 라인의 $admin_email = "oralol@naver.com"; 이 부분을 여러분의 이메일 주소로 변경하세요.<p>
2. 기타 궁금한 사항은 폼메일 개발자에게 문의하시기 바랍니다.<p>
3. 개발자에게 공감과 응원의 댓글을 블로그에 남겨주세요. (필수입니다. :-) !!!)<p>
4. 개발자에게 문의하기: 블로그- <a href="http://blog.naver.com/oralol" target="_blank">http://blog.naver.com/oralol</a>, 이메일- oralol@naver.com</font>

</form>
</body>
</html>

<script>
function form_Check(){
	if(form1.name.value == ''){
		alert("이름을 입력해주십시오.");
		form1.name.focus();
		return;
	}
	if(form1.hp1.value == ''){
		alert("휴대폰번호를 입력해주십시오.");
		form1.hp1.focus();
		return;
	}
	if(form1.hp2.value == ''){
		alert("휴대폰번호를 입력해주십시오.");
		form1.hp2.focus();
		return;
	}
	if(form1.hp3.value == ''){
		alert("휴대폰번호를 입력해주십시오.");
		form1.hp3.focus();
		return;
	}
	if(form1.email.value == ''){
		alert("이메일주소를 입력해주십시오.");
		form1.email.focus();
		return;
	}
	if(form1.areaname.value == ''){
		alert("거주 지역을 입력해주십시오.");
		form1.areaname.focus();
		return;
	}
	if(form1.questype[0].checked == false && form1.questype[1].checked == false && form1.questype[2].checked == false){
		alert("문의종류를 입력해주십시오.");
		form1.questype[0].focus();
		return;
	}
	if(form1.agree[0].checked == false) {
		alert("개인정보 수집 및 활용 동의를 하셔야 서비스 문의가 가능합니다.");
		form1.agree[0].focus();
		return;
	}
	if(!confirm('폼메일을 전송하겠습니까?')) return;
	form1.submit();
}

</script>
