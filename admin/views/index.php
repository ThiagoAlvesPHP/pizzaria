<h3>Home</h3>
<hr>
<form method="POST" enctype="multipart/form-data">
	<?php if(!empty($home)): ?>
		<input type="number" name="up" value="1" hidden="">
		<div class="row">
			<div class="col-sm-6">
				<label>
					Adicionar Logo do Topo 
					(<span style="color: red; font-size: 10px;">Tipo: PNG - Tamanho: 600px/200px</span>)
				</label>
				<input type="file" name="image1" class="form-control">
			</div>
			<div class="col-sm-6">
				<label>
					Adicionar Plano de Fundo 
					(<span style="color: red; font-size: 10px;">Tipo: PNG - Tamanho: 1500px/800px</span>)
				</label>
				<input type="file" name="image2" class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<label>Título 1</label>
				<input type="text" name="title1" value="<?=$home['title1']; ?>" class="form-control" required="">
			</div>
			<div class="col-sm-6">
				<label>Título 2</label>
				<input type="text" name="title2" value="<?=$home['title2']; ?>" class="form-control" required="">
			</div>
		</div>
		<label>Botão</label>
		<input type="text" name="button" value="<?=$home['button']; ?>" class="form-control" required="">
		<label>Cor do Botão</label>
		<input type="color" name="color_button" value="<?=$home['color_button']; ?>" class="form-control" required="">
		<label>Detalhes de Contato</label>
		<textarea class="form-control" id="conteudo" name="detalhes_contato" required=""><?=$home['detalhes_contato']; ?></textarea>
		<label>Google Maps</label>
		<textarea class="form-control"  style="height: 100px;" name="google_map" required=""><?=$home['google_map']; ?></textarea>

		<label>Link Facebook</label>
		<input type="text" name="link_face" value="<?=$home['link_face']; ?>" class="form-control" required="">
		<label>Link Instagram</label>
		<input type="text" name="link_instagram" value="<?=$home['link_instagram']; ?>" class="form-control" required="">
	<?php else: ?>
		<div class="row">
			<div class="col-sm-6">
				<label>
					Adicionar Logo do Topo 
					(<span style="color: red; font-size: 10px;">Tipo: PNG - Tamanho: 600px/200px</span>)
				</label>
				<input type="file" name="image1" class="form-control" required="">
			</div>
			<div class="col-sm-6">
				<label>
					Adicionar Plano de Fundo 
					(<span style="color: red; font-size: 10px;">Tipo: PNG - Tamanho: 1500px/800px</span>)
				</label>
				<input type="file" name="image2" class="form-control" required="">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<label>Título 1</label>
				<input type="text" name="title1" class="form-control" required="">
			</div>
			<div class="col-sm-6">
				<label>Título 2</label>
				<input type="text" name="title2" class="form-control" required="">
			</div>
		</div>
		<label>Botão</label>
		<input type="text" name="button" class="form-control" required="">
		<label>Cor do Botão</label>
		<input type="color" name="color_button" class="form-control" required="">
		<label>Detalhes de Contato</label>
		<textarea class="form-control" id="conteudo" name="detalhes_contato" required=""></textarea>
		<label>Google Maps</label>
		<textarea class="form-control" name="google_map" required=""></textarea>
		<label>Link Facebook</label>
		<input type="text" name="link_face" class="form-control" required="">
		<label>Link Instagram</label>
		<input type="text" name="link_instagram" class="form-control" required="">
	<?php endif; ?>
	<br>
	<button class="btn btn-success">Salvar</button>
</form>

<script src="<?=BASE; ?>assets/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
  //EDITOR
  CKEDITOR.replace('conteudo');
</script>