<h3>Sobre</h3>
<hr>
<form method="POST" enctype="multipart/form-data">
<?php if(!empty($about)): ?>
	<input type="number" name="up" value="1" hidden="">
	<label>
		Adicionar Fotos 
		(<span style="color: red; font-size: 10px;">Tipo: JPG/JPEG - Tamanho: 600px/500px</span>)
	</label>
	<input type="file" name="image" class="form-control">
	<label>Descrição</label>
	<textarea class="form-control" id="conteudo" name="description" required=""><?=$about['description']; ?></textarea>
<?php else: ?>
	<label>
		Adicionar Fotos 
		(<span style="color: red; font-size: 10px;">Tipo: JPG/JPEG - Tamanho: 600px/500px</span>)
	</label>
	<input type="file" name="image" multiple="" class="form-control">
	<label>Descrição</label>
	<textarea class="form-control" id="conteudo" name="description" required=""></textarea>
<?php endif; ?>
	<br>
	<button class="btn btn-success carregando">Salvar</button>
</form>
<script src="<?=BASE; ?>assets/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
  //EDITOR
  CKEDITOR.replace('conteudo');
</script>