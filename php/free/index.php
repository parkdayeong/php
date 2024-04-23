<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>메인</title>
  <style>
  table {
    border: 1px solid grey;
    border-collapse: collapse;
  }

  td {
    border: 1px solid grey;
  }
  </style>
</head>

<body>

  <?php
require_once("../config/db_conn.php");



echo "<a href='./write.php'>등록</a>";



echo "<table border='1'>";
echo "<tr>";
echo "<th>NO</th>";
echo "<th>작업요청일</th>";
echo "<th>클라이언트명</th>";
echo "<th>작업내용</th>";
echo "<th>마감일</th>";
echo "<th>진행사항</th>";
echo "<th>총견적</th>";
echo "<th>지급액</th>";
echo "<th>지급완료일</th>";
echo "<th>수정</th>";
echo "</tr>";

$sql_query = "select * from free order by idx desc";
$result = mysqli_query($connect, $sql_query);



echo "<hr>";
if($result){
  while($row = mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<td>".$row['idx']."</td>";
  echo "<td>".$row['start_date']."</td>";
  echo "<td>".$row['co_name']."</td>";
  echo "<td>".$row['memo']."</td>";
  echo "<td>".$row['end_date']."</td>";
  echo "<td>".$row['progress']."</td>";
  echo "<td>".$row['estimate']."</td>";
  echo "<td>".$row['pay_amount']."</td>";
  echo "<td>".$row['pay_date']."</td>";
  echo "<td>";
  echo "<a href='./edit.php?edit_no=".$row['idx']."'>수정</a>"."/";
  echo "<a href='javascript:void(0);' onclick='confirmDelete(".$row['idx'].")'>삭제</a>";
  echo "</td>";
  echo "</tr>";


  

}
} else{
  echo " 실패";
}



// 연결 종료
mysqli_close($connect);
?>


</body>

</html>