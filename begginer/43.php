<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>폼입려을 통한 구구단 출력</title>
  <style>
  table {
    border: 1px solid black;
    border-collapse: collapse;
  }

  tr,
  td {
    border: 1px solid black;
  }

  td {
    padding: 5px;
  }

  td:last-child {
    width: 30px;
  }
  </style>

</head>

<body>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" name="form1" method="post" autocomplete="off"><label for="">출력하고자하는
      단을 입력바랍니다.</label><br><input type="text" name="dan" id="dan"><button id="submit_btn">구구단출력</button></form><?php // if(isset($_GET['dan']) && $_GET['dan']!= ''){
  //   if(is_numeric($_GET['dan'])){
  //   for($i = 1; $i <= 9; $i++){
  //     echo $_GET['dan'], 'x'. $i . '=' . $_GET['dan'] * $i .'<br>';
  //   }} else{
  //     echo "숫자를 입력해주세요";
  //   }
  // }

  if(isset($_POST['dan'])) {
    echo '<table id="tb_gugu">';
    for($i=1; $i <=9; $i++) {
      echo '<tr>';
      echo '<td>'.$_POST['dan'].'x'.$i.'</td>';
      echo '<td> = </td>';
      echo '<td>'.$_POST['dan'] * $i .'</td>';
      echo "</tr>";
    }
    echo "</table>";
  }

  ?>

  <!-- script -->
  <script>
  const btn = document.querySelector('#submit_btn');

  btn.addEventListener('click', function(e) {
      const dan = document.querySelector('#dan');
      e.preventDefault();
      if (dan.value == '') {
        alert('입력값이 없습니다.');
        document.querySelector('#tb_gugu').style.display = 'none';
        dan.focus();

        return false;
      } else if (isNaN(dan.value)) {
        alert('숫자를 입력해주세요.');
        document.querySelector('#tb_gugu').style.display = 'none';
        dan.focus();
        dan.value = '';
        return false;
      }

      // document.querySelector('.tb_gugu').style.display = 'table';
      document.form1.submit();

    }

  );
  </script>
</body>

</html>