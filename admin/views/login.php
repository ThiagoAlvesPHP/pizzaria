<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=320px">
  <title>Login</title>
  <meta property="og:image" content="<?=BASE; ?>assets/img/logo.png">
  <meta name="author" content="Albicod">
  <link rel="stylesheet" href="<?=BASE; ?>assets/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="<?=BASE; ?>assets/css/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="<?=BASE; ?>assets/css/style.css" type="text/css" />
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<br><br>
			<div class="alert alert-success">
				<center>
					<h4>Área do Administrativa</h4>
					<?php
					if (isset($alert) && !empty($alert)) {
						echo $alert;
					}
					?>
					<hr>
				</center>
				<form method="POST">
					<label>E-mail:</label>
					<input type="email" name="email" autofocus="" class="form-control" required="">
					<label>Senha:</label>
					<input type="password" name="pass" class="form-control" required="">
					<br>
					<button class="btn btn-success btn-lg btn-block">Logar</button>
				</form>
			</div>
		</div>
		<div class="col-sm-3"></div>
	</div>
</div>

<script type="text/javascript" src="<?=BASE; ?>assets/jquery.min.js"></script>
<script type="text/javascript" src="<?=BASE; ?>assets/bootstrap.js"></script>
</body>
</html>