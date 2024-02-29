<?php
  include 'gnb.php';


  echo "<pre>";
  print_r($_FILES);
  echo "</pre>";


  // echo $_FILES['photo']['name'];

  $file_name = $_FILES['photo']['name'];
  $arr = explode('.', $file_name); // $arr = ['aaa', 'jpg'];
  $ext = end($arr);
  
  if($ext == 'jpg' or $ext == 'png' || $ext == 'PNG' || $ext == 'JPG'){
    copy($_FILES['photo']['tmp_name'], "./gallery/".$_FILES['photo']['name']);
    echo "
      <script>
        alert('정상적으로 이미지가 업로드 되었습니다.');
        self.location.href = './gallery_list.php';
      </script>
    ";
  }  
  else{
    if($_FILES['photo']['error'] == 4){
      echo "
      <script>
        alert('파일을 등록해주세요');
        window.history.back();
      </script>";
    } else{
      echo "
      <script>
        alert('이미지포맷 png,jpg만 업로드가 가능합니다.');
        window.history.back();
      </script>";
    }
  }

// 파일퍼미션 707 777 쓰기권한
?>