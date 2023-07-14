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
  require "../connect.php";
  $trang = 1;
  if(isset($_GET['trang'])) {
    $trang = $_GET['trang'];
  }
  $tim_kiem = '';
  if(isset($_GET['tim_kiem'])) {
    $tim_kiem = $_GET['tim_kiem'];
  }

  $sql_so_tin_tuc = "select count(*) from tin_tuc
  where
  tieu_de like '%$tim_kiem%'";
  $mang_so_tin_tuc = mysqli_query($ket_noi,$sql_so_tin_tuc);
  $ket_qua_so_tin_tuc = mysqli_fetch_array($mang_so_tin_tuc);
  $so_tin_tuc = $ket_qua_so_tin_tuc['count(*)'];

  $so_tin_tuc_tren_1_trang = 2;
  $so_trang = ceil($so_tin_tuc / $so_tin_tuc_tren_1_trang);
  $bo_qua = $so_tin_tuc_tren_1_trang * ($trang - 1);

  $sql = "select * from tin_tuc
    where
    tieu_de like '%$tim_kiem%'
    limit $so_tin_tuc_tren_1_trang offset $bo_qua";
  $ket_qua = mysqli_query($ket_noi, $sql);
  ?>

  <table border="1" width="100%">
    <caption>
      <form>
        <input type="search" name="tim_kiem" value="<?php echo $tim_kiem?>">
      </form>
    </caption>
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
  <?php
  for ($i=1; $i <= $so_trang ; $i++) { ?>
    <a href="?trang=<?php echo $i?>&tim_kiem=<?php echo $tim_kiem?>">
      <?php echo $i?>
    </a>
  <?php }?>
</body>
</html>