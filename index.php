<?php 
require 'header.php'; 
$sql = 'SELECT * FROM menu ORDER BY RAND() LIMIT 4';
$sql = $db->query($sql);
$sql = $sql->fetchAll(PDO::FETCH_ASSOC);

$url2 = 'admin/assets/img/menu/';
$url3 = 'admin/assets/img/home/';

$promocoes = 'SELECT * FROM promotions LIMIT 4';
$promocoes = $db->query($promocoes);
$promocoes = $promocoes->fetchAll(PDO::FETCH_ASSOC);

$carousel = 'SELECT * FROM carousel';
$carousel = $db->query($carousel);
$carousel = $carousel->fetchAll(PDO::FETCH_ASSOC);

$description = 'SELECT * FROM description';
$description = $db->query($description);
$description = $description->fetch(PDO::FETCH_ASSOC);

$banner = 'SELECT * FROM banner LIMIT 4';
$banner = $db->query($banner);
$banner = $banner->fetch(PDO::FETCH_ASSOC);
?>

        <!-- Masthead-->
        <header class="masthead" style="background-image: url(<?=$url.$dados['image2']; ?>);">
            <div class="container">
                <div class="masthead-subheading"><?=$dados['title1']; ?></div>
                <div class="masthead-heading text-uppercase"><?=$dados['title2']; ?></div>
                <a class="btn btn-danger btn-xl text-uppercase js-scroll-trigger" href="http://pizzariaimperiouvaranas.com.br/front" style="background-color: <?=$dados['color_button']; ?>; border-color: <?=$dados['color_button']; ?>; color: #fff;" target="_blank"><?=$dados['button']; ?></a>
            </div>
        </header>

        <hr>
        <!-- PROMOÇÕES -->
        <h3 class="text-center">Promoções</h3>
        <div class="container-fluid">
            <div class="row">
                <?php foreach ($promocoes as $p): ?>
                <div class="col-lg-3 col-sm-3 mb-3">
                    <div class="portfolio-item promocoes zoom">
                        <a class="portfolio-link" data-toggle="modal" href=""
                            >
                            <img style="max-height: 200px;" class="img-fluid" src="<?=$url3.'promocoes/'.$p['image']; ?>" alt=""
                        /></a>
                        <div class="portfolio-caption text-center text-item">
                            <div class="portfolio-caption-heading"><?=$p['title']; ?></div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <hr>
        <!-- CAROUSEL -->
        <div id="demo" class="carousel slide" data-ride="carousel">
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
          </ul>
          <div class="carousel-inner">
            <?php foreach ($carousel as $key => $value): ?>
                <div class="carousel-item <?=($key == 0)?'active':''; ?>">
                  <img src="assets/img/carousel.png" style="height: 400px; width: 100%;">
                  <div class="carousel-caption">
                    <h1 style="color: #000;"><?=$value['text1'] ?></h1>
                    <p style="color: red;"><?=$value['text2'] ?></p>
                  </div>
                </div>
            <?php endforeach; ?>
          </div>
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
        <hr>
        <!-- DESCRIÇÃO -->
        <div class="container-fluid">
            <div class="alert" style="background-color: #fff;">
                <div class="row">
                    <div class="col">
                        <img style="width: 100%;" src="<?=$url3.'descricoes/'.$description['image']; ?>" class="img-responsive">
                    </div>
                    <div class="col">
                        <p class="text-muted">
                            <?=$description['texto']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- BANNER -->
        <img style="width: 100%;" src="<?=$url3.'banner/'.$banner['image']; ?>">

        <hr>
        <div class="container" style="margin-top: 20px;">
            <h3 class="text-center">Cardápio</h3>
            <div class="row">
                <?php foreach ($sql as $c): ?>
                <div class="col-lg-3 col-sm-3 mb-3">
                    <div class="portfolio-item zoom">
                        <a class="portfolio-link" data-toggle="modal" href=""
                            >
                            <img style="max-height: 200px;" class="img-fluid" src="<?=$url2.$c['image']; ?>" alt=""
                        /></a>
                        <div class="portfolio-caption text-center text-item">
                            <div class="portfolio-caption-heading"><?=$c['title']; ?></div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <hr>

        <section class="page-section" style="background-image: url(<?=$url.$dados['image2']; ?>);">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <?=$dados['google_map']; ?>
                    </div>
                    <div class="col-sm-6">
                        <div class="alert" style="background-color: #fff; height: 300px;">
                            <h4>Contato</h4>
                            <?=$dados['detalhes_contato']; ?>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
        

<?php require 'footer.php'; ?>