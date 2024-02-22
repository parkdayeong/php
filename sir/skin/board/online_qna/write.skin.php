<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>
<style type="text/css">
<!--
.quick {border: 1px solid #999999;
}
-->
</style>


<section id="bo_w">
    <h2 id="container_title"><?php echo $g5['title'] ?></h2>

    <!-- 게시물 작성/수정 시작 { -->
    <form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" style="width:<?php echo $width; ?>">
    <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
    <input type="hidden" name="w" value="<?php echo $w ?>">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
	<input type="hidden" name="wr_subject"  value="빠른 상담 신청">
	<input type="hidden" name="wr_subject"  value="빠른 상담 신청">
    <?php
    $option = '';
    $option_hidden = '';
    if ($is_notice || $is_html || $is_secret || $is_mail) {
        $option = '';
        if ($is_notice) {
            $option .= "\n".'<input type="checkbox" id="notice" name="notice" value="1" '.$notice_checked.'>'."\n".'<label for="notice">공지</label>';
        }

        if ($is_html) {
            if ($is_dhtml_editor) {
                $option_hidden .= '<input type="hidden" value="html1" name="html">';
            } else {
                $option .= "\n".'<input type="checkbox" id="html" name="html" onclick="html_auto_br(this);" value="'.$html_value.'" '.$html_checked.'>'."\n".'<label for="html">html</label>';
            }
        }

        if ($is_secret) {
            if ($is_admin || $is_secret==1) {
                $option .= "\n".'<input type="checkbox" id="secret" name="secret" value="secret" '.$secret_checked.'>'."\n".'<label for="secret">비밀글</label>';
            } else {
                $option_hidden .= '<input type="hidden" name="secret" value="secret">';
            }
        }

        if ($is_mail) {
            $option .= "\n".'<input type="checkbox" id="mail" name="mail" value="mail" '.$recv_email_checked.'>'."\n".'<label for="mail">답변메일받기</label>';
        }
    }

    echo $option_hidden;
    ?>

    <div class="tbl_frm01 tbl_wrap">
        <table>
        <tbody>
        <?php if ($is_name) { ?>
        <?php } ?>

        <?php if ($is_password) { ?>
        <?php } ?>

        <?php if ($is_email) { ?>
        <?php } ?>

        <?php if ($is_homepage) { ?>
        <?php } ?>

        <?php if ($option) { ?>
        <?php } ?>

        <?php if ($is_category) { ?>
        <?php } ?>
		        <tr>
		         <th scope="row"><div align="center">
              <label for="wr_name">상품명선택<strong class="sound_only">필수</strong></label>
          </div></th>
		          <td class="wr_name"><select name="wr_1">
                    <option>LG</option>
                    <option>SK</option>
                    <option>KT</option>
                  </select></td>
          </tr>
		        <tr>
          <th scope="row"><div align="center">
              <label for="wr_name">이름(상호)<strong class="sound_only">필수</strong></label>
          </div></th>
          <td class="wr_name">
            <input type="text" name="wr_name" value="<?php echo $name ?>" id="wr_name1" required class="frm_input required" size="15" maxlength="15">            </td>
        </tr>
                <tr>
                  <th scope="row"><div align="center">
              <label for="wr_name">생년원일<strong class="sound_only">필수</strong></label>
          </div></th>
                  <td class="wr_name"><input class='quick' type="text" name="wr_2" size="18" style="font-size: 12px; height:20px;" required itemname="생년월일">
주민번호 뒷자리는 해피콜시 확인해주셔야 진행 가능합니다.</td>
                </tr>
                <tr>
                  <th scope="row"><div align="center">
                      <label for="wr_name">휴대폰<strong class="sound_only">필수</strong></label>
                  </div></th>
                  <td class="wr_name">
                    <select name="wr_7" itemname="휴대폰" required >
                      <option value="010">010</option>
                      <option value="011">011</option>
                      <option value="016">016</option>
                      <option value="017">017</option>
                      <option value="018">018</option>
                      <option value="019">019</option>
                    </select>
                    <input name="wr_8" type="text" required class='ed' style="width:35px;border:1px solid #ddd;" maxlength="4" itemname="휴대폰"/>
                    <input name="wr_9" type="text" required class='ed' style="width:35px;border:1px solid #ddd;" maxlength="4" itemname="휴대폰"/></td>
                </tr>
          <tr>
            <th scope="row"><div align="center">
              <label for="wr_name">전화번호<strong class="sound_only">필수</strong></label>
            </div></th>
          <td class="wr_name">
                <select name="wr_5" itemname="휴대폰" required >
				  <option value="010">010</option>
				  <option value="011">011</option>
				  <option value="016">016</option>
				  <option value="017">017</option>
				  <option value="018">018</option>
				  <option value="019">019</option>
			   </select>
		    <input name="wr_6" type="text" required class='ed' style="width:35px;border:1px solid #ddd;" maxlength="4" itemname="휴대폰"/>
		    <input name="wr_10" type="text" required class='ed' style="width:35px;border:1px solid #ddd;" maxlength="4" itemname="휴대폰"/></td>
        </tr>
       

          <tr>
            <th scope="row"><div align="center">
              <label for="wr_name">주소<strong class="sound_only">필수</strong></label>
          </div></th>
            <td class="wr_content"><input class='quick' type="text" name="wr_3" size="60" style="font-size: 12px; height:20px;" required itemname="생년월일"></td>
          </tr>
          <tr>
            <th scope="row"><div align="center">
              <label for="wr_name">이메일<strong class="sound_only">필수</strong></label>
          </div></th>
            <td class="wr_content"><input class='quick' type="text" name="wr_4" size="24" style="font-size: 12px; height:20px;" required itemname="생년월일"></td>
          </tr>
          <tr>
            <th scope="row"><div align="center">
              <label for="wr_content">기타사항<strong class="sound_only">필수</strong></label>
            </div></th>
            <td class="wr_content">
                <?php if($write_min || $write_max) { ?>
                <!-- 최소/최대 글자 수 사용 시 -->
                <p id="char_count_desc">이 게시판은 최소 <strong><?php echo $write_min; ?></strong>글자 이상, 최대 <strong><?php echo $write_max; ?></strong>글자 이하까지 글을 쓰실 수 있습니다.</p>
                <?php } ?>
                <?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출 ?>
                <?php if($write_min || $write_max) { ?>
                <!-- 최소/최대 글자 수 사용 시 -->
                <div id="char_count_wrap"><span id="char_count"></span>글자</div>
                <?php } ?>
            </td>
        </tr>
        </tbody>
        </table>
    </div>

    <div class="btn_confirm">
        <input type="submit" value="작성완료" id="btn_submit" accesskey="s" class="btn_submit">
        <a href="javascript:history.back();" class="btn_cancel">취소</a>
    </div>
    </form>

    <script>
    <?php if($write_min || $write_max) { ?>
    // 글자수 제한
    var char_min = parseInt(<?php echo $write_min; ?>); // 최소
    var char_max = parseInt(<?php echo $write_max; ?>); // 최대
    check_byte("wr_content", "char_count");

    $(function() {
        $("#wr_content").on("keyup", function() {
            check_byte("wr_content", "char_count");
        });
    });

    <?php } ?>
    function html_auto_br(obj)
    {
        if (obj.checked) {
            result = confirm("자동 줄바꿈을 하시겠습니까?\n\n자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.");
            if (result)
                obj.value = "html2";
            else
                obj.value = "html1";
        }
        else
            obj.value = "";
    }

    function fwrite_submit(f)
    {
        <?php echo $editor_js; // 에디터 사용시 자바스크립트에서 내용을 폼필드로 넣어주며 내용이 입력되었는지 검사함   ?>

        var subject = "";
        var content = "";
        $.ajax({
            url: g5_bbs_url+"/ajax.filter.php",
            type: "POST",
            data: {
                "subject": f.wr_subject.value,
                "content": f.wr_content.value
            },
            dataType: "json",
            async: false,
            cache: false,
            success: function(data, textStatus) {
                subject = data.subject;
                content = data.content;
            }
        });

        if (subject) {
            alert("제목에 금지단어('"+subject+"')가 포함되어있습니다");
            f.wr_subject.focus();
            return false;
        }

        if (content) {
            alert("내용에 금지단어('"+content+"')가 포함되어있습니다");
            if (typeof(ed_wr_content) != "undefined")
                ed_wr_content.returnFalse();
            else
                f.wr_content.focus();
            return false;
        }

        if (document.getElementById("char_count")) {
            if (char_min > 0 || char_max > 0) {
                var cnt = parseInt(check_byte("wr_content", "char_count"));
                if (char_min > 0 && char_min > cnt) {
                    alert("내용은 "+char_min+"글자 이상 쓰셔야 합니다.");
                    return false;
                }
                else if (char_max > 0 && char_max < cnt) {
                    alert("내용은 "+char_max+"글자 이하로 쓰셔야 합니다.");
                    return false;
                }
            }
        }

        <?php echo $captcha_js; // 캡챠 사용시 자바스크립트에서 입력된 캡챠를 검사함  ?>

        document.getElementById("btn_submit").disabled = "disabled";

        return true;
    }
    </script>
</section>
<!-- } 게시물 작성/수정 끝 -->