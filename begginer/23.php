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

require_once("./config/db_conn.php");


$name = $_POST['name'];
$company = $_POST['company'];

$sql = "INSERT INTO beg (name, company) VALUES ('$name', '$company')";

mysqli_query($connect, $sql);



// require_once("./config/db_conn.php");




// $sql_query = "select * from test order by idx";
// $result = mysqli_query($connect, $sql_query);

// print_r($_GET);

// echo "<br>";

// echo "name : ". $_GET['name'],"<br>";
// echo "company : ". $_GET['company'],"<br>";
// echo "text : ". $_GET['text'],"<br>";

// echo "name : ". $_REQUEST['name'],"<br>";
// echo "company : ". $_REQUEST['company'],"<br>";
// echo "text : ". $_REQUEST['text'],"<br>";

// http://test.beg.com/23.php?name=cong&company=google&text=cutecat

// Query String

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// echo "<br>";

//$_REQUEST <- $_GET + $_POST + $_COOKIE


  echo "<h1>POST</h1>";
  print_r($_POST);

  echo "<h1>get</h1>";
  print_r($_GET);


?>




<script>

</script>
  
</body>
</html>