<?php
// PHP OOP
// 클래스 상수

class Base{
  public const AGE = 21;
  public $mustOlderThan = 1545;

  public function display(){
    // echo $this->mustOlderThan;
    echo self::AGE;
  }
}


$base = new Base();
echo Base::AGE;
echo $base -> display();

// echo Base::AGE."<br>";

// $base = new Base();

// $base -> mustOlderThan = 220;
// echo $base -> mustOlderThan;




?>