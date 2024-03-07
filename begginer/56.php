<?php

// OOP 정적 METHOD, 정적 PROPERTY STATIC

class Car{
  private static $count = 0;
  private static $carList = [];
  private $name;
 
  function __construct($name){
  $this->name = $name;
  self::$count = self::$count + 1;
  array_push(self::$carList, $name);
  }
  
  function message(){
    echo "<p> {$this->name}가 생성되었습니다.</p>";
    echo "<p>생산번호 :". self::$count. "</p>";
  }

  static function getCarList(){
    return self::$carList;
  }
}




$p1 = new Car(name: 'volvo');
$p1->message();


$p2 = new Car(name: 'audi');
$p2->message();

$p3 = new Car(name: 'ferrari');
$p3->message();


$a = implode(',', Car::getCarList());
echo "<p>".$a."</p>";


?>