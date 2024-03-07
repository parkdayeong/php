<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  table {
    border: 1px solid black;
    border-collapse: collapse;
  }

  tr,
  td {
    border: 1px solid black;
  }
  </style>
</head>

<body>
  <table>
    <tr>
      <td>Filter Name</td>
      <td>Filter Id</td>
    </tr>
    <?php
    foreach(filter_list() as $id => $filter){
      echo '<tr><td>'. $filter . '</td><td>'. filter_id($filter). '</td></tr>';
    }
    echo "<pre>";
    print_r ($_SERVER);
    echo "</pre>";
  ?>
  </table>
  <hr>
  <p>유효성검사</p>
  <hr>
  <?php

  // FILTER_VALIDATE_EMAIL: 이메일 주소의 유효성을 확인합니다.
  // FILTER_VALIDATE_URL: URL의 유효성을 확인합니다.
  // FILTER_VALIDATE_IP: IP 주소의 유효성을 확인합니다.
  // FILTER_VALIDATE_INT: 정수의 유효성을 확인합니다.
  // FILTER_VALIDATE_FLOAT: 부동 소수점 숫자의 유효성을 확인합니다.
  // FILTER_VALIDATE_BOOLEAN: 부울 값의 유효성을 확인합니다.
  // FILTER_SANITIZE_STRING: 문자열에서 HTML 태그를 제거합니다.
  // FILTER_SANITIZE_EMAIL: 이메일 주소에서 모든 문자를 제거하고 올바른 이메일 주소 형식으로만 남깁니다.
  // FILTER_SANITIZE_URL: URL에서 모든 문자를 제거하고 올바른 URL 형식으로만 남깁니다.
  // FILTER_SANITIZE_NUMBER_INT: 정수만 남기고 다른 모든 문자를 제거합니다.
  
  $email = "    molra0000@douzoneon.com";
  $email = trim($email); // 이메일 공백제거
  $valiEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
  
  if($valiEmail){
    echo $email. " : 이메일 주소가 유효합니다.";
  } else {
    echo "이메일 형식에 맞게 등록해주세요.";
  }
  echo "<hr>";

  $ip = $_SERVER['REMOTE_ADDR'];
  
  if(filter_var($ip, FILTER_VALIDATE_IP)){
      echo $ip. " : 현재 ip 주소가 유효합니다.";
  }else{
     echo "아이피주소를 확인해주세요.";
  }

  echo "<hr>";
  
  $url = "https://www.naver.com";
  if(filter_var($url, FILTER_VALIDATE_URL)){
    echo "url 주소가 유효합니다.";
  } else {
    echo "url주소를 정확히 입력해주세요.";
  }

  echo "<hr>";


  

  
  ?>
</body>

</html>