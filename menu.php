<div id="tren">
  <ol>
      <li>
          <a href="index.php">Trang chu</a>
      </li>
      <?php if(empty($_SESSION['id'])) { ?>
      <li>
          <a href="signin.php">Dang nhap</a>
      </li>
      <li>
          <a href="signup.php">Dang ky</a>
      </li>
    <?php }else{ ?>
       <li>
          <a href="view_cart.php">Xem gio hang</a>
      </li>
      <li>
        <?php echo $_SESSION['name'] ?>
          <a href="signout.php">Dang xuat</a>
      </li>
    <?php } ?>
  </ol>
</div>
