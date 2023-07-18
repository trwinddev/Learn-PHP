<?php require '../check_admin_login.php' ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
	require '../connect.php';
	$sql = "select orders.*,
	customers.name,
	customers.phone_number,
	customers.address
	from orders
	join customers
	on customers.id = orders.customer_id";
	$result = mysqli_query($connect, $sql);
	 ?>

	 <table border="1" width="100%">
	 	<tr>
	 		<th>Ma</th>
	 		<th>Thoi gian dat</th>
	 		<th>Thong tin nguoi nhan</th>
	 		<th>Thong tin nguoi dat</th>
	 		<th>Trang thai</th>
	 		<th>Tong tien</th>
	 		<th>Xem</th>
	 		<th>Sua</th>
	 	</tr>
	 	<?php foreach ($result as $each): ?>
	 		<tr>
	 			<td><?php echo $each['id'] ?></td>
	 			<td><?php echo $each['created_at'] ?></td>
	 			<td>
	 				<?php echo $each['name_receiver'] ?><br>
	 				<?php echo $each['phone_receiver'] ?><br>
	 				<?php echo $each['address_receiver'] ?>
	 			</td>
	 			<td>
	 				<?php echo $each['name'] ?><br>
	 				<?php echo $each['phone_number'] ?><br>
	 				<?php echo $each['address'] ?>
	 			</td>
	 			<td>
	 				<?php  
	 					switch ($each['status']) {
	 						case '0':
	 							echo "Moi dat";
	 							break;
	 						case '1':
	 							echo "Da duyet";
	 							break;
	 						case '2':
	 							echo "Da huy";
	 							break;	
	 					}
	 				?>
	 			</td>
	 			<td><?php echo $each['total_price'] ?></td>
	 			<td>
	 				<a href="detail.php?id=<?php echo $each['id'] ?>">
	 					Xem
	 				</a>
	 			</td>
	 			<td>
				<a href="update.php?id=<?php echo $each['id'] ?>&status=1">
					Duyệt
				</a>
				<br>
				<br>
				<a href="update.php?id=<?php echo $each['id'] ?>&status=2">
					Huỷ
				</a>
			</td>
	 		</tr>
	 	<?php endforeach ?>
	 </table>
</body>
</html>