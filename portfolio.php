<?php 
    global $tituloPagina;
    $tituloPagina = "Portfolio";
    include('partes/cabecalho.php'); 
?>
        <header class="pagina-cabecalho">
            <h1 class="pagina-cabecalho__titulo">Portfólio</h1>
        </header>
        <section class="pagina-conteudo">
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Voluptatem nam maiores itaque nesciunt sint expedita? Eaque id suscipit temporibus, <br> soluta nesciunt alias consequuntur quia ullam ipsum, saepe ad, hic dolorem?</p>
            <nav>
                <ul class="lista-trabalhos">
                    <li class="lista-trabalhos__item">
                        <a data-fancybox="gallery" href="img/portfolio/aircraft-2806035_1280.jpg">
                            <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/aircraft-2806035_min.jpg" alt="Avião vermelho no céu">
                            <h2 class="lista-trabalhos__titulo">Nome do job 1</h2>
                        </a>
                    </li>
                    <li class="lista-trabalhos__item">
                        <a data-fancybox="gallery" href="img/portfolio/gear-2291916_1280.jpg">
                            <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/gear-2291916_min.jpg" alt="Zoom de engrenagem prateada">
                            <h2 class="lista-trabalhos__titulo">Nome do job 2</h2>
                        </a>
                    </li>
                    <li class="lista-trabalhos__item">
                        <a data-fancybox="gallery" href="img/portfolio/hong-kong-1990268_1280.jpg">
                            <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/hong-kong-1990268_min.jpg" alt="Avenidas de Hong Kong à noite com luzes">
                            <h2 class="lista-trabalhos__titulo">Nome do job 3</h2>
                    </a>
                    </li>
                    <li class="lista-trabalhos__item">
                        <a data-fancybox="gallery" href="img/portfolio/landscape-2268775_1280.jpg">
                            <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/landscape-2268775_min.jpg" alt="Vista de vale com árvores e montanha ao fundo">
                            <h2 class="lista-trabalhos__titulo">Nome do job 4</h2>
                        </a>
                    </li>
                    <li class="lista-trabalhos__item">
                        <a data-fancybox="gallery" href="img/portfolio/saddle-2614038_1280.jpg">
                            <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/saddle-2614038_min.jpg" alt="Banco de bicicleta visto por trás">
                            <h2 class="lista-trabalhos__titulo">Nome do job 5</h2>
                        </a>
                    </li>
                    <li class="lista-trabalhos__item">
                        <a data-fancybox="gallery" href="img/portfolio/town-2430571_1920.jpg">
                            <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/town-2430571_min.jpg" alt="Vista superior de cidade com várias casas">
                            <h2 class="lista-trabalhos__titulo">Nome do job 6</h2>
                        </a>
                    </li>                                               
                </ul>
            </nav>
        </section>
<?php include('partes/rodape.php'); ?>