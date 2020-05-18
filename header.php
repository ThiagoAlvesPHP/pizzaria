<?php 
require 'config.php'; 
$s = 'SELECT * FROM home';
$s = $db->query($s);
$dados = $s->fetch(PDO::FETCH_ASSOC);

$s2 = 'SELECT * FROM tracking';
$s2 = $db->query($s2);
$rastreamento = $s2->fetchAll(PDO::FETCH_ASSOC);

$url = 'admin/assets/img/home/';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Pizzaria</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <?php
        if (!empty($rastreamento)) {
            foreach ($rastreamento as $value) {
                echo $value['script'];
            }
        }
        ?>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <!-- logo da esquerda -->
                <a class="navbar-brand js-scroll-trigger" href="index.php">
                    <img src="<?=$url.$dados['image1']; ?>" />
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu<i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php">HOME</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="sobre.php">SOBRE</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="cardapio.php">CARDÁDIO</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="contato.php">CONTATO</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="http://pizzariaimperiouvaranas.com.br/front" target="_blank">PEDIDO</a></li>
                    </ul>
                </div>
            </div>
        </nav>