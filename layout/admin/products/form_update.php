<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
</head>
<body>
	<?php 
	$id = $_GET['id'];
	require '../menu.php';
	require '../connect.php';
	$sql = "select * from products where id='$id'";
	$result = mysqli_query($connect, $sql);
	$each = mysqli_fetch_array($result);

	$sql = "select * from manufactures";
	$manufactures = mysqli_query($connect, $sql);
	 ?>
	<form method="POST" action="process_update.php" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $each['id'] ?>">
		 Ten
	 <input type="text" name="name" value="<?php echo $each['name']?>">
	 <br>
	 Doi anh moi
	 <input type="file" name="photo_new">
	 <br>
	 Hoac giu anh cu
	 <img height='100' src="photos/<?php echo $each['photo'] ?>">
	 <input type="hidden" name="photo_old" value="<?php echo $each['photo'] ?>">
	 <br>
	 Gia 
	 <input type="text" name="price" value="<?php echo $each['price']?>">
	 <br>
	 Mo ta
	 <textarea name="description"><?php echo $each['description']?></textarea>
	 <br>
	 Nha san xuat
	 <select name="manufacture_id">
	 	<?php foreach ($manufactures as $manufacture): ?>
	 		<option value="<?php echo $manufacture['id'] ?>"
	 			<?php if($each['manufacture_id'] == $manufacture['id']){?>
	 				selected
	 			<?php } ?>
	 			>
	 			<?php echo $manufacture['name'] ?>
	 		</option>
	 	<?php endforeach ?>
	 </select>
	 <br>
	 <button>Sua</button>
	</form>
</body>
</html>