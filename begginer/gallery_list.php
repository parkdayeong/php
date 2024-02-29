<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php include 'gnb.php'; ?>
  <div class="wrapper">
    <?php
      $d = dir('./gallery');
      while($file = $d->read()){
        if($file!= '.' && $file!= '..'){
          echo $file;
          echo '<img src="./gallery/'.$file.'" alt="" width="200px;height:200px;">';
        }
      }


    ?>
  </div>
</body>

</html>