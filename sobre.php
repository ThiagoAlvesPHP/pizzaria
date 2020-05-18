<?php 
require 'header.php'; 
$sql = 'SELECT * FROM about';
$sql = $db->query($sql);
$sql = $sql->fetch(PDO::FETCH_ASSOC);
?>

<!-- sobre -->
<section class="page-section" id="services" style="background-image: url(<?=$url.$dados['image2']; ?>);">
    <div class="container">

        <div class="alert" style="background-color: #fff;">
            <div class="text-center" style="margin-top: 20px;">
                <h2 style="color: #000;" class="section-heading text-uppercase">Sobre</h2>
            </div>
            <div class="row text-center">
                <div class="row">
                    <div class="col">
                        <img src="admin/assets/img/about/<?=$sql['image']; ?>" class="img-responsive">
                    </div>
                    <div class="col">
                        <p class="text-muted"><?=$sql['description']; ?></p>
                    </div>
                </div>
                
            </div>

        </div>
    </div>
</section>

<?php require 'footer.php'; ?>