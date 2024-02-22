<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 게시판 관리의 상단 내용
if (G5_IS_MOBILE) {
    // 모바일의 경우 설정을 따르지 않는다.
    include_once(G5_BBS_PATH.'/_head.php');
    echo run_replace('board_mobile_content_head', html_purifier(stripslashes($board['bo_mobile_content_head'])), $board);
} else {
    // 상단 파일 경로를 입력하지 않았다면 기본 상단 파일도 include 하지 않음
    if (trim($board['bo_include_head'])) {
        if (is_include_path_check($board['bo_include_head'])) {  //파일경로 체크
            @include ($board['bo_include_head']);
        } else {    //파일경로가 올바르지 않으면 기본파일을 가져옴
            include_once(G5_BBS_PATH.'/_head.php');
        }
    }
    echo run_replace('board_content_head', html_purifier(stripslashes($board['bo_content_head'])), $board);
}

?>
<div style =" display: flex;
    align-items: center;
    justify-content: center;margin-top:56px;height:200px; width:100%; overflow:hidden; background:url('https://www.shutterstock.com/image-illustration/code-html-php-web-programming-260nw-1653624784.jpg'); background-size:cover;">
        <!-- <img style="width:100%" src="https://www.shutterstock.com/image-illustration/code-html-php-web-programming-260nw-1653624784.jpg"> -->
    <h1 style="color:white;"><?= $board['bo_subject'] ?></h1>    
    </div>
<div class="container">
    