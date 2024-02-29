<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>이미지업로드</title>
  <script src="upload.js" defer></script>
</head>

<body>
  <?php include 'gnb.php'; ?>

  <form action="gallery_upload_form.php" name="upload_form" method="post" enctype="multipart/form-data">
    이미지업로드 : <input type="file" name="photo" value="">
    <!-- 이미지업로드 : <input type="file" name="photo2"> -->

    <input type="submit" id="upload_btn" value="업로드확인">
  </form>
</body>

</html>