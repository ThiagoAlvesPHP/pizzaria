$(function (){
	//DEFINIR SE É EM PRODUÇÃO OU~DESENVOLVIMENTO
    var url_local = window.location.href;
    if(url_local.indexOf('localhost')==-1) {
        var url = 'https://www.adsonrifas.com/';
    } else {
        var url = 'http://localhost/PROJETOS_ANDAMENTO/rifas/';
    }

    $('.cell').mask('(00) 0 0000-0000');
    
    //adicionar numero a carrinho
    $(document).on('click', '.number_raffles', function(){
        let number_raffles = $(this).val().split('/');
        //number_raffles[0] ID do número
        //number_raffles[1] o Proprio número
        var html = '';
        $.ajax({
            type: 'POST',
            url: url+'ajax',
            dataType:'json',
            data:{ number_raffles:number_raffles },
            success:function(data){
                if (data == true) {
                    $('.remove_reserva'+number_raffles[0]).removeClass("btn-warning");
                    $('.remove_reserva'+number_raffles[0]).addClass("btn-primary");

                    html += '<div class="dep_fc"><input type="number" hidden="" name="number[]" value="'+number_raffles[0]+'"><input type="number" class="form-control" value="'+number_raffles[1]+'" readonly="">';

                    html += '<button class="btn btn-danger btn-block remove_input" value="'+number_raffles[0]+'">X</button><br></div>';
                    $('#form-number-customer').append(html);
                } else {
                    alert('Por favor clique em "Ver meus números" Cadastre-se ou faça Login');
                }

                
            }
        });
    });

    $(document).on('click', 'button.remove_input', function(e){
        e.preventDefault();
        let id = $(this).val();

        $(this).closest('div.dep_fc').remove();

        $('thead').find('.remove_reserva'+id).removeClass("btn-primary");
        $('thead').find('.remove_reserva'+id).addClass("btn-warning");

        $.ajax({
            type: 'POST',
            url: url+'ajax',
            data:{ id_number:id },
            success:function(data){
                
            }
        });
    });

    $(document).on('change', '#status', function(){
        let status = $(this).val().split('/');

        $.ajax({
            type: 'POST',
            url: url+'ajax',
            data:{ status:status },
            success:function(data){
                alert("Status Alterado");
                window.location.href = url+"customer/up/"+status[2];
            }
        });

    });

    if( $(window).width() < 500){
         $(".carousel-inner .carousel-caption p").hide();
         $("#navbar .logo").hide();
    }
    
    /*$(window).scroll(function () {
        if (jQuery(this).scrollTop() > 400) {
            $(".navbar").height(30);
            $("#navbar .dropdown-menu").css("margin-top", "0");
            $("#navbar ul").css("margin-top", "0");
            $("#navbar .logo").hide();
            $("#navbar .logoMobile").show();
        } else {
            $(".navbar").height(120);
            $("#navbar .dropdown-menu").css("margin-top", "30");
            $("#navbar ul").css("margin-top", "40px");
            $("#navbar .logoMobile").hide();
            $("#navbar .logo").show();
            $("#navbar .logo").css("margin-top", "20px");
        }
    }); */
    
});