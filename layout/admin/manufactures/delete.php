<?php

if(empty($_GET['id'])) {
  header('location:index.php?error=Phai truyen ma de sua');
}

$id = $_GET['id'];
require '../connect.php';
$sql = "delete from manufactures where id = $id";

mysqli_query($connect, $sql);
mysqli_close($connect);
header('location:index.php?success=Xoa thanh cong');