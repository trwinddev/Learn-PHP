<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Trang chủ</h1>
  <a href="form_insert.php">Thêm bài viết</a>
  <?php
  $ket_noi = mysqli_connect('localhost', 'root', '', 'j2school');
  $sql = "select * from tin_tuc";
  $ket_qua = mysqli_query($ket_noi, $sql);
  ?>

  <table border="1" width="100%">
    <tr>
      <th>Mã</th>
      <th>Tiêu đề</th>
      <th>Ảnh</th>
      <th colspan="2">Action</th>

    </tr>
    <?php foreach ($ket_qua as $tung_bai_tin_tuc ) { ?>
      <tr>
        <td><?php echo $tung_bai_tin_tuc['ma'] ?></td>
        <td>
          <a href="show.php?ma=<?php echo $tung_bai_tin_tuc['ma'] ?>"><?php echo $tung_bai_tin_tuc['tieu_de'] ?></a>
        </td>
        <td><img width="200" src="<?php echo $tung_bai_tin_tuc['anh'] ?>"></td>
        <td>
          <a href="form_update.php?ma=<?php echo $tung_bai_tin_tuc['ma']?>">
            Sửa
          </a>
        </td>
        <td>
          <a href="delete.php?ma=<?php echo $tung_bai_tin_tuc['ma']?>">
            Xóa
          </a>
        </td>
      </tr>
    <?php } ?>
  </table>
</body>
</html>