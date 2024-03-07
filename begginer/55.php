<?php

// class Fruit{
//   public $color;
//   public $name;

//   public function __construct($name, $color){
//     $this->name = $name;
//     $this->color = $color;
//   }
  
//   public function intro(){
//     echo "이과일 이름은 {$this->name}이고, 색깔은 {$this->color} 입니다.";
//   }

  
//   }

//   class Mango extends Fruit{
//     public function message(){
//       echo "망고";
//     }
//   }


//   $mango = new Mango("mango", "yellow");
//   $mango->message();
  


// 부모 클래스 정의

class Animal{
   public $name;
  public function __construct($name){
    $this->name = $name;
  }
  
  public function sound(){
    return "Some generic animal sound";
  }

  public function __destruct()
  {
    echo "<hr>";
    echo "The end";
    echo "<hr>";
  }
  
}

// 자식 클래스 정의

class Dog extends Animal{
  public function sound2(){
    return "Woof!";
  }
}

//사용 예시

$dog = new Dog("ddoddo");
echo "{$dog->name} says : {$dog->sound2()} " ;

echo "<br>프로그램 실행중";
echo "<br>프로그램 실행중";

unset($dog);

echo "<br>프로그램 실행중";

echo "<br>프로그램 실행중";

















  

?>