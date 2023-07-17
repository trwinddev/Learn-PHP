<?php 
session_start();
if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
} else {
    $cart = array();
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
				 	<td><?php echo $each['price'] * $each['quantity'] ?></td>
				 	<td>
				 		<a href="delete_from_cart.php?id=<?php echo $id ?>">
				 			Xoa
				 		</a>
				 	</td>
				 </tr>
			<?php endforeach ?>
		<?php endif ?>
	</table>
</body>
</html>
