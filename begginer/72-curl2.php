<?php

echo "<p>날씨 출력</p>";

$ch = curl_init();
curl_setopt ($ch, CURLOPT_URL, 'http://echo.jsontest.com/temerature/-9.3/humidity/0.40/wind/3');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

// echo $response;

$arr = json_decode($response);
echo "<pre>";
print_r($arr);
echo "</pre>";

foreach($arr as $key => $var){
  echo $key.': '.$var.'<br>';
}
?>

<table border="1">


  <?php 
foreach($arr as $key => $var){
  echo '<tr><td>'.$key.'</td>';
  echo '<td>'.$var.'</td></tr>';
}
?>

</table>