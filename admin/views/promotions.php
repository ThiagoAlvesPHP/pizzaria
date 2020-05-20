<h3>Promoções</h3>
<hr>
<div class="row">
	<div class="col-sm-6">
		<form method="POST" enctype="multipart/form-data"> 
			<label>Imagem (<span style="color: red; font-size: 10px;">Tipo: JPG/JPEG - Tamanho: 400px/300px</span>)</label>
			<input type="file" name="image" class="form-control" required="">
			<label>Título</label>
			<input type="text" name="title" class="form-control" required="">
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
			    <?php foreach($list as $p): ?>
			    <tbody>
			      <tr>
			        <td width="50"><img width="30" src="<?=BASE.$url.$p['image']; ?>"></td>
			        <td><?=$p['title']; ?></td>
			        <td width="50">

			        	<a class="far fa-edit" style="color: green;" href="" data-toggle="modal" data-target="#myModal<?=$p['id']; ?>"></a>

						<!-- editar -->
						<div id="myModal<?=$p['id']; ?>" class="modal fade" role="dialog">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal">&times;</button>
						      </div>
						      <div class="modal-body">
						        <form method="POST" enctype="multipart/form-data"> 
									<label>Imagem (<span style="color: red; font-size: 10px;">Tipo: JPG/JPEG - Tamanho: 400px/300px</span>)</label>
									<input type="file" name="imageUp" class="form-control">
									<label>Título</label>
									<input type="text" name="titleUp" value="<?=$p['title']; ?>" class="form-control"  required="">
									<input type="number" name="idUp" hidden="" value="<?=$p['id']; ?>">
									<input type="text" name="imageOut" value="<?=$p['image']; ?>" hidden="">
									<br>
									<button class="btn btn-primary">Atualizar</button>
								</form>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-danger" data-dismiss="modal">X</button>
						      </div>
						    </div>
						  </div>
						</div>

			        	<a href="?id=<?=$p['id']; ?>" class="far fa-trash-alt" style="color: red;"></a>
			        </td>
			      </tr>
			    </tbody>
				<?php endforeach; ?>
			</table>
		</div>
	</div>
</div>
