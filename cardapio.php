<?php 
require 'header.php'; 
$sql = 'SELECT * FROM menu';
$sql = $db->query($sql);
$sql = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Cardapio-->
<section class="page-section bg-light" id="portfolio" style="background-image: url(<?=$url.$dados['image2']; ?>);">
    
    <div class="container">
        <div class="alert" style="background-color: #fff;">
            <div class="text-center" style="margin-top: 20px;">
                <h2 style="color: #000;" class="section-heading text-uppercase">Cardápio</h2>
            </div>
            <div class="row">
                <?php if(!empty($sql)): ?>

                    <?php foreach ($sql as $m): ?>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item zoom">
                            <a class="portfolio-link" data-toggle="modal" href=""
                                >
                                <img style="max-height: 200px;" class="img-fluid" src="admin/assets/img/menu/<?=$m['image']; ?>" alt=""
                            /></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?=$m['title']; ?></div>
                                <div class="portfolio-caption-subheading text-muted">
                                    <?=$m['description']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <h3>Nenhum carpadio encontrado</h3>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
</section>

<?php require 'footer.php'; ?>