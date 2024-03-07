<?php

// function my_callback($item)
// {
//   return $item * 5;
// }

// $strings = [5, 6, 7, 8];
// $lengths = array_map('my_callback', $strings);
// print_r($lengths);


function exclaim($name, $str){
  return $name."님 ".$str."! <br>";
}

function ask($name, $str){
  return $name."님 ".$str."? <br>";
}

function printFormatted($name, $str, $format){
  echo $format($name, $str);
  
}

printFormatted('콩이','안녕',  'exclaim');
printFormatted('비지','어디가세요',  'ask');






?>