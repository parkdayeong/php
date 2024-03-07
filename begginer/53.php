<?php


// Access Modifiers

// public
// protected
// private

class Fruit{
  //properties
  public $name;
  public $color;
  public $weight;

  public function set_name($n){
    $this->name = $n;
    $this->set_color(c:"노랑");
  }

  protected function set_color($c){
    $this->color = $c;
  }

  private function set_weight($w){
    $this->weight = $w;
  }
  
}


// $mango = new Fruit();

// $mango->set_name("mango");
// echo $mango->name;
// // $mango->set_color("yellow");
// $mango->set_weight(300);



?>