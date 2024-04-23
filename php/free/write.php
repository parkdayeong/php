<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>등록</title>
  <style>
  table {
    border-collapse: collapse
  }
  </style>
</head>

<body>
  <!-- content -->
  <form action="write_proc.php" name="frm" method="post" enctype="multipart/form-data">
    <table border='1'>
      <tr>
        <th>작업요청일</th>
        <td>
          <input type="date" name="start_date" value="">
        </td>
      </tr>
      <tr>
        <th>클라이언트</th>
        <td>
          <input type="text" name="co_name" value="">
        </td>
      </tr>
      <tr>
        <th>작업내용</th>
        <td>
          <input type="text" name="memo" value="">
        </td>
      </tr>
      <tr>
        <th>마감일</th>
        <td>
          <input type="date" name="end_date" value="">
        </td>
      </tr>
      <tr>
        <th>진행사항</th>
        <td>
          <label> <input type="radio" name="progress" value="완료"> 완료</label>
          <label><input type="radio" name="progress" value="작업중"> 작업중</label>
        </td>
      </tr>
      <tr>
        <th>총견적</th>
        <td>
          <input type="number" name="estimate" value="" />
        </td>
      </tr>
      <tr>
        <th>지급액</th>
        <td>
          <input type="number" name="pay_amount" value="" />
        </td>
      </tr>
      <tr>
        <th>지급완료일</th>
        <td>
          <input type="date" name="pay_date" value="" />
        </td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" value="저장"></td>
      </tr>
    </table>
  </form>

  <!-- <script>
  function CheckForm() {
    if (frm.name.value == '') {
      frm.name.focus();
      alert('이름을입력해주세요');
      return false;
    } else if (frm.age.value == '') {
      frm.age.focus();
      alert('나이을입력해주세요');
      return false;
    }
  }
  </script> -->
</body>

</html>