<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone_number = $_POST['phone_number'];
$address = $_POST['address'];

require './layout/admin/connect.php';
$sql = "select count(*) from customers
where email = '$email'";
$result = mysqli_query($connect, $sql);
$numbers_rows = mysqli_fetch_array($result)['count(*)'];

if($numbers_rows == 1) {
	session_start();
	header('location:signup.php?error=Email da ton tai');
	exit;
}

$sql = "insert into customers(name, email, password, phone_number, address)
value ('$name','$email','$password', '$phone_number', '$address')";
mysqli_query($connect, $sql);

$sql = "select id from customers
where email = '$email'";
$result = mysqli_query($connect, $sql);
$id = mysqli_fetch_array($result)['id'];
mysqli_query($connect, $sql);
session_start();
$_SESSION['id'] = $id;
$_SESSION['name'] = $name; 

mysqli_close($connect);
