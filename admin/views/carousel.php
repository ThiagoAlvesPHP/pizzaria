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
			        	<a href="?id=<?=$p['id']; ?>" class="far fa-trash-alt" style="color: red;"></a>
			        </td>
			      </tr>
			    </tbody>
				<?php endforeach; ?>
			</table>
		</div>
	</div>
</div>