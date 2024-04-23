<?php



require_once('../config/db_conn.php');

// print_r($_POST);

// Array ( [start_date] => [co_name] => [memo] => [end_date] => [estimate] => [pay_amount] => [pay_date] => )

$start_date = trim($_POST['start_date']);
$co_name = trim($_POST['co_name']);
$memo = trim($_POST['memo']);
$end_date = trim($_POST['end_date']);
$estimate = trim($_POST['estimate']);

$pay_amount = trim($_POST['pay_amount']);
$pay_date = trim($_POST['pay_date']);

// echo $start_date.$co_name.$memo.$end_date.$estimate.$pay_amount.$pay_date;
if($_POST['progress'] == "" && empty($_POST['progress'])) {
  $gender ='선택안함';
}else{
  $progress = $_POST['progress'] ;
}

// echo $progress;

$sql_query = "insert into free set start_date='".$start_date."',co_name='".$co_name."',memo='".$memo."', end_date='".$end_date."', estimate='".$estimate."', progress='".$progress."',pay_amount='".$pay_amount."',pay_date='".$pay_date."'";
$result = mysqli_query($connect, $sql_query);


if($result){
  
  echo "<script>alert('정상 처리되었습니다.');</script>";
  echo "<script>window.location.href='index.php';</script>";
} else{
  echo " 실패";
}

?>