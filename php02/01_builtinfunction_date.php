<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>1. 내장함수(날짜 및 시간)</title>
  <style>
    table{
      border:1px solid grey;
      border-collapse: collapse;  
    }
    table td,th{
      border: 1px solid grey;
      padding:10px;
    }
    th{
      background-color : #f2f2f2;
    }
    
  </style>
</head>
<body>
<p style="color:#ddd;">테스트페이지입니다</p>
<hr>
<?php

$today = getdate();
print_r($today)."<hr>";
print_r(gettimeofday());

$timestamp = time(); // 현재 시간의 타임스탬프를 얻음
$local_time_array = localtime($timestamp);
print_r($local_time_array);

echo "<hr>";

echo "<p>내장함수(날짜 및 시간)</p>";
echo "<table>";
echo "<tr>";
echo "<th>함수</th>";
echo "<th>방법</th>";
echo "<th>결과값</th>";
echo "<th>용도</th>";
echo "</tr>";
echo "<tr>";
echo "<td>time()</td>";
echo "<td>time()</td>";
echo "<td>".time()."</td>";
echo "<td>현재 시각을 timestamp값으로 구함</td>";
echo "</tr>";
echo "<tr>";
echo "<td> date() </td>";
echo "<td> date('표시할 시간의 포맷형태','특정한 timestamp값')  </td>";
echo "<td>". date("Y-m-d H:i:s") ."</td>";
echo "<td>사용자가 지정한 형태로 시간을 표시. 특정시간의 날짜와 요일등을 배열로 리턴</td>";
echo "</tr>";
echo "<tr>";
echo "<td>  mktime() </td>";
echo "<td> 	mktime(시,분,초,월,일,년)   </td>";
echo "<td>". mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y')) ."</td>";
echo "<td>지정된 날짜를 timestamp값으로 변환</td>";
echo "</tr>";
echo "<tr>";
echo "<td>  checkdate() </td>";
echo "<td> 	checkdate(월,일,년) </td>";
echo "<td>". checkdate(1, 1, 2) ."</td>";
echo "<td> 날짜와 시간이 올바른 범위 안에 있는지 검사</td>";
echo "</tr>";
echo "<tr>";
echo "<td>  getdate() </td>";
echo "<td> 	getdate(timestamp값) or getdate()</td>";
echo "<td>" . $today['hours'] . ":" . $today['minutes'] . ":" . $today['seconds'] . "</td>";
echo "<td> 특정timestamp값으로 시간,요일,날짜정보를 배열로 반환</td>";
echo "</tr>";
echo "<tr>";
echo "<td>   gettimeofday()  </td>";
echo "<td> 	 gettimeofday() </td>";
echo "<td>" .  gettimeofday()['usec']  . "</td>";
echo "<td>  현재 시스템의 현재 시간 정보를 배열로 리턴</td>";
echo "</tr>";
echo "<tr>";
echo "<td>gmmktime()</td>";
echo "<td>gmmktime(시,분,초,월,일,년)</td>";
echo "<td>" .  gettimeofday()['usec']  . "</td>";
echo "<td>  그리니치표준 시간으로 지정한 날짜의 timestamp값을 리턴</td>";
echo "</tr>";
echo "<tr>";
echo "<td>strftime()</td>";
echo "<td>strftime('표시할 시간의 포맷형태','특정시간의 timestamp값')</td>";
echo "<td>" .  strftime("%Y-%m-%d %H:%M:%S") . "</td>";
echo "<td>  특정한 포맷으로 날짜 정보를 출력하는데 언어를 지정 가능</td>";
echo "</tr>";
echo "</tr>";
echo "<tr>";
echo "<td>microtime()</td>";
echo "<td>microtime()</td>";
echo "<td>" . microtime(true) . "</td>";
echo "<td>  현재시간의 마이크로타임 값과 timestamp값을 표시</td>";
echo "</tr>";
echo "<tr>";
echo "<td> localtime() </td>";
echo "<td> localtime() </td>";
echo "<td>" .  $local_time_array['0']  . "</td>";
echo "<td>  현재 서버의 로컬 타임을 표시 </td>";
echo "</tr>";


echo "</table>";





// // 내장함수 date ("년-월-일 시:분:초") -- 사용자가 지정한 형태로 시간을 표시. 특정시간의 날짜와 요일등을 배열로 리턴
//   echo date("Y-m-d H:i:s")."<br>";
// // 내장함수 time -- 현재 시각을 timestamp값으로 구함
//   echo time()."<br>";
// // 내장함수 마이크로타임
//   echo microtime(true)."<br>";
// // 내장함수 mktime 시분초월일년
//   echo mktime(12, 23, 45, 06, 27, 2023)."<br>";
//   echo mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'))."<br>";
// // 내장함수 checkdate
//   echo var_dump(checkdate(11111, 1, 2))."<br>";


?>
</body>
</html>