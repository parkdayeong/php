<?php

// print_r($_POST);

$id = (isset($_POST['id']) && $_POST['id'] != '') ? $_POST['id'] : '';
$pw = (isset($_POST['pw']) && $_POST['pw'] != '') ? $_POST['pw'] : '';




if($id == ''){
  echo "
  <script>
    alert('아이디를 입력바랍니다.');
    history.go(-1);
   </script>";
  exit;
}

if($pw == ''){
  echo "
  <script>
    alert('비밀번호를 입력바랍니다.');
    history.go(-1);
   </script>";
  exit;
}


if($id == 'admin' && $pw == '1234'){
  session_start();

  $_SESSION['ss_id'] = $id;
  
  echo "<script>
    alert('로그인 성공했습니다.');
    self.location.href = '44-member.php'; // 회원전용페이지 이동
  </script>";
} else{
  echo "<script>
    alert('로그인 실패했습니다.아이디와 비밀번호를 확인해주세요.');
    self.location.href = '44.php'; // 회원전용페이지 이동
  </script>";
}




?>