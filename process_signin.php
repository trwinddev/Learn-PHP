<?php 

$email = $_POST['email'];
$password = $_POST['password'];
if(isset($_POST['remember'])) {
	$remember = true;
} else {
	$remember = false;
}

require './layout/admin/connect.php';
$sql = "select * from customers
where email = '$email' and password = '$password'";
$result = mysqli_query($connect, $sql);
$numbers_rows = mysqli_num_rows($result);

if($numbers_rows == 1) {
	echo "Dang nhap thanh cong";
	session_start();
	$each = mysqli_fetch_array($result);
	$id = $each['id'];
	$_SESSION['id'] = $each['id'];
	$_SESSION['name'] = $each['name'];
	if($remember) {
		$token = uniqid('user_', true);
		$sql = "update customers
		set 
		token = '$token'
		where
		id = '$id'
		";
		mysqli_query($connect, $sql);
		setcookie('remember', $token, time() + 60*60*24*30);
	}
}else{
	echo "Dang nhap sai roi";
}
