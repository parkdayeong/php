<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>csv 파일 업로드</title>
</head>

<body>
  <form action="67-csv_upload.php" method="post" enctype="multipart/form-data" name="uform">
    <label for="">CSV파일을 업로드 해주세요.</label><br>
    <input type="file" name="csv" id="csv"><br>
    <button id="btn">확인</button>
  </form>

  <script>
  const btn = document.querySelector('#btn');
  const csv = document.querySelector('#csv');
  btn.addEventListener('click', function(e) {
    e.preventDefault();
    if (csv.value == '') {
      alert('파일을 선택해주세요.');
      return false;
    }
    document.uform.submit();
  })
  </script>
</body>

</html>