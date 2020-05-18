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
                <a class="btn btn-danger btn-xl text-uppercase js-scroll-trigger" href="http://pizzariaimperiouvaranas.com.br/front" style="color: #fff;" target="_blank"><?=$dados['button']; ?></a>
            </div>
            <div class="img-plano"></div>
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1937.7497612433338!2d-39.49478120567461!3d-13.748722885714795!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1125b6fd20a75f36!2sAlbicod!5e0!3m2!1spt-BR!2sbr!4v1570619838140!5m2!1spt-BR!2sbr" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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