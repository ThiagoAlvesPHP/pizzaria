<h3>Meus Dados</h3>
<hr>
<form method="POST">
	<label>Nome</label>
	<input type="text" name="name" value="<?=$user['name']; ?>" class="form-control" required="">
	<label>Email</label>
	<input type="email" name="email" value="<?=$user['email']; ?>" class="form-control" required="">
	<label>Senha</label>
	<input type="password" name="pass" class="form-control">
	<br>
	<button class="btn btn-primary">Atualizar</button>
</form>