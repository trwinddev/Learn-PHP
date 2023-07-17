<?php 
session_start();
if(isset($_COOKIE['remember'])) {
	$token = $_COOKIE['remember'];
	require './layout/admin/connect.php';
	$sql = "select * from customers
	where token = '$token'
	limit 1";
	$result = mysqli_query($connect,$sql);
	$numbers_rows = mysqli_num_rows($result);
	if($numbers_rows == 1) {
		$each = mysqli_fetch_array($result);
		$_SESSION['id'] = $each['id'];
		$_SESSION['name'] = $each['name'];
	}
}
if(isset($_SESSION['id'])) {
	header('location:user.php');
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
	<h1>Dang nhap</h1>
	<form method="POST" action="process_signin.php">
		Email
		<input type="email" name="email">
		<br>
		Mat khau
		<input type="text" name="password">
		<br>
		Ghi nho dang nhap
		<input type="checkbox" name="remember">
		<br>
		<button>Dang nhap</button>
	</form>
</body>
</html>