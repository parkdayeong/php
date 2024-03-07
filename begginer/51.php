<?php

class Car {
  public $name;
  public $color;

  function __construct($name, $color){
    $this->name = $name;
    $this->color = $color;
    
    echo "<p>자동차가 생산되었습니다.</p>";
    echo "<p>이름 : $this->name / 색상 : $this->color </p>";
    }

    function __destruct(){
      echo "<p>자동차 폐차가 되었습니다.</p>";
      echo "<p>차량등록말소사실증명서가 발급되었습니다.</p>";
    }
}

$volvo = new Car("volvo", "black");

unset($volve);


echo "<p>프로그램 실행중</p>";

// $volvo = new Car("Jeep", "white");



?>