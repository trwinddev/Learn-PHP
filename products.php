<?php
require '../PHP/layout/admin/connect.php';
$sql = "select * from products";
$result = mysqli_query($connect, $sql);
?>

<style>
	#giua {
		display: flex;
	}
	.tung_san_pham {
		width: 33%;
		border: 1px solid black;
		float: left;
	}
</style>

<div id="giua">
	<?php foreach ($result as $each): ?>
		<div class="tung_san_pham">
			<h1><?php echo $each['name'] ?></h1>
			<img height="200" src="../PHP/layout/admin/products/photos/<?php echo $each['photo'] ?>">
			<p><?php echo $each['price'] ?></p>
			<a href="product_detail.php?id=<?php echo $each['id'] ?>">
				Xem chi tiet >>
			</a>
		</div>
	<?php endforeach ?>
</div>