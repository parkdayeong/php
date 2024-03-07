<?php

#1. 클래스 생성하기
class Fruit {
  // Properties
  private $name;
  public $color;
  
  // Methods
  function set_name($name1){
    $this->name = $name1;
  }

  function get_name(){
    return $this->name;
  }

  function set_color($color1){
    $this->color = $color1;
  }
  function get_color(){
    return $this->color;
  }
  
}

$apple = new Fruit();
$banana = new Fruit();

$apple->set_name(name1: 'Apple');
$banana->set_name(name1: 'Banana');

echo $apple->get_name()."<br>";
echo $banana->get_name()."<br>";

$apple->set_color('red');
$banana->set_color('yellow');

echo $apple->get_color()."<br>";
// echo $apple->name.":".$apple->color;/


?>