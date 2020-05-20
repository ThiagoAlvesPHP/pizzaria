<h3>Descrição</h3>
<hr>
<form method="POST" enctype="multipart/form-data">
	<?php if(!empty($get)): ?>
		<input type="number" name="up" value="<?=$get['id']; ?>" hidden="">
		<label>
			Adicionar Fotos 
			(<span style="color: red; font-size: 10px;">Tipo: JPG/JPEG - Tamanho: 400px/300px</span>)
		</label>
		<input type="file" name="image" class="form-control">
		<label>Texto</label>
		<textarea class="form-control" id="conteudo" name="texto" required=""><?=$get['texto']; ?></textarea>
	<?php else: ?>
		<label>
			Adicionar Fotos 
			(<span style="color: red; font-size: 10px;">Tipo: JPG/JPEG - Tamanho: 400px/300px</span>)
		</label>
		<input type="file" name="image" class="form-control" required="">
		<label>Texto</label>
		<textarea class="form-control" id="conteudo" name="texto" required=""></textarea>
	<?php endif; ?>
	<br>
	<button class="btn btn-success">Salvar</button>
</form>

<script src="<?=BASE; ?>assets/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
  //EDITOR
  CKEDITOR.replace('conteudo');
</script>