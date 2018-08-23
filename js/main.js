// JS Puro
    // let botao = document.querySelector('.menu-principal__btn');
    // let menuPrincipal = document.querySelector('.menu-principal');
    // botao.addEventListener('click', abreFechaMenu);
    // function abreFechaMenu(evento){
    //     menuPrincipal.classList.toggle('menu-principal--fechado');
    // }

    //console.log(botao); verifica se botao esta sendo selecionado corretamente
    //console.log(menuPrincipal.classList); //verificar todas as classes pertencentes à menu_principal

//JQuery - biblioteca JS que trabalha com selecoes

// $('.cabecalho-home__titulo').html('Texto inserido com JQuery');
// $('.cabecalho-home__titulo').click(function(){
//     alert("Clicou!");
// });
$(document).ready(function(){
    //botao do menu
    $('.menu-principal__btn').click(function(){
        $('.menu-principal').toggleClass('menu-principal--fechado');
    });
    //slide comentario
    $('.depoimentos__caixa').slick({
        autoplay: true,
        arrows:false,
        dots: true
    });
    // Validação do formuladio de contato
    $('.formulario').validate({
        rules: {
            nome: 'required',
            email: {
                required: true,
                email: true
            },
            mensagem: 'required'
        },
        messages: {
            nome: 'Por favor, preencha o nome',
            email: {
                required: 'Por favor preencha o email.',
                email: 'Por favor preencha um email valido.'
            },
            mensagem: 'Por favor, preencha a mensagem'
        }
    });
});

