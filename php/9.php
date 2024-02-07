a<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table{
      border:1px solid grey;
      border-collapse : collapse;
    }
    td{
      border: 1px solid grey;
    }
  </style>
</head>
<body>
  <p style="color:#ddd;">테스트페이지입니다</p>
  <hr>

<?php
/*
9. 외부 문서에 db접속 관련 정보를 넣고 
현재문서에서 해당 db문서를 로드한 후
DB에 Data 저장하는 기능까지 구현
*/
include_once("./config/db_conn.php");

/*
$rand = rand(1, 100);

$name = '고객'.$rand.'번';
$age = '34';
$gender = '여';

// 쿼리 현재시간 now(), php현재시간 date('Y-m-d H:i:s')
$sql_query = "insert into members (name, age, gender, regdate) values ('$name', '$age', '$gender', now())";
// $sql_query = "insert into members (name, age, gender, regdate) values ('$name', '$age', '$gender',".date('Y-m-d H:i:s').")";

$result = mysqli_query($connect, $sql_query);

if($result){
  echo "db가 정상적으로 추가되었습니다.";
}else{
  echo "db추가 실패";
}
*/

// print_r($_POST);

$sql_query = "select * from members order by idx desc";
$result = mysqli_query($connect, $sql_query);

echo "<table border='1'>";
echo "<tr>";
echo "<th>NO</th>";
echo "<th>이름</th>";
echo "<th>나이</th>";
echo "<th>성별</th>";
echo "<th>등록일</th>";
echo "<th>삭제</th>";
echo "</tr>";

while($row = mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<td>".$row['idx']."</td>";
  echo "<td>".$row['name']."</td>";
  echo "<td>".$row['age']."</td>";
  echo "<td>".$row['gender']."</td>";
  echo "<td>".$row['regdate']."</td>";

  echo "<td>";
  // echo "<form name='frmd' action='".$_SERVER['PHP_SELF']."' method='post'>";
  // echo "<input type='submit' value='삭제'>";
  // echo "<input tpye='text' name='del_no' value='".$row['idx']."'>";
  // echo "</form>";
  // echo "</td>";
  echo "<a href='./delete.php?del_no=".$row['idx']."'>삭제</a>";
  echo "</td>";
  echo "</tr>";
}

echo "</table>";

mysqli_close($connect);

 
?>
</body>
</html>

