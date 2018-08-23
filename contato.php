<?php 
    global $tituloPagina;
    $tituloPagina = "Contato";
    include('partes/cabecalho.php');
    
    $email = '';
    $mensagem = '';
    $erroFormulario = '';
    $sucessoFromulario = '';
    if( isset($_POST['submit']) ){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];
        $mensagemEmail = 'Nome: ' . $nome . ' - ';
        $mensagemEmail .= 'Email: ' . $email . ' - ';
        $mensagemEmail .= 'Mensagem: ' . $mensagem;
        if($nome != '' && $email != '' && $mensagem != ''){
            if(mail('contato@site.com.br','Mensagem de contato', $mensagemEmail)){
                $sucessoFromulario = 'Mensagem enviada com sucesso!';
            }
            else {
                $erroFormulario = 'Falha ao enviar o email. Tente mais tarde ou através do email: xxx@zzz.com';
            }
        }
        else{
            $erroFormulario = 'Por favor, verifique o preenchimento dos campos';
        }
    }
?>
<header class="pagina-cabecalho">
    <h1 class="pagina-cabecalho__titulo">Contato</h1>
    <?php echo $nome?>
</header>
<section class="container pagina-conteudo">
    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ratione consectetur ex reprehenderit odit possimus sint, labore porro incidunt laudantium voluptas doloremque animi. Nam nihil et adipisci, fugiat earum ad.</p>
    <form action="contato.php" class="formulario" method="post">
        <?php if($erroFormulario != ''): ?>
            <div class="formulario__erro">
                <?php echo $erroFormulario ?>
            </div>
        <?php endif; ?>
        <?php if($sucessoFormulario != ''): ?>
            <div class="formulario__sucesso">
                <?php echo $sucessoFormulario ?>
            </div>
        <?php endif; ?>
        <div class="formulario__grupo formulario__grupo--coluna-esq">
            <label class="formulario__label" for="nome">Nome</label><br>
            <input class="formulario__campo" type="text" name="nome" id="nome">
        </div>
        <div class="formulario__grupo formulario__grupo--coluna-dir">
            <label class="formulario__label" for="email">E-mail</label><br>
            <input class="formulario__campo" type="email" name="email" id="email">
        </div>
        <div class="formulario__grupo">
            <label class="formulario__label" for="mensagem">Mensagem</label><br>
            <textarea class="formulario__campo" name="mensagem" id="mensagem" cols="30" rows="10"></textarea><br>
        </div>
        <input class="formulario__botao" type="submit" name="enviar" id="enviar" value="Enviar" name="submit"><br>
    </form>
    <p class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil necessitatibus illum corporis laboriosam,<br>
        accusamus officiis iusto enim adipisci cumque magnam cum incidunt, odio ea animi ipsum, exercitationem culpa laborum harum.
    </p>
</section>
<div class="mapa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d31872.93695634551!2d-60.02434046044921!3d-3.0633453999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1532029786507" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<?php include('partes/rodape.php'); ?>