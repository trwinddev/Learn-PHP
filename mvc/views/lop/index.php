<h1>Danh sach lop</h1>

<a href="?action=create&controller=lop">Them</a>

<table border="1" width="100%">
	<tr>
		<th>Ma</th>
		<th>Ten</th>
		<th>Sua</th>
		<th>Xoa</th>
	</tr>
	<?php foreach ($result as $each): ?>
		<tr>
			<td><?php echo $each['ma'] ?></td>
			<td><?php echo $each['ten'] ?></td>
			<td>
				<a href="?action=edit&controller=lop&ma=<?php echo $each['ma'] ?>">Sua</a>
			</td>
			<td>
				<a href="?action=delete&controller=lop&ma=<?php echo $each['ma'] ?>">Xoa</a>
			</td>
		</tr>
	<?php endforeach ?>
</table>