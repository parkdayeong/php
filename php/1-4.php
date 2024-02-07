<?php

echo "<p style='color:#ccc'>테스트페이지입니다</p>"."<hr>";

// $a = 123;
// $b = 345;
// $s = $a + $b;

// echo $s;
// echo "<br>";
// const ab = 15;
// const cd = 45;
// echo ab + cd. "<br>";
// $a = 45;
// $s = $a + $b;
// echo $s;


// $a = "qer";
// $b = "abr";
// echo $a. $b ."<br>";

// echo $a, $b


// define("char", "대한민국");
// echo char."은 자유민주국가";

// const char ="ameriaca";

// 조건문
// $a = "dd";
// if($a == "남자"){
//   echo "남자";
// }else{
//   echo "여자";
// }

// switch($a){
//   case "남자":
//     echo "남자네욤";
//     break;
//   case "여자":
//     echo "여자네욤";
//     break;
//   default : 
//    echo "남자,여자x";
//    break;
// }


// for($a = 0; $a <= 10; $a++){
//   echo $a."<br>";

//   if($a % 2 == 0){
//     echo "==========";
//     echo "<br>";
//   }
// }

// 배열 array  ==> print_r()구조보기

// $arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
// print_r($arr);
// // echo "<br>".$arr[10];


// echo "<hr>";

// $cnt = count($arr);
// echo $cnt;
// echo "<hr>";

// for($i = 0; $i <$cnt; $i++){
//   echo $arr[$i]."<br>";
// }

// echo "<hr>";
// foreach($arr as $a){
//   echo $a."<br>";
// }
// echo "<hr>";

// $arr = array(
//   array("key1" => "apple", "key2" => "mango"),
//   array("key3" => "banana", "key4" => "grape"),
// );

// $arr = array(
//   array( "apple", "mango"),
//   array("banana", "grape", "orange"),
//   array("strawberry", "blueberry"),
// );


// echo "<pre>";
// print_r($arr);
// echo "</pre>";

// echo "<hr>";

// $cnt = count($arr);
// echo $cnt."<br>";

// for($i = 0; $i < $cnt; $i++){
//   $d = count($arr[$i]);
//   echo $i."==>".$d." "."<br>";

//   for($a = 0; $a < $d; $a++){
//     echo $i.$a."--->".$arr[$i][$a]."<br>";
//   }
// }


// for($i = 0; $i < count($arr); $i++){
//   for($a = 0; $a < count($arr[$i]); $a++){
//     echo $i.$a."<br>";
//     echo $arr[$i][$a]."<br>";
//   }
// }


// $a = 1;
// while($a <= 10) //조건문은 만족하면 아래가 실행, 만족하지않으면 빠져나감
// {
//  echo $a.'<br>';
//  $a++;
// }
// echo '<hr>';
// $b = 1;
// do {
//   echo $b.'<br>';
//   $b++;
// } while($b <= 10)


/**
 * 반복문 for응용
 * 배열생성
 * 배열의 값을 출력
 * html table, css
*/

$list = array(
"가" => 85,
"나" => 90,
"다" => 100,
"라" => 40,
"마" => 70,
"바" => 80,
"사" => 80,
"아" => 90,
"자" => 30,
"차" => 45,
"카" => 40,
"타" => 35,
"파" => 55,
"하" => 67,
"A" => 100,
);

// echo '<pre>';
// print_r ($list);
// echo '</pre><hr>';


// foreach ($list as $key => $value){
//   echo $key.$value.'<br>';
// }

?>

<!DOCTYPE html>
<html charset ='ko'>
  <head>
    <title>시험성적표</title>
    <style>
      table{
        border-collapse : collapse;
      }
    td, th{
      padding:10px;
      border:1px solid #ccc;
    }
    th{
      background: linear-gradient(135deg, #333, #ddd);
      color:#fff;
    }
    .no{
      color: blue
    }
      
    </style>
  </head>
  <body>
<!-- <h1>테스트</h1> -->
<table>
  <thead>
    <tr>
      <th>번호</th>
      <th>이름</th>
      <th>점수</th>
    </tr>
  </thead>
  <tbody>
    <?php
    // $cnt = count($list);
    $no = 1; // 번호
    $total = 0; // 총점
    foreach($list as $key => $value){
      // echo "<tr>";
      // echo "<td>".$no."</td>";
      // echo "<td>".$key."</td>";
      // echo "<td>".$value."</td>";
      // echo "</tr>";
    ?>
    <tr>
      <td class="no"><?= $no; ?></td>
      <td><?= $key; ?></td>
      <td><?= $value; ?></td>
    </tr>

    <?php
          $total += $value;
    $no++;
      }
    ?> 
  </tbody>
  <tfoot>
    <tr>
      <td>총점</td>
   
   <td colspan='2'><?= $total; ?></td>
   
    </tr>

  </tfoot>
</table>
  </body>
</html>
</html>