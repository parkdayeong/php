<?php

include '67-db.php';

// echo "<pre>";
// print_r($_FILES);
// echo "</pre><hr>";

$arr = [];
$file = fopen($_FILES['csv']['tmp_name'], 'r');

$conn->beginTransaction();

while(($line = fgetcsv($file)) !== false){
  //array_push($arr, $line);
  $sql = "
    INSERT INTO csvmember(cs_name, cs_email) VALUES ('{$line[0]}', '{$line[1]}')
  ";
  
  $conn -> exec($sql);
}

$conn->commit();
fclose($file);
$conn = null;
?>