<?php
 session_start();

 
 if(!isset($_SESSION['user_id']) && empty($_SESSION['user_id'])){
   echo "로그인을 해야 이용할 수 있는 페이지입니다.<br>";
   echo "<a href='./login.php'>로그인</a>";
   exit;
 }

require_once("./config/db_conn.php");

$sql_query = "select * from members where idx=".$_GET['edit_no'];
$result = mysqli_query($connect, $sql_query);

$row = mysqli_fetch_array($result);

// print_r($row);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>등록</title>
  <style>
    table{
      border-collapse : collapse;
    }
  </style>
</head>
<body>
  <!-- content -->
  <form action="edit_proc.php" name="frm" method="post" onSubmit="return CheckForm();" enctype="multipart/form-data">
    <input type="hidden" name ="edit_no" value="<?= $_GET['edit_no'] ?>" >
<table border='1'>
<tr>
    <th>아이디</th>
    <td>
      <input type="text" name="user_id" value="<?=$row['user_id']?>">
    </td>
  </tr>
  <tr>
    <th>비밀번호</th>
    <td>
      <input type="password" name="user_pw" value="<?=$row['user_pw']?>">
    </td>
  </tr>
  <tr>
    <th>회원명</th>
    <td>
      <input type="text" name="name" value="<?=$row['name']?>">
    </td>
  </tr>
  <tr>
    <th>나이</th>
    <td>
      <input type="text" name="age" value="<?=$row['age']?>">
    </td>
  </tr>
  <tr>
    <th>성별</th>
    <td>
    <?php
      $checked1 = "";
      $checked2 = "";

      if($row['gender'] == "남"){
        $checked1 = "checked";
        $checked2 = "";
      }else if($row['gender'] == "여"){
        $checked1 = "";
        $checked2 = "checked";
      }else {
        $checked1 = "";
        $checked2 = "";
      }
    ?>
     <label> <input type="radio" name="gender" value="남" <?= $checked1 ?>> 남</label>
     <label><input type="radio" name="gender" value="여" <?= $checked2 ?>> 여</label>
    </td>
  </tr>
  <tr>
    <th>
      사진
    </th>
    <td>
      <img src="<?= $row['img_path']."/".$row['img_name'] ?>" width="300" alt="">
      <p><input type="file" name="photo" value="" /></p>
    </td>
  </tr>
 <tr>
  <td><a href="index.php">목록</a></td>
  <td><input type="submit" value="저장"></td>
 </tr>
</table>
  </form>

  <script>
   function CheckForm(){
    if(frm.name.value==''){
      frm.name.focus();
      alert('이름을입력해주세요');
      return false;
    } else if(frm.age.value==''){
      frm.age.focus();
      alert('나이을입력해주세요');
      return false;
    } 
   }
  </script>
</body>
</html>