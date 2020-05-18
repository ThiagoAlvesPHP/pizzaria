<h3>Cardápio</h3>
<hr>
<div class="row">
	<div class="col-sm-6">
		<form method="POST" enctype="multipart/form-data">
			<label>
				Adicionar Fotos 
				(<span style="color: red; font-size: 10px;">Tipo: JPG/JPEG - Tamanho: 400px/300px</span>)
			</label>
			<input type="file" name="image" class="form-control" required="">
			<label>Título</label>
			<input type="text" name="title" class="form-control" required="">
			<label>Descrição</label>
			<textarea class="form-control" id="conteudo" name="description" required=""></textarea>

			<br>
			<button class="btn btn-success carregando">Salvar</button>
		</form>
	</div>
	<div class="col-sm-6">
		<div class="table table-responsive">
			<table class="table table-hover">
			    <thead>
			      <tr>
			        <th>IMG</th>
			        <th>Título</th>
			        <th>Ação</th>
			      </tr>
			    </thead>
			    <?php foreach($menu as $m): ?>
			    <tbody>
			      <tr>
			        <td width="50"><img width="30" src="<?=BASE.$url.$m['image']; ?>"></td>
			        <td><?=$m['title']; ?></td>
			        <td width="50">
			        	<a href="<?=BASE.'menu/edit/'.$m['id']; ?>" class="far fa-edit" style="color: green;"></a>
			        	<a href="?id=<?=$m['id']; ?>" class="far fa-trash-alt" style="color: red;"></a>
			        </td>
			      </tr>
			    </tbody>
				<?php endforeach; ?>
			</table>
		</div>
	</div>
</div>

<script src="<?=BASE; ?>assets/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
  //EDITOR
  CKEDITOR.replace('conteudo');
</script>