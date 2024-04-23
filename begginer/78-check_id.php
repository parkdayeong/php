<?php
// db연결
require_once('78-db.php');

$user_id = $_GET['id'];
echo $user_id;

$sql = "SELECT COUNT(*) cnt FROM member WHERE user_id='".$user_id. "'";
$stmt = $conn->prepare($sql);
$stmt->execute();

$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$row = $stmt->fetch();

print_r($row);

?>