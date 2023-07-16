<?php
require '../PHP/layout/admin/connect.php';
$id = $_GET['id'];
$sql = "select * from products 
where id = '$id'";
$result = mysqli_query($connect, $sql);
$each = mysqli_fetch_array($result);
?>
 <style>
    #tong {
      width: 100%;
      height: 700px;
      background: black;
    }
    #tren {
      width: 100%;
      height: 20%;
      background: pink;
    }
    #giua {
      width: 100%;
      height: 70%;
      background: red;
    }
    #duoi {
      width: 100%;
      height: 10%;
      background: purple;
    }
  </style>
<?php include './menu.php' ?>
<div id="giua">
	<h1><?php echo $each['name'] ?></h1>
	<img height="200" src="../PHP/layout/admin/products/photos/<?php echo $each['photo'] ?>">
	<p><?php echo $each['price'] ?></p>
	<p><?php echo $each['description'] ?></p>
</div>
<?php include './footer.php' ?>
