<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>로그인페이지입니다.</title>
</head>
<body>
  <form action="login_proc.php" name="loginFrm" method="post">
    <table border="1">
      <tr>
        <th>아이디</th>
        <td><input type="text" name="user_id" value=""></td>
      </tr>
      <tr>
        <th>비밀번호</th>
        <td><input type="password" name="user_pw" value=""></td>
      </tr>
      <tr>
        <th colspan="2"><input type="submit" value="로그인"></th>
      </tr>
    </table>
  </form>
</body>
</html>