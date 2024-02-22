<?
$g5_path = "/"; // 그누보드가 있는 상대경로를 적어줌
?>
<script language="javascript">
var char_min = parseInt(<?=$write_min?>); 
var char_max = parseInt(<?=$write_max?>); 
</script>

<style type="text/css">
select {
	border: 1px solid #333333;
	color: #333333;
}
.quick    { border: 1px solid #999999;
}
.stx    { border: 1px solid #3e4a5a;}
.ed {border: 2px solid #cccccc;
            background-color: #ededec; font-family:돋움;}
.style7 {color: #000000}

tr,td { border-top: 1px solid #e4e4e4;}
.style10 {color: #FF0000}
</style>

		<form name=frm method=post action="/bbs/write_update_test.php" onsubmit="return checkFrm(this);">
		<input type=hidden name=w        value="">
		<input type=hidden name=bo_table value="online">
		<input type=hidden name=wr_id    value="">
		<input type=hidden name=sca      value="">
		<input type=hidden name=sfl      value="">
		<input type=hidden name=stx      value="">
		<input type=hidden name=spt      value="">
		<input type=hidden name=sst      value="">
		<input type=hidden name=sod      value="">
		<input type=hidden name=s    value="s">
		<input type=hidden name=wr_subject  value="빠른 상담 신청">
		<input type=hidden name=wr_content  value="빠른 상담 신청">
        <input type=hidden name="wr_1"  value="">
			<table WIDTH="550" border=0 cellpadding=0 cellspacing=0>
			<tr bgcolor="#F5F5F5">
			  <td height=36 colspan="2" style="padding-left:8px;"><h2>간단신청서 </h2></td>
			  <td width="359" bgcolor="#F5F5F5"> <div align="right"><span class="style10">*</span> 표시는 필수 입력입니다. </div></td>
			</tr>
			<tr>
				<td  width=84 height=36 bgcolor="#F5F5F5" style="padding-left:8px;"><div class="style7">
				  <div align="center"><span class="style10">*</span>상품명선택</div>
				</div></td>
			  <td colspan="2" style="padding-left:8px;"><select name="wr_1">
			    <option>LG</option>
				<option>SK</option>
				<option>KT</option>
		      </select> </td>
			</tr>
			<tr>
			  <td  width=84 height=36 bgcolor="#F5F5F5" style="padding-left:8px;"><div class="style7">
				  <div align="center"><span class="style10">*</span>이름(상호)</div>
				</div></td>
			  <td colspan="2" style="padding-left:8px;"><input class='quick' type="text" name="wr_name" size="18" style="font-size: 12px; height:20px;" required itemname="이름"></td>
			  </tr>
			<tr>
			  <td  width=84 height=36 bgcolor="#F5F5F5" style="padding-left:8px;"><div class="style7">
				  <div align="center"><span class="style10">*</span>생년월일</div>
				</div></td>
			  <td colspan="2" style="padding-left:8px;"><input class='quick' type="text" name="wr_2" size="18" style="font-size: 12px; height:20px;" required itemname="생년월일">
주민번호 뒷자리는 해피콜시 확인해주셔야 진행 가능합니다. </td>
			  </tr>
			<tr>
			  <td height=36 bgcolor="#F5F5F5"><div class="style7">
			    <div align="center"><span class="style10">*</span>휴대폰</div>
			  </div></td>
			  <td colspan="2" style="padding-left:8px;"><select name="wr_7" style="height:20px" itemname="휴대폰" required >
				  <option value="010">010</option>
				  <option value="011">011</option>
				  <option value="016">016</option>
				  <option value="017">017</option>
				  <option value="018">018</option>
				  <option value="019">019</option>
			   </select>-
		    <input name="wr_8" type="text" required class='ed' style="width:32px;height:20px;border:1px solid #ddd;" maxlength="4" itemname="휴대폰"/>-
		    <input name="wr_9" type="text" required class='ed' style="width:32px;height:20px;border:1px solid #ddd;" maxlength="4" itemname="휴대폰"/></td>
			  </tr>
			<tr>
			  <td height=36 bgcolor="#F5F5F5"><div class="style7">
			    <div align="center">전화번호</div>
			  </div></td>
			  <td colspan="2" style="padding-left:8px;"><select name="wr_5" style="height:20px" itemname="휴대폰" required >
				  <option value="010">010</option>
				  <option value="011">011</option>
				  <option value="016">016</option>
				  <option value="017">017</option>
				  <option value="018">018</option>
				  <option value="019">019</option>
			   </select>-
		    <input name="wr_6" type="text" required class='ed' style="width:32px;height:20px;border:1px solid #ddd;" maxlength="4" itemname="휴대폰"/>-
		    <input name="wr_10" type="text" required class='ed' style="width:32px;height:20px;border:1px solid #ddd;" maxlength="4" itemname="휴대폰"/></td>
			  </tr>
			<tr>
			  <td height=36 bgcolor="#F5F5F5"><div class="style7">
			    <div align="center"><span class="style10">*</span>주소</div>
			  </div></td>
			  <td colspan="2" style="padding-left:8px;"><input class='quick' type="text" name="wr_3" size="60" style="font-size: 12px; height:20px;" required itemname="생년월일"></td>
			  </tr>
			<tr>
			  <td height=36 bgcolor="#F5F5F5"><div class="style7">
			    <div align="center"><span class="style10">*</span>이메일</div>
			  </div></td>
			  <td colspan="2" style="padding-left:8px;"><input class='quick' type="text" name="wr_4" size="24" style="font-size: 12px; height:20px;" required itemname="생년월일"></td>
			  </tr>
			<tr>
			  <td width=84 height=36 bgcolor="#F5F5F5" style="padding-left:8px;"><div class="style7">
			    <div align="center">기타사항</div>
			  </div></td>
			  <td colspan="2" style="padding-left:8px;"><input class='quick' type="text" name="wr_content" size="60" style="font-size: 12px; height:40px;" required itemname="메모"></td>
			  </tr>
			<tr align="center">
			  <td height="30" colspan="4"><div align="center">
		          <input name="image" type=image src="<?php echo G5_URL ?>/theme/company/img/tyt04_bt02.gif" alt="상담신청" >
	            </div>	</td>
			  </tr>
          </table>
		</form>

<!--//-->
