<?php
include_once('81-db.php');

// print_r($_POST);

$id = $_POST['id'];
$pw = $_POST['pw'];

$sql = "SELECT * FROM member WHERE user_id=:user_id AND passwd=:pw";
// echo $sql;

$stmt = $conn->prepare($sql);

$stmt -> bindParam(':user_id', $id);
$stmt -> bindParam(':pw', $pw);


$stmt -> execute();
$row = $stmt->fetch();

// var_dump($row);




?>