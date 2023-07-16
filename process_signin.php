<?php 

$email = $_POST['email'];
$password = $_POST['password'];

require './layout/admin/connect.php';
$sql = "select * from customers
where email = '$email' and password = '$password'";
$result = mysqli_query($connect, $sql);
$numbers_rows = mysqli_num_rows($result);

if($numbers_rows == 1) {
	session_start();
	$each = mysqli_fetch_array($result);
	$_SESSION['id'] = $each['id'];
	$_SESSION['name'] = $each['name'];

	header('location:user.php');
	exit;
}

header('location:signin.php?error=Dang nhap sai roi');