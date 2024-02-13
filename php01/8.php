<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table{
      border:1px solid grey;
      border-collapse : collapse;
    }
    td{
      border: 1px solid grey;
    }
  </style>
</head>
<body>
  <p style="color:#ddd;">테스트페이지입니다</p>
  <hr>

<?php

// class 객체
/*
class 클래스명{
  private function 함수명1(){
    외부에서 접근할 수 없는 함수
  }
  public function 함수명2(){
    외부에서 접근 가능한 함수
  }
  protected function 함수명3(){
    내부와 상속받은 클래스에서 접근할 수 있다.
  }
}


$car = new 클래스명();

$car -> 함수2();
*/

// class car {

//   private $_carname;
//   public $country;

//   public function number(){
//     echo "자동차 번호는 **입니다.";
//   } 

//   public function licence(){
//     return "홍길동 면허";
//   }

//   private function car_name(){
//     if($this->_carname == ""){
//       $name = "이름없는 자동차";
//     }
//     return $this -> _carname;
//   }

//   public function brand($car_name = ""){
//     // $car_name = "티코";
//     return $this->_carname = $car_name;
//   }
// }


// $CAR = new car();
// echo  $CAR -> licence()."<br>";
// $CAR -> brand("심슨");

// echo $CAR -> country = "미국";

/*


*/


// include_once("a.php");
// echo car();

$server_name = 'localhost'; //127.0.0.1
$user = 'root';
$password = '';
//$port = '3306';
$database = 'php';

$connect = mysqli_connect($server_name, $user, $password, $database);

mysqli_select_db($connect, $database) or die("database select failed");

$sql_query = "select * from members order by age desc";

/*
order by 기준이될 컬럼명 :정렬하다
order by idx desc -> 최근순
order by idx asc -> 오래된순
*/



$result = mysqli_query($connect, $sql_query);

echo "<table border='1'>";
echo "<tr>";
echo "<th>NO</th>";
echo "<th>이름</th>";
echo "<th>나이</th>";
echo "<th>성별</th>";
echo "<th>등록일</th>";
echo "</tr>";

while($row = mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<td>".$row['idx']."</td>";
  echo "<td>".$row['name']."</td>";
  echo "<td>".$row['age']."</td>";
  echo "<td>".$row['gender']."</td>";
  echo "<td>".$row['regdate']."</td>";
  echo "</tr>";
}

echo "</table>";
mysqli_close($connect);





?>
</body>
</html>

