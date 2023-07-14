<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  Day la khu vuc quan li nha san xuat
  <br>
  <a href="form_insert.php">
    Them
  </a>
  <?php
  include '../menu.php';
  require '../connect.php';
  $sql = "select * from manufactures";
  $result = mysqli_query($connect, $sql);
  ?>
  <table border="1" width="100%">
    <tr>
      <th>Ma</th>
      <th>Ten</th>
      <th>Dia chi</th>
      <th>Dien thoai</th>
      <th>Anh</th>
      <th colspan="2">Action</th>
    </tr>
    <?php foreach ($result as $each): ?>
      <tr>
        <td><?php echo $each['id']?></td>
        <td><?php echo $each['name']?></td>
        <td><?php echo $each['address']?></td>
        <td><?php echo $each['phone']?></td>
        <td>
          <img height="200" src="<?php echo $each['photo']?>" alt="">
        </td>
        <td><a href="form_update.php?id=<?php echo $each['id']?>">
          Sua
        </a></td>
        <td><a href="delete.php?id=<?php echo $each['id']?>">
          Xoa
        </a></td>
      </tr>
    <?php endforeach?>
  </table>
</body>
</html>