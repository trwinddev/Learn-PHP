<?php 
session_start();
if(empty($_SESSION['id'])) {
	header('location:signin.php?error=Dang nhap di ban');
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	Day la trang nguoi dung. Xin chao ban <?php echo $_SESSION['name'] ?>
	<a href="signout.php">Dang xuat</a>
</body>
</html>