<?php require '../check_admin_login.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  require '../menu.php';
  require '../connect.php';
  $sql = "select
  products.*,
  manufactures.name as manufacture_name
  from products
  join manufactures on products.manufacture_id = manufactures.id";
  $result = mysqli_query($connect, $sql);
  ?>
  <h1>Quan li san pham</h1>
  <a href="form_insert.php">Them</a>
  <table border="1" width="100%">
    <tr>
      <th>Ma</th>
      <th>Ten</th>
      <th>Anh</th>
      <th>Gia</th>
      <th>Ten nha san xuat</th>
      <th></th>
    </tr>
    <?php foreach ($result as $each): ?>
      <tr>
        <td><?php echo $each['id'] ?></td>
        <td><?php echo $each['name'] ?></td>
        <td>
          <img height="200" src="photos/<?php echo $each['photo'] ?>">
        </td>
        <td><?php echo $each['price'] ?></td>
        <td><?php echo $each['manufacture_name'] ?></td>
        <td>
          <a href="form_update.php?id=<?php echo $each['id'] ?>">Sua</a>
        </td>
        <td>
          <a href="delete.php?id=<?php echo $each['id'] ?>">Xoa</a>
        </td>
      </tr>
    <?php endforeach ?>
  </table>
</body>
</html>