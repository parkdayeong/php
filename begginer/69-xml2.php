<?php

$myxml = file_get_contents('https://feeds.feedburner.com/zdkorea');

// echo $myxml;

$xmldom = simplexml_load_string($myxml);

echo "<pre>";
print_r($xmldom);
echo "</pre>";

// echo "<h1>".$xmldom->channel->title."</h1>";

?>