<!DOCTYPE html>
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
10. form -> JS(variable check) -> (mysql)CRUD

index -> list(R)
delete -> D : list -> 삭제 ->js(confirm)-> delete_proc.php (process)
create -> write.php (C) -> form -> 등록 -> js(check)-> write_proc.php(process)
update -> update.php (U) -> list -> 수정 -> edit.php(form) -> js(check) -> edit_proc.php(process)

*/

require_once("./config/db_conn.php");

$sql_query = "select * from members order by idx desc";
$result = mysqli_query($connect, $sql_query);

echo "<a href='./write.php'>등록</a>";


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
  echo "<a href='./delete_proc.php?del_no=".$row['idx']."'>삭제</a>";
  echo "</td>";
  echo "</tr>";
}

echo "</table>";



mysqli_close($connect);



?>
</body>
</html>

