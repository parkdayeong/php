<?php
// 견적 정보 저장
$date = $_POST['date'];
$client = $_POST['client'];
$item = $_POST['item'];
$quantity = $_POST['quantity'];
$unit_price = $_POST['unit_price'];
$vat = $_POST['vat'];
$conditions = $_POST['conditions'];

// 바탕화면 경로
$desktop_path = getenv("USERPROFILE") . "/";

// 파일명 생성
$filename = $desktop_path . $client . "_quotation.txt";

// 견적 정보 파일에 저장
$file = fopen($filename, "a");
fwrite($file, "Date: " . $date . "\n");
fwrite($file, "Client: " . $client . "\n");
fwrite($file, "Item: " . $item . "\n");
fwrite($file, "Quantity: " . $quantity . "\n");
fwrite($file, "Unit Price: " . $unit_price . "\n");
fwrite($file, "VAT: " . $vat . "\n");
fwrite($file, "Conditions: " . $conditions . "\n\n");
fclose($file);

// 저장 완료 메시지 표시
echo "<script>alert('Quotation saved successfully!'); window.location.href = 'lalatest.php';</script>";

?>