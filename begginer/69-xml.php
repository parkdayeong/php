<?php

$myxml = file_get_contents('https://feeds.feedburner.com/zdkorea');

// echo $myxml;

$xmldom = simplexml_load_string($myxml);

// echo "<pre>";
// print_r($xmldom);
// echo "</pre>";

echo "<h1>".$xmldom->channel->title."</h1>";
echo "<h2>".$xmldom->channel->description."</h2>";

$index = 1;
foreach($xmldom->channel->item AS $row){
  echo "<a href='".$row->link."'>".$row->title."</a><br><span>[".$row->pubDate."]</span><br>";
  $index++;
  if($index > 5){
    exit;
  }
}

?>