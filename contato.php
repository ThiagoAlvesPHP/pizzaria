<?php require 'header.php'; ?>

 <!-- Contato-->
<section class="page-section" id="contact" style="background-image: url(<?=$url.$dados['image2']; ?>);">
    <div class="container">

        <div class="alert" style="background-color: #fff;">

            <div class="text-center" style="margin-top: 20px;">
                <h2 style="color: #000;" class="section-heading text-uppercase">Contato</h2>
            </div>

            <form id="contactForm" name="sentMessage" novalidate="novalidate">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" id="name" type="text" placeholder="Nome *" required="required" data-validation-required-message="Please enter your name." />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="email" type="email" placeholder="E-mail *" required="required" data-validation-required-message="Please enter your email address." />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group mb-md-0">
                            <input class="form-control" id="phone" type="tel" placeholder="Contato *" required="required" data-validation-required-message="Please enter your phone number." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <textarea class="form-control" id="message" placeholder="Mensagem *" required="required" data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div id="success"></div>
                    <button class="btn btn-primary btn-xl text-uppercase" style="color: #000;" id="sendMessageButton" type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php require 'footer.php'; ?>