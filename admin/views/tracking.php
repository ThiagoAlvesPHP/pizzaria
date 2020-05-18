<?php if($_GET['tracking'] == 1): ?>
<h3>Rastreamento Facebook</h3>
<?php else: ?>
<h3>Rastreamento Google</h3>
<?php endif; ?>
<hr>

<form method="POST">
	<?php if(!empty($script)): ?>
		<input type="number" name="id" value="<?=$script['id']; ?>" hidden="">
		<label>Script</label>
		<textarea name="script" style="height: 150px;" class="form-control"><?=$script['script']; ?></textarea>
		<input type="number" name="up" value="1" hidden="">
	<?php else: ?>
		<label>Script</label>
		<textarea name="script" style="height: 150px;" class="form-control"></textarea>
	<?php endif; ?>
	<br>
	<button class="btn btn-success">Salvar</button>
</form>