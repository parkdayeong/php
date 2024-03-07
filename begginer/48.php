<?php

// try{
// $numerator = 10;
// $denominator = 0;

// if($denominator == 0){
//   throw new Exception("나누기연산에서 0으로 나눌 수 없습니다.");
// }

// $result = $numerator / $denominator;
// echo "결과 : ". $result;
// } catch (Exception $e){
//   echo "예외발생: ". $e -> getMessage();
// }

# Exception 예외처리


function divide($dividend, $divisor){
  if($divisor == 0){
    throw new Exception(message: "0으로 나눌 수 없습니다.");
  }
  return $dividend / $divisor;
}



?>