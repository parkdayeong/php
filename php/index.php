<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>메인</title>
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
session_start(); 
require_once("./config/db_conn.php");

$cnt = 1; // 각페이지의 게시물 번호

// 전체 게시물 개수
$sql_query = "select * from members order by idx desc";
$result = mysqli_query($connect, $sql_query);
$num = mysqli_num_rows($result);

// 한페이지당 데이터 개수
$list_num = 5;

// 한블당 페이지 개수
$page_num = 3;

// 현재 페이지
$page = isset($_GET['page']) ? $_GET['page'] : 1; //삼항식

// 전체 페이지 개수 = 전체 데이터 / 페이지당 데이타개수,(ceil(올림), floor(내림), round(반올림))
$total_page = ceil($num / $list_num);

// 전체 블럭 수 = 전체 페이지/ 블럭당 페이지 수
$total_block = ceil($total_page/$page_num);

// 현재 블럭 번호 = 현재 페이지 번호 / 블럭 당 페이지 수 
$now_block = ceil($page /$page_num);

// 블럭당 시작 페이지 번호 = (해당 글의 블럭 번호 -1) * 블럭 당 페이지수 + 1
$s_pageNum = ($now_block - 1) * $page_num + 1;

// 데이타가 없을경우
if($s_pageNum == 0){
  $s_pageNum = 1;
}

// 블럭당 마지막 페이지 번호 = 현재 블럭 번호 * 블럭당 페이지수 
$e_pageNum = $now_block * $page_num;

// 마지막 번호가 전체 페이지를 넘지 않도록
if($e_pageNum > $total_page){
  $e_pageNum = $total_page;
}

// 시작번호 = (현재 페이지 -1) * 페이지당 보여질 데이타수
$start = ($page - 1 ) * $list_num;

// 글번호
$cnt = $start + 1;


// 기존 쿼리에 페이지 개념을 도입 limit $start, $list_num;

$sql_query = "select * from members order by idx desc limit $start, $list_num";
$result = mysqli_query($connect, $sql_query);

if(isset($_SESSION['user_id']) && $_SESSION['user_id']){
  echo "<a href='./logout.php'>로그아웃</a>";
} else{
  echo "<a href='./login.php'>로그인</a>";
}

echo "<hr>";

echo "<a href='./write.php'>등록</a>". " | ";
echo "<button onclick='confirmDeleteAll()' style='color:red; margin-bottom:10px'>전체삭제</button>";


echo "<table border='1'>";
echo "<tr>";
echo "<th>NO</th>";
echo "<th>이름</th>";
echo "<th>나이</th>";
echo "<th>성별</th>";
echo "<th>등록일</th>";
echo "<th>수정/삭제</th>";
echo "</tr>";

while($row = mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<td>".$cnt."</td>";
  echo "<td>";
  echo "<a href='./view.php?view_no=".$row['idx']."'>";
  echo $row['name'];
  echo "</a>";
  echo "</td>";
  echo "<td>".$row['age']."</td>";
  echo "<td>".$row['gender']."</td>";
  echo "<td>".$row['regdate']."</td>";

  echo "<td>";
  // echo "<form name='frmd' action='".$_SERVER['PHP_SELF']."' method='post'>";
  // echo "<input type='submit' value='삭제'>";
  // echo "<input tpye='text' name='del_no' value='".$row['idx']."'>";
  // echo "</form>";
  // echo "</td>";
  echo "<a href='./edit.php?edit_no=".$row['idx']."'>수정</a>"."/";
  echo "<a href='javascript:void(0);' onclick='confirmDelete(".$row['idx'].")'>삭제</a>";
  echo "</td>";
  echo "</tr>";

  $cnt++; //$cnt = $cnt + 1;
}

echo "</table>";

// 페이징 프론트작업
echo "<p>";

//이전 페이지 
if($page <= 1){
  echo "<a href='./index.php?page=1'>이전</a>";
}else{
  echo "<a href='./index.php?page=".($page-1)."'>이전</a>";
}

//페이지 번호 출력
for($p=$s_pageNum; $p <= $e_pageNum; $p++){
  echo "<a href='./index.php?page=".$p."'>".$p."</a>";
}


// 다음페이지
if($page >= $total_page){
  echo "<a href='./index.php?page=".$total_page."'>다음</a>";
}else{
  echo "<a href='./index.php?page=".($page+1)."'>다음</a>";
}
echo "</p>";




mysqli_close($connect);



?>

<script>

  function confirmDelete(del_no){
    let delNum = del_no
    let result = confirm("정말로 " + delNum + " 번 데이터를 삭제하시겠습니까?")
    if(result) {
      window.location.href = 'delete_proc.php?del_no='+del_no;
    }else{
      return false;
    }
  }



function confirmDeleteAll(){
  let result = confirm("정말로 모든 데이터를 삭제하시겠습니까?");
  if(result){
    window.location.href='delete_all.php';
  }else{
    return false;
  }
}
</script>
</body>
</html>

