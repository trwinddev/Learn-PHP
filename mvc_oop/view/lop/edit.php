<form action="?action=update" method="post">
  <input type="hidden" value="<?php echo $each->get_ma()?>">
  Ho
  <input type="text" name="ho" value="<?php echo $each->get_ho()?>">
  <br>
  Ten
  <input type="text" name="ten" value="<?php echo $each->get_ten()?>">
  <br>
  <button>Sua</button>
</form>