<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="44-login.js"></script>
</head>

<body>
  <p>로그인,로그아웃 테스트페이지</p>
  <?php
  session_start();
  ?>




  <form action="44-login-ok.php" method="post" name="login_form" autocomplete="off">
    <?php
  if(!isset($_SESSION['ss_id']) or $_SESSION['ss_id'] == ''){
?>

    <label for="">아이디</label>
    <input type="text" name="id" id="id" placeholder="아이디 입력"><br>
    <label for="">비밀번호</label>
    <input type="password" name="pw" id="pw" placeholder="비밀번호입력">
    <br>
    <button id="login_btn">로그인</button>
    <?php
  } else{
  ?>
    <a href="44-logout.php">로그아웃</a>
  </form>
  <?php

  }

  ?>



  <a href="44-member.php">회원전용페이지</a>

</body>

</html>