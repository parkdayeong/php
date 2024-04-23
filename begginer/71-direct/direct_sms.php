<?php

include 'direct_config.php';

define('DIRECTSEND_SMSURL', 'https://directsend.co.kr/index.php/api_v2/sms_change_word');

$message = "가입을 축하드립니다. ";
$sender = DIRECTSEND_SENDER;// 다이렉트샌드 발신자번호
$username = DIRECTSEND_USERNAME; // 다이랜트센드 ID
$key = DIRECTSEND_APIKEY;

// 수신자번호
$r_array = [];
$r_array[] = ['mobile'=>'01045150718'];
// $r_array[] = ['mobile'=>'01045150718'];
$reseiver = json_encode($r_array); // [{'mobile' : 01045150718, 'mobile' : 01045150718}]

$postarr = [
  "message" => $message,
  "sender" => $sender,
  "receiver" => $reseiver,
  "key" => $key
];

$postvars = json_encode($postarr);

$headers=[];
$headers[] = "cache-control:no-cache";
$headers[] = "content-type: application/json; charset=utf-8";



$ch = curl_init();


curl_setopt($ch,CURLOPT_URL, DIRECTSEND_SMSURL);
curl_setopt($ch,CURLOPT_POST, true);
curl_setopt($ch,CURLOPT_POSTFIELDS, $postvars);
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch,CURLOPT_CONNECTTIMEOUT ,3);
curl_setopt($ch,CURLOPT_TIMEOUT, 60);
curl_setopt($ch,CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);

if(curl_errno($ch)){
  // echo "Curl error: ". curl_error($ch) ;
  $arr = ['result' => 'fail'];
  echo json_encode($arr);
} else{
  $arr = ['result' => 'success'];
  echo json_encode($arr);
}





curl_close($ch);


?>