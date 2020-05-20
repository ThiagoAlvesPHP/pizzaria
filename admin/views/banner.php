<h3>Banner</h3>
<hr>
<form method="POST" enctype="multipart/form-data">
	<?php if(!empty($get)): ?>
		<img class="img-responsive" src="<?=BASE.$url.$get['image']; ?>">
		<hr>
		<input type="number" name="up" value="<?=$get['id']; ?>" hidden="">
		<label>
			Adicionar Fotos 
			(<span style="color: red; font-size: 10px;">Tipo: JPG/JPEG - Tamanho: 400px/300px</span>)
		</label>
		<input type="file" name="image" class="form-control">
	<?php else: ?>
		<input type="text" name="p" value="1" hidden="">
		<label>
			Adicionar Fotos 
			(<span style="color: red; font-size: 10px;">Tipo: JPG/JPEG - Tamanho: 400px/300px</span>)
		</label>
		<input type="file" name="image" class="form-control" required="">
	<?php endif; ?>
	<br>
	<button class="btn btn-success">Salvar</button>
</form>