<?php

// print_r($_FILES);

// Array ( [photo] => Array ( [name] => cat.jpg [type] => image/jpeg [tmp_name] => C:\xampp\tmp\php9E52.tmp [error] => 0 [size] => 7260 ) )

// copy($_FILES['photo']['tmp_name'], "upload/" .$_FILES['photo']['name'] );
// $arr = array('result' => "success", "img" => "upload/" .$_FILES['photo']['name']);
// die (json_encode($arr));

if(is_array($_FILES['photo']['tmp_name'])){
  $cnt = count($_FILES['photo']['tmp_name']);
  $rs_arr = [];
  for ($i = 0; $i < $cnt; $i++){
    copy($_FILES['photo']['tmp_name'][$i], "upload/" . $_FILES['photo']['name'][$i] );
    $rs_arr[] = "upload/" . $_FILES['photo']['name'][$i];
  }
  
  $arr = array('result' => "success", "img" => implode('|', $rs_arr));
  die (json_encode($arr));
}
else{
  copy($_FILES['photo']['tmp_name'], "upload/" .$_FILES['photo']['name'] );
  $arr = array('result' => "success", "img" => "upload/" .$_FILES['photo']['name']);
  die (json_encode($arr));
}



?>