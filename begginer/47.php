<?php

// // $age = array("Peter" => 35, "Cong" => 3, "Hoya"=> 9);
// $age = [
//   "Peter" => 35, 
//   "Cong" => 3, 
//   "Hoya"=> 9
// ];

// // PHP 연관배열을 ==> JSON형태로
// // echo json_encode($age);

// // $json = '{"Peter" : 35, "Ben" : 37, "Joe" : 20}';
// // $obj = json_decode($json, false);
// // echo $obj->Peter;


// $json = '{"Peter" : 35, "Ben" : 37, "Joe" : 20}';
// $arr = json_decode($json, true);
// var_dump($arr);
// echo $arr["Peter"];

// json데이터 불러오기
$json_data = file_get_contents('./json/data.json');

// json데이터를 배열로 불러오기
$data = json_decode($json_data, true);

echo "<pre>";
print_r($data);
echo "</pre>";

// 배열로 변환된 JSON 데이터 사용예씨
foreach ($data as $person) {
  echo "Name: " . $person['name'] . ", Age: " . $person['age'] . ", City: " . $person['city'] . "<br>";
}


?>