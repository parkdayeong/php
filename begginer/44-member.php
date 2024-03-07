<?php
session_start();
if(!isset($_SESSION['ss_id']) or $_SESSION['ss_id'] == ''){
  echo "
  <script>
  alert('여기는 회원전용 페이지입니다. 로그인후 접근이 가능합니다.');
  self.location.href = '44.php';
  </script>
  ";
  exit;
}
?>


<html>


<p>회원전용페이지에 접속하였습니다.
</p>
<a href="44.php">홈</a>
<a href="44-logout.php">로그아웃</a>

</html>