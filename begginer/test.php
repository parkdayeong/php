<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
   

body {
  /* background-color: #3e94ec; */
  font-family: 'Poppins', sans-serif;
  font-size: 16px;
  font-weight: 400;
  text-rendering: optimizeLegibility;
}

div.table-title {
text-align: center;
}

.table-title h3 {
   /* color: #fafafa; */
   font-size: 30px;
   font-weight: 600;
   font-style:normal;
   font-family: 'Poppins', sans-serif;
   text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
   text-transform:uppercase;
}


/*** Table Styles **/

.table-fill {
  background: white;
  border-radius:3px;
  border-collapse: collapse;
  height: 320px;
  margin: auto;
  max-width: 900px;
  padding:5px;
  width: 100%;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  animation: float 5s infinite;
}
 
th {
  color:#D5DDE5;;
  background:#1b1e24;
  border-bottom:4px solid #9ea7af;
  border-right: 1px solid #343a45;
  font-size:20px;
  font-weight: 500;
  padding:10px;
  text-align:left;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  vertical-align:middle;
}

th:first-child {
  border-top-left-radius:3px;
}
 
th:last-child {
  border-top-right-radius:3px;
  border-right:none;
}
  
tr {
  border-top: 1px solid #C1C3D1;
  border-bottom: 1px solid #C1C3D1;
  color:#666B85;
  font-size:15px;
  font-weight:normal;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
}
 
tr:hover td {
  background:#4E5066;
  color:#FFFFFF;
  border-top: 1px solid #22262e;
}
 
tr:first-child {
  border-top:none;
}

tr:last-child {
  border-bottom:none;
}
 
tr:nth-child(odd) td {
  background:#EBEBEB;
}
 
tr:nth-child(odd):hover td {
  background:#4E5066;
}

tr:last-child td:first-child {
  border-bottom-left-radius:3px;
}
 
tr:last-child td:last-child {
  border-bottom-right-radius:3px;
}
 
td {
  background:#FFFFFF;
  padding:15px;
  text-align:left;
  vertical-align:middle;
  font-weight:300;
  font-size:16px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  border-right: 1px solid #C1C3D1;
}

td:last-child {
  border-right: 0px;
}

th.text-left {
  text-align: left;
}

th.text-center {
  text-align: center;
}

th.text-right {
  text-align: right;
}

td.text-left {
  text-align: left;
}

td.text-center {
  text-align: center;
}

td.text-right {
  text-align: right;
}
.header{text-align: center;}
  </style>
</head>
<body>



  <div class="header">
<h2 style="color:#111;">테스트페이지입니다</h2>
<hr>
</div>
<div class="table-title">
<h3>Data Table</h3>
</div>

<?php
require_once("./config/db_conn.php");




$sql_query = "select * from test order by idx";
$result = mysqli_query($connect, $sql_query);

echo "<table class='table-fill'>";
echo "<thead>
<th class='text-left'>idx</th>
<th class='text-left'>Serial Number</th>
<th class='text-left'>Date</th>
<th class='text-left'>Items</th>
<th class='text-left'>Note</th>
<th class='text-left'></th>
<th class='text-left'>RegDate</th>
</tr>
</thead>
<tbody class='table-hover'>";

while($row = mysqli_fetch_array($result)){
  echo "<tr>";
  echo "<td>".$row['idx']."</td>";
  echo "<td>".$row['se_num']."</td>";
  echo "<td>".$row['date']."</td>";
  echo "<td>".$row['item']."</td>";
  echo "<td>".$row['note']."</td>";
  echo "<td>".$row['check']."</td>";
  echo "<td>".$row['regdate']."</td>";
  echo "</tr>";
}


echo "</tbody>";
echo "</table>";
?>
<!-- 
<table class="table-fill">
<thead>
<tr>
<th class="text-left">Serial Number</th>
<th class="text-left">Date</th>
<th class="text-left">Items</th>
<th class="text-left">Note</th>
</tr>
</thead>
<tbody class="table-hover">
<tr>
<td class="text-left">Num</td>
<td class="text-left">data1</td>
<td class="text-left">data2</td>
<td class="text-left">data3</td>
</tr>

</tbody>
</table>

<?php
$arr = array(
  array("Num1", "2024-02-20", "Item1", "Note", "Y"),
  array("Num2", "2024-02-21", "Item2", "Note", "N"),
  array("Num3", "2024-02-22", "Item3", "Note", "Y"),

);

?>
<table class="table-fill">
<thead>
<tr>
<th class="text-left">Serial Number</th>
<th class="text-left">Date</th>
<th class="text-left">Items</th>
<th class="text-left">Note</th>
<th class="text-left">V</th>
</tr>
</thead>
<tbody class="table-hover">
<?php for($row = 0; $row < count($arr); $row++){ 
   echo "<tr>";
 for($col = 0; $col < count($arr[$row]); $col++){
    echo "<td>".$arr[$row][$col]."</td>";
  }
  echo "</tr>";
}?>
</tbody>
</table>

<hr>

<table class="table-fill">
<thead>
<tr>
<th class="text-left">Serial Number</th>
<th class="text-left">Date</th>
<th class="text-left">Items</th>
<th class="text-left">Note</th>
<th class="text-left">V</th>
</tr>
</thead>
<tbody class="table-hover">
<?php
foreach($arr as $row){
  echo "<tr>";
  foreach($row as $data){
    echo "<td>".$data."</td>";
  }
  echo "</tr>";
}


?> -->
</tbody>
</table>




<div style="height:50px"></div>
<hr>
<h2>php테스트영역</h2>

<?php


echo "<pre>";
print_r($arr);
echo "</pre>";





?>
<script>

</script>
  
</body>
</html>