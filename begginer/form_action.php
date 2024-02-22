<?php

echo "<pre>";
print_r($_POST);
echo "</pre>";

$subject = $_POST['subject'];
$password = $_POST['password'];
$content = nl2br($_POST['content']);


echo "subject ".$subject,"<br>";
echo "password ".$password,"<br>";
echo "content ".$content."<br>";




// echo "<hr>";
// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";







?>




