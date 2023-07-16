<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
</head>
<body>
	<?php 
	if(isset($_GET['error'])){	
		echo $_GET['error'];
	}
	?>
	<form method="POST" action="process_signup.php">
		<h1>Form dang ky</h1>
		Ten
		<input type="text" name="name">
		<br>
		Email
		<input type="email" name="email">
		<br>
		Mat khau
		<input type="password" name="password">
		<br>
		<button>Dang ky</button>
	</form>
</body>
</html>