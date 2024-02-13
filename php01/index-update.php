<?php
session_start(); 
require_once("./config/db_conn.php");

function getPaginationInfo($totalRecords, $currentPage, $recordsPerPage = 5, $pageRange = 3) {
    $totalPages = ceil($totalRecords / $recordsPerPage);
    $currentPage = max(1, min($currentPage, $totalPages));
    
    $block = ceil($currentPage / $pageRange);
    $startPage = max(1, ($block - 1) * $pageRange + 1);
    $endPage = min($totalPages, $block * $pageRange);

    return [
        'totalPages' => $totalPages,
        'currentPage' => $currentPage,
        'startPage' => $startPage,
        'endPage' => $endPage
    ];
}

$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$totalRecordsQuery = "SELECT COUNT(*) AS total FROM members";
$totalRecordsResult = mysqli_query($connect, $totalRecordsQuery);
$totalRecords = mysqli_fetch_assoc($totalRecordsResult)['total'];

$paginationInfo = getPaginationInfo($totalRecords, $currentPage);
$startIndex = ($currentPage - 1) * 5;
$query = "SELECT * FROM members ORDER BY idx DESC LIMIT $startIndex, 5";
$result = mysqli_query($connect, $query);
?>

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
  <p style="color:#ddd;">테스트페이지입니다</p>
  <hr>

<?php if(isset($_SESSION['user_id']) && $_SESSION['user_id']): ?>
  <a href='./logout.php'>로그아웃</a>
<?php else: ?>
  <a href='./login.php'>로그인</a>
<?php endif; ?>

  <hr>

  <a href='./write.php'>등록</a> |
  <button onclick='confirmDeleteAll()' style='color:red; margin-bottom:10px'>전체삭제</button>

  <table border='1'>
    <tr>
      <th>NO</th>
      <th>이름</th>
      <th>나이</th>
      <th>성별</th>
      <th>등록일</th>
      <th>수정/삭제</th>
    </tr>

    <?php $cnt = ($currentPage - 1) * 5 + 1; ?>
    <?php while($row = mysqli_fetch_assoc($result)): ?>
    <tr>
      <td><?php echo $cnt++; ?></td>
      <td><a href='./view.php?view_no=<?php echo $row['idx']; ?>'><?php echo $row['name']; ?></a></td>
      <td><?php echo $row['age']; ?></td>
      <td><?php echo $row['gender']; ?></td>
      <td><?php echo $row['regdate']; ?></td>
      <td>
        <a href='./edit.php?edit_no=<?php echo $row['idx']; ?>'>수정</a> /
        <a href='javascript:void(0);' onclick='confirmDelete(<?php echo $row['idx']; ?>)'>삭제</a>
      </td>
    </tr>
    <?php endwhile; ?>

  </table>

  <p>
    <?php if($paginationInfo['currentPage'] > 1): ?>
      <a href='./index.php?page=<?php echo $paginationInfo['currentPage'] - 1; ?>'>이전</a>
    <?php endif; ?>

    <?php for($p = $paginationInfo['startPage']; $p <= $paginationInfo['endPage']; $p++): ?>
      <a href='./index.php?page=<?php echo $p; ?>'><?php echo $p; ?></a>
    <?php endfor; ?>

    <?php if($paginationInfo['currentPage'] < $paginationInfo['totalPages']): ?>
      <a href='./index.php?page=<?php echo $paginationInfo['currentPage'] + 1; ?>'>다음</a>
    <?php endif; ?>
  </p>

  <script>
    function confirmDelete(del_no){
      var result = confirm("정말로 " + del_no + " 번 데이터를 삭제하시겠습니까?");
      if(result) {
        window.location.href = 'delete_proc.php?del_no=' + del_no;
      }
    }

    function confirmDeleteAll(){
      var result = confirm("정말로 모든 데이터를 삭제하시겠습니까?");
      if(result){
        window.location.href='delete_all.php';
      }
    }
  </script>
</body>
</html>
