<?php 
require 'header.php'; 
$sql = 'SELECT * FROM menu ORDER BY RAND() LIMIT 3';
$sql = $db->query($sql);
$sql = $sql->fetchAll(PDO::FETCH_ASSOC);
$url2 = 'admin/assets/img/menu/';
?>

        <!-- Masthead-->
        <header class="masthead" style="background-image: url(<?=$url.$dados['image2']; ?>);">
            <div class="container">
                <div class="masthead-subheading"><?=$dados['title1']; ?></div>
                <div class="masthead-heading text-uppercase"><?=$dados['title2']; ?></div>
                <a class="btn btn-danger btn-xl text-uppercase js-scroll-trigger" href="http://pizzariaimperiouvaranas.com.br/front" style="background-color: <?=$dados['color_button']; ?>; border-color: <?=$dados['color_button']; ?>; color: #fff;" target="_blank"><?=$dados['button']; ?></a>
            </div>
        </header>

        
        <div class="container" style="margin-top: 20px;">
            <div class="row">

                <?php foreach ($sql as $c): ?>
                <div class="col-lg-4 col-sm-6 mb-4">
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