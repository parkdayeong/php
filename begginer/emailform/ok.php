<?php

echo "<pre>";
print_r($_POST);
echo "</pre>";

$id = (isset($_POST['id']) && $_POST['id'] != '' ) ? $_POST['id'] : '';
$pw = (isset($_POST['pw']) && $_POST['pw'] != '' ) ? $_POST['pw'] : '';
$email = (isset($_POST['email']) && $_POST['email'] != '' ) ? $_POST['email'] : '';

$email = trim($email);
$valEmail = filter_var($email, FILTER_VALIDATE_EMAIL);

if($valEmail){
  echo "유효한 이메일입니다.";
}else{
  echo "유효한 이메일형식이 아닙니다.";
}



?>