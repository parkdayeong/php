<?php
include('65-db.php');

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

$subject = $_POST['subject'];
$content = $_POST['content'];

// $date = date("Y-m-d H:i:s");


try{
  $sql = "
  INSERT INTO board(subject, content, rdate) VALUES ('{$subject}','{$content}','NOW()') 
  ";
  $conn->exec($sql);
  echo "<p>게시물등록에 성공했습니다.</p>";

  $last_id = $conn->lastInsertId();
  
  echo "<p>게시물번호는 {$last_id} 입니다.</p>";

  echo "
    <script>
      self.location.href='65-view.php?idx={$last_id}';
    </script>
  
  ";
  
  
}catch(PDOException $e){
  echo $e->getMessage();
}
// echo $sql;


$conn = null;



?>