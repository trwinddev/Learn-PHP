<h1>Danh sach sinh vien</h1>

<a href="?action=create&controller=sinh_vien">Them</a>

<table border="1" width="100%">
	<tr>
		<th>Ma</th>
		<th>Ten</th>
		<th>Ten lop</th>
		<th>Sua</th>
		<th>Xoa</th>
	</tr>
	<?php foreach ($result as $each): ?>
		<tr>
			<td><?php echo $each['ma'] ?></td>
			<td><?php echo $each['ten'] ?></td>
			<td><?php echo $each['ten_lop'] ?></td>
			<td>
				<a href="?action=edit&controller=sinh_vien&ma=<?php echo $each['ma'] ?>">Sua</a>
			</td>
			<td>
				<a href="?action=delete&controller=sinh_vien&ma=<?php echo $each['ma'] ?>">Xoa</a>
			</td>
		</tr>
	<?php endforeach ?>
</table>