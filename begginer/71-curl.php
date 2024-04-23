<?php

echo "curl sample <br>";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.daum.net');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

curl_close($ch);

// echo iconv('euc-kr','utf-8',$response);
echo $response;

?>