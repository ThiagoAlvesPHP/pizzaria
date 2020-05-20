<?php
$u = new User();
$seller = $u->get($_SESSION['lg']);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=320px">
  <title>Àrea do Vendedor</title>
  <link rel="icon" href="<?=BASE; ?>admin/assets/img/favicon.png" type="image/x-icon"/>
  <meta property="og:title" content="Adison - Show de Prêmios">
  <meta property="og:description" content="Venda de Rifas">

  <meta property="og:image" content="<?=BASE; ?>assets/img/favicon.png">
  <meta property="og:image:type" content="image/png">
  <meta property="og:type" content="website">
  <meta name="robots" content="noindex">
  <meta name="robots" content="index, follow">
  <meta name="robots" content="noindex, nofollow">
  <meta name="author" content="Albicod">

  <link rel="stylesheet" href="<?=BASE; ?>assets/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="<?=BASE; ?>assets/css/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="<?=BASE; ?>/assets/css/style.css" type="text/css" />

</head>
<body>

<nav id="menu" class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand li" href="<?=BASE; ?>">
        Dashboard
      </a>
    </div>
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="nav navbar-nav navbar-left">
        <li class="dropdown li">
          <a href="<?=BASE.'home/mydados/'.$seller['id']; ?>" class="dropdown-toggle link"><b><?=$seller['name']; ?></b></a>
        </li>
        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown">
            <b>Paginas <span class="caret"></span></b>
          </a>
          <ul class="dropdown-menu">
            <li class="divider"></li>
            <li><a href="<?=BASE; ?>index">HOME</a></li>
            <li class="divider"></li>
            <li><a href="<?=BASE; ?>index/promotions">HOME - Promoções</a></li>
            <li class="divider"></li>
            <li><a href="<?=BASE; ?>index/carousel">HOME - Carousel</a></li>
            <li class="divider"></li>
            <li><a href="<?=BASE; ?>index/description">HOME - Descrição</a></li>
            <li class="divider"></li>
            <li><a href="<?=BASE; ?>index/banner">HOME - Banner</a></li>
            <li class="divider"></li>
            <li><a href="<?=BASE; ?>about">SOBRE</a></li>
            <li class="divider"></li>
            <li><a href="<?=BASE; ?>menu">CARDÁPIO</a></li>
            <li class="divider"></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown">
            <b>Rastreamento <span class="caret"></span></b>
          </a>
          <ul class="dropdown-menu">
            <li class="divider"></li>
            <li><a href="<?=BASE; ?>facebook?tracking=1">FACEBOOK</a></li>
            <li class="divider"></li>
            <li><a href="<?=BASE; ?>google?tracking=2">GOOGLE</a></li>
            <li class="divider"></li>
          </ul>
        </li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">

        <li class="dropdown li">
          <a href="<?=BASE; ?>home/logout" class="dropdown-toggle link"><b>Sair</b></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
<!-- AQUI COLOCAREMOS AS VIES DO SITE -->
<?php $this->loadViewInTemplate($viewName, $viewData); ?>
</div>

<!-- AQUI COLOCAREMOS O FOOTER -->
<script type="text/javascript" src="<?=BASE; ?>assets/js/jquery.min.js"></script>
<script src="<?=BASE; ?>assets/js/bootstrap.js"></script>
<script type="text/javascript" src="<?=BASE; ?>assets/js/jquery.mask.js"></script>
<script type="text/javascript" src="<?=BASE; ?>assets/js/script.js"></script>

</body>
</html>
