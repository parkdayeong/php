<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>글등록 form</title>
  <script src="65-check.js"></script>
</head>

<body>
  <form method="post" action="65-input_ok.php" name="boardform">
    <label for="">글제목</label>
    <input type="text" name="subject" class="name_input"><br>
    <label for="">글내용</label>
    <textarea name="content" id="content" cols="30" rows="10"></textarea><br>
    <button id="btn">글등록하기</button>
  </form>

</body>

</html>