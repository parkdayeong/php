<?php

class Fruit{
  public $name;
  public $color;

  // 생성자 constructor
  function __construct($name1, $color1){
    $this->name = $name1;
    $this->color = $color1;
   }
  
   function get_name(){
    return $this->name;
   }

   function get_color(){
    return $this->color;
   }
}

$apple = new Fruit("사과","red");
$banana = new Fruit("바나나","yellow");
echo $apple->get_name()." : ".$apple->get_color()."<br>";
echo $banana->get_name()." : ".$banana->get_color()."<br>";




?>