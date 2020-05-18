<h3>Editar</h3>
<hr>
<form method="POST" enctype="multipart/form-data">
	<label>
		Adicionar Fotos 
		(<span style="color: red; font-size: 10px;">Tipo: JPG/JPEG - Tamanho: 400px/300px</span>)
	</label>
	<input type="file" name="image" class="form-control">
	<label>Título</label>
	<input type="text" name="title" value="<?=$menu['title']; ?>" class="form-control" required="">
	<label>Descrição</label>
	<textarea class="form-control" id="conteudo" name="description" required=""><?=$menu['description']; ?></textarea>

	<br>
	<button class="btn btn-success carregando">Salvar</button>
</form>

<script src="<?=BASE; ?>assets/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
  //EDITOR
  CKEDITOR.replace('conteudo');
</script>