<a href="?action=create">Them</a>
<table border="1" width="100%">
  <tr>
    <th>Ma</th>
    <th>Ho ten</th>
    <th>Sua</th>
    <th>Xoa</th>
  </tr>
  <?php foreach($arr as $each):?>
    <tr>
      <td><?php echo $each->get_ma()?></td>
      <td><?php echo $each->get_ho_ten()?></td>
      <td>
       <a href="?action=edit&ma=<?php echo $each->get_ma()?>">
        Sua
       </a>
      </td>
      <td>
        <a href="?action=delete&ma=<?php echo $each->get_ma()?>">
          Xoa
        </a>
      </td>
    </tr>
  <?php endforeach;?>
</table>