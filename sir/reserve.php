<?php
	// if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

	// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
	// add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
	// add_javascript(G5_POSTCODE_JS, 0);    //다음 주소 js

// 	$mb = get_member($member['mb_id'] );
// $temp_email = str_replace("@", "", $write['wr_email']);
// 	if(empty($temp_email)){ $write['wr_email'] = $member['mb_email']; } // 이메일
include_once('./_common.php');

include_once(G5_PATH.'/head.php');

?>

<div class="container">
<?= include_once("./customer1.php");  ?>

</div>