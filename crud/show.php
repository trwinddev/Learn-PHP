<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $ma = $_GET['ma'];
  require '../connect.php';

  $sql = "select * from tin_tuc
  where ma = $ma
  ";
  $ket_qua = mysqli_query($ket_noi, $sql);
  $bai_tin_tuc = mysqli_fetch_array($ket_qua);
  ?>
  <h1>
    <?php echo $bai_tin_tuc['tieu_de']?>
  </h1>
  <img width="200" src="<?php echo $bai_tin_tuc['anh']?>" alt="">
  <p>
    <?php echo nl2br($bai_tin_tuc['noi_dung'])?>
  </p>
</body>
</html>