<?php


// echo "이름은 :".$_COOKIE['ck_name']."입니다.";

if(isset($_COOKIE['ck_name'])){
echo "이름은 :".$_COOKIE['ck_name']."입니다. <br>";
} else {
  echo "쿠키가없어요<br>";
}

if(isset($_COOKIE['ck_age'])){
  echo "나이는 :".$_COOKIE['ck_age']."입니다.<br>";
  } else {
    echo "쿠키가없어요<br>";
  }
  

?>

<a href="delete.php">쿠키지우기</a>