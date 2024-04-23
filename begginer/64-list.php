<?php
include('./config/db.php');

$sql = "SELECT * FROM myguests";
$stmt = $conn->prepare($sql);
$stmt -> execute();
$rs = $stmt->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($rs);
// echo "</pre>";


echo "<table border='1' style='border-collapse:collapse;'>
  <tr>
    <th>num</th>
    <th>firstname</th>
    <th>lastname</th>
    <th>email</th>
    <th>reg_date</th>
  </tr>  
";

foreach($rs as $row){
  echo "<tr>
   <td>".$row['id']."</td>
   <td>".$row['firstname']."</td>
   <td>".$row['lastname']."</td>
   <td>".$row['email']."</td>
   <td>".$row['reg_date']."</td>
  </tr>";
}


echo "</table>";




$conn = null;












?>