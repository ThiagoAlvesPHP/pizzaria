<h3>Carousel</h3>
<hr>
<div class="row">
	<div class="col-sm-6">
		<form method="POST"> 
			<label>Texto 1</label>
			<input type="text" name="text1" class="form-control" required="">
			<label>Texto 2</label>
			<input type="text" name="text2" class="form-control" required="">
			<br>
			<button class="btn btn-success carregando">Salvar</button>
		</form>
	</div>
	<div class="col-sm-6">
		<div class="table table-responsive">
			<table class="table table-hover">
			    <thead>
			      <tr>
			        <th>Texto 1</th>
			        <th>Texto 2</th>
			        <th>Ação</th>
			      </tr>
			    </thead>
			    <?php foreach($list as $p): ?>
			    <tbody>
			      <tr>
			        <td><?=$p['text1']; ?></td>
			        <td><?=$p['text2']; ?></td>
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
						        <form method="POST"> 
									<label>Texto 1</label>
									<input type="text" name="text1Up" value="<?=$p['text1'] ?>" class="form-control" required="">
									<label>Texto 2</label>
									<input type="text" name="text2Up" value="<?=$p['text2'] ?>" class="form-control" required="">
									<input type="number" name="idUp" hidden="" value="<?=$p['id']; ?>">
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