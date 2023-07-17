<?php 
session_start();
if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
} else {
    $cart = array();
}
$sum = 0;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<table border="1" width="100%">
		<tr>
			<th>Anh</th>
			<th>Ten san pham</th>
			<th>Gia</th>
			<th>So luong</th>
			<th>Tong tien</th>
			<th>Hanh dong</th>
		</tr>
		<?php if (!empty($cart)): ?>
			<?php foreach ($cart as $id => $each): ?>
				 <tr>
				 	<td><img height="200" src="../PHP/layout/admin/products/photos/<?php echo $each['photo'] ?>"></td>
				 	<td><?php echo $each['name'] ?></td>
				 	<td><?php echo $each['price'] ?></td>
				 	<td>
				 		<a href="update_quantity_in_cart.php?id=<?php echo $id ?>&type=decre">-</a>
				 			<?php echo $each['quantity'] ?>
				 		<a href="update_quantity_in_cart.php?id=<?php echo $id ?>&type=incre">+</a>
				 	</td>
				 	<td><?php 
				 		$result = $each['price'] * $each['quantity'];
				 		echo $result;
				 		$sum += $result;
				 ?></td>
				 	<td>
				 		<a href="delete_from_cart.php?id=<?php echo $id ?>">
				 			Xoa
				 		</a>
				 	</td>
				 </tr>
			<?php endforeach ?>
		<?php endif ?>
	</table>
	<h2>Tong hoa don: <?php echo $sum ?></h2>
	<?php 
	$id = $_SESSION['id'];
	require './layout/admin/connect.php';
	$sql = "select * from customers
	where id = '$id'";
	$result = mysqli_query($connect, $sql);
	$each = mysqli_fetch_array($result);
	?>
	<form method="POST" action="process_checkout.php">
		Ten nguoi nhan
		<input type="text" name="name_receiver" value="<?php echo $each['name'] ?>">
		<br>
		Sdt nguoi nhan
		<input type="text" name="phone_receiver" value="<?php echo $each['phone_number'] ?>">
		<br>
		Dia chi nguoi nhan
		<input type="text" name="address_receiver" value="<?php echo $each['address'] ?>">
		<br>
		<button>Dat hang</button>
	</form>
</body>
</html>
