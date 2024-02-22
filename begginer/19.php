<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<p style="color:#ddd;">테스트페이지입니다</p>
<hr>
<?php
// php배열 - 다차원배열

$cars = array(
  array("data1", 22 , 10),
  array("data1", 25 , 4),
  array("data1", 12 , 1),
);

echo "<pre>";
print_r($cars);
echo "</pre>";


// for($row = 0; $row < count($cars); $row++){
//   for($col = 0; $col < count($cars); $col++){

//     echo $cars[$row][$col]."<br>";
//   }
// } 


?>


<table border='1'>
  <tr>
    <th>1</th>
    <th>2</th>
    <th>3</th>
  </tr>
  <?php for($row = 0; $row < count($cars); $row++){ ?>

</table>









<!-- <table border = '1'>
    <tr>
        <th>차량</th>
        <th>속도</th>
        <th>거리</th>
    </tr>
    <?php foreach ($cars as $car): ?>
    <tr>
        <?php foreach ($car as $data): ?>
        <td><?php echo $data; ?></td>
        <?php endforeach; ?>
    </tr>
    <?php endforeach; ?>
</table> -->




</table>

<script>
  
</script>
  
</body>
</html>