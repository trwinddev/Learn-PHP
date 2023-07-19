<form method="POST" action="?action=store&controller=sinh_vien">
	Ten
	<input type="text" name="ten">
	<br>
	Lop	
	<select>
		<?php foreach ($lops as $lop): ?>
			<option value="<?php echo $lop['ma'] ?>">
				<?php echo $lop['ten'] ?>
			</option>
		<?php endforeach ?>
	</select>
	<button>Them</button>
</form>