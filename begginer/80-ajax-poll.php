<?php

$vote = (isset($_GET['vote']) && $_GET['vote'] != '') ? $_GET['vote'] : '';

if($vote == ''){
  exit;
}

$filename = 'data/ajax_poll.txt';

if(!file_exists($filename)){
  file_put_contents($filename, "0,0");
} 
$content = file_get_contents($filename);
list($yes, $no) = explode(',', $content);


if($vote == 0){
  $yes++;
}elseif($vote == 1){
  $no++;
}

file_put_contents($filename, "$yes,$no");

$yes_width = round(($yes / ($yes + $no)) * 100);
$no_width = round(($no / ($yes + $no)) * 100);


// echo $yes_width. '' . $no_width;
// echo 'yes:'. $yes."<br>";
// echo 'no:'. $no."<br>";
?>
<h2>투표결과 :</h2>
<table>
  <tr>
    <td>예</td>
    <td width="300"><img src="https://www.w3schools.com/php/poll.gif" height="20" width="<?=$yes_width?>%"></td>
    <td><?=$yes?>표(<?=$yes_width?>%)</td>
  </tr>
  <tr>
    <td>아니요</td>
    <td><img src="https://www.w3schools.com/php/poll.gif" height="20" width="<?=$no_width?>%"></td>
    <td><?=$no?>표(<?=$no_width?>%)</td>
  </tr>
</table>
<a href="http://test.beg.com/80.html">메인으로</a>