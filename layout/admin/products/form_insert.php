<?php require '../check_admin_login.php' ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
</head>
<body>
	<?php 
	require '../menu.php';
	require '../connect.php';
	$sql = "select * from manufactures";
	$result = mysqli_query($connect, $sql);
	 ?>
	<form method="POST" action="process_insert.php" enctype="multipart/form-data">
		 Ten
	 <input type="text" name="name">
	 <br>
	 Anh
	 <input type="file" name="photo">
	 <br>
	 Gia 
	 <input type="text" name="price">
	 <br>
	 Mo ta
	 <textarea name="description"></textarea>
	 <br>
	 Nha san xuat
	 <select name="manufacture_id">
	 	<?php foreach ($result as $each): ?>
	 		<option value="<?php echo $each['id'] ?>">
	 			<?php echo $each['name'] ?>
	 		</option>
	 	<?php endforeach ?>
	 </select>
	 <br>
	 <button>Them</button>
	</form>
</body>
</html>