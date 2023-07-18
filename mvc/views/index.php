<h1>Danh sach sinh vien</h1>

<a href="?action=create">Them sinh vien</a>
<table border="1" width="100%">
	<tr>
		<th>Ma</th>
		<th>Ten sinh vien</th>
		<th>Sua</th>
		<th>Xoa</th>
	</tr>
	<?php foreach ($result as $each): ?>
		<tr>
			<td><?php echo $each['ma'] ?></td>
			<td><?php echo $each['ten'] ?></td>
			<td>
				<a href="?action=edit&ma=<?php echo $each['ma'] ?>">
					Sua
				</a>
			</td>
			<td>
				<a href="?action=delete&ma=<?php echo $each['ma'] ?>">
					Xoa
				</a>
			</td>
		</tr>
	<?php endforeach ?>
</table>