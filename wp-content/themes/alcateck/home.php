<?php

//Template Name: home

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php bloginfo('name'); ?></title>
<link href="<?= get_stylesheet_directory_uri()?>/style.css" rel="stylesheet" type="text/css">
<meta charset="UTF-8" />   
<meta name="Description" content="<?php bloginfo('description'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="shortcut icon" href="<?= get_stylesheet_directory_uri() ?>/img/favicon.png"> 
<script type="text/javascript" src="<?= get_stylesheet_directory_uri() ?>/js/jquery.min.js"></script>
<script type="text/javascript">
    
    $(window).ready(function(){
        
        
        $("#status").delay(300).fadeIn();
	   $("#status").delay(2950).fadeOut;
	   $("#preloader").delay(3000).fadeOut("slow");
        
        setTimeout(function () {
            
            var classe  = "animated fadeInDown"
            
            $('#menu_flutuante').addClass(classe);
            $('.container_frase').addClass(classe);
            $('.logo').addClass(classe);
            $('.container_integrantes').css("display","flex");
        }, 3000); 
    });
    
</script>
<style>
	
	header{
		margin-top: 63px;
		height: 550px;
		z-index: 1;
		background: url(<?= get_field('imagem_header')['url']; ?>);
		background-position: center center;
		background-repeat: no-repeat;
		background-size: cover;
		position: relative;
		overflow: auto;
	}
	
    #container_logo {
        width: 250px;
        height: 63px;
        display: inline-block;
        position: absolute;
        top: 0;
        left: 10px;
        font-family: "Autorich";
    }
    
    #preloader{
        position:fixed;
        top:0;
        left:0;
        right:0;
        bottom:0;
        background:#000000;
        z-index:9999;
        height:100%;
        width:100%;
    }
    #status{
        width:920px;
        height:532px;
        position:absolute;
        display: none;
        left:50%;
        top:50%;
        margin:-266px 0px 0px -460px;
        background:url(<?= get_field('load_da_tela')['url']; ?>) center no-repeat;
        -webkit-filter: grayscale(100%);
        -moz-filter: grayscale(100%);
        -ms-filter: grayscale(100%);
        -o-filter: grayscale(100%);
        filter: grayscale(100%);
        -webkit-filter: contrast(150%);
   -moz-filter: contrast(150%);
    -ms-filter: contrast(150%);
     -o-filter: contrast(150%);
filter: contrast(150%);
    }
</style>
<?php wp_head(); ?>
</head>
<body>
   <!--Inicio  Preload -->
    <div id="preloader">
	    <div id="status"></div>
    </div>
    <!--Fim  Preload -->
	<!-- Inicio Header -->
    <!--Inicio Menu Flutuante-->
    <div id="menu_flutuante">
        <div id="container_header">
			<div id="container_itens_header">
				<!--Inicio logo-->
				<div id="container_logo">
					<h1 style="padding: 13px 0px 13px 20px"><a id="logo" href="#logo" style="text-decoration: none; text-transform: uppercase;"><?php bloginfo('name'); ?></a></h1>
				</div>
				<!-- Fim logo-->
				<!--Menu-->
				<div id="container_menu">
					<nav class="menu">
						<?php wp_nav_menu('principal'); ?>                       
					</nav>
				</div>
				<!--Fim Menu-->
			</div>
		</div>
    </div>
    <!-- Fim Menu Flutuante-->
	<header>
		<!--Inicio container  itens header-->
        <div class="container_frase">
			<h2 class="tituloM" style="text-align: center; width: 600px; margin: 0px auto; color: whitesmoke;"><?php the_field('frase_principal');?></h2>
        </div>
		<div class="logo">
			<img style="width: 100px; margin-left: -25px;" src="<?= get_field('imagem_lobo')['url'];?>" alt="<?= get_field('imagem_lobo')['alt'];?>">
		</div>
		<!--Fim container  itens header-->
         <div class="container_frase">
            <h3 id="time" class="tituloM" style="text-align: center; margin-left: -20px;"><?php the_field('titulo_time');?></h3>
        </div>
	</header>
	<!-- Fim Header -->
    <!-- Inicio Section 1 -->
	<section id="container1" class="container">
		<!-- Inicio Conteudo do Site -->
       
        
        <article class="container_integrantes">
            
			<?php if(have_rows('equipe_alcateck')): while(have_rows('equipe_alcateck')): the_row(); ?>
			
				<div class="box-usuario animated <?= get_sub_field('efeito_usuario'); ?>" style="width: 300px; ">
					<div class="container_foto_time">
						<div class="containerf" id="um">
							<img class="icon" src="<?= get_sub_field('foto_do_integrante')['url']; ?>" alt="<?= get_sub_field('foto_do_integrante')['alt']; ?>" onClick="window.open('<?= get_sub_field('url_do_integrante'); ?>');">
						</div>
					</div>
					<div class="container_titulo">
						 <h3 class="subTitulo" style="text-align: center;" onClick="window.open('<?= get_sub_field('url_do_integrante'); ?>');"><?= get_sub_field('nome_integrante'); ?></h3>
					</div>
					<div class="container_titulo">
						 <p class="txt1" style="text-align: center; color: black; min-height: 85px; margin-bottom: 10px;"><?= get_sub_field('descricao_do_integrante'); ?></p>
					</div>
				</div>
			
			<?php endwhile; endif; ?>

        </article>
	</section>
    <!-- Fim Section 1 -->
    <!-- Inicio Section 2 -->
    <section id="container2">
        <section class="container_sobre" id="sobre_img">
            <h2 id="sobre" class="tituloM oculta" style="width: 300px; position: relative; left: 33%; margin-top: 30px; color: black;">Nossa HistóriA</h2>
            <article class="box1 oculta" style="width: 500px; position: relative; left: 50%; top: 50%; margin-top: -185px;">
                <p class="txt1" style="color: white; text-align: center; font-size: 18px; line-height: 27px;">
                    Somos um grupo de desenvolvedores e amigos recém-formados, e já havíamos feito alguns trabalhos acadêmicos em conjunto anteriormente. Percebemos que nossa sintonia como equipe e fácil relacionamento nos proporciona uma grande agilidade e eficiência na hora de planejar e desenvolver qualquer aplicação e, por consequência dessa grande oportunidade, decidimos montar o Grupo Alcateck, unindo a palavra "ALCA", de alcateia, e "TECK", de tecnologia. Escolhemos esses significados por que somos como lobos, trabalhamos muito bem sozinhos, mas melhor ainda em equipe, resultado que nossa experiência como grupo nos mostrou.
                </p>
            </article>
        </section>
    </section>
    <!-- Fim Section 2 -->
    <!-- Inicio Section 3 -->
    <section id="container3" class="container">
        <section class="container_portifolio oculta2">
            <article class="container_box_portfolio">
                <h2 id="portfolio" class="tituloM" style="width: 139px; margin: 40px auto 20px auto; color: white;">PoRTFóLio</h2>
                <img src="<?= get_stylesheet_directory_uri() ?>/img/portfolio/logo/logo_600x300_white.png" style="width: 350px; height: auto; margin-left: 100px;" alt="Logo Reminder">
                <p class="txt1" style="color: white; text-align: center; width: 350px; margin: 20px 0px 0px 100px;">
                    REMINDER foi nosso primeiro trabalho como matilha, foi nesse projeto que decobrimos a força que temos em conjunto, REMINDER é uma agenda simples, pratica com um desing muito amigavel para alegrar suas tarefas. 
                </p>
            </article>
            <section style="width: 50%; height: auto; float: left;">
                <section id="slide">
                    <div class="slideshow-container">
                    <div class="mySlides fade">
                      <img class="img_slide" src="<?= get_stylesheet_directory_uri() ?>/img/portfolio/slide/img1.jpg" style="width:100%" alt="Reminder Login">
                      <div class="text tituloM">TELA DE LoGiN</div>
                    </div>

                    <div class="mySlides fade">
                      <img src="<?= get_stylesheet_directory_uri() ?>/img/portfolio/slide/img2.jpg" style="width:100%" alt="Reminder Registro">
                      <div class="text tituloM">TELA DE REGiSTRo</div>
                    </div>
                        
                    <div class="mySlides fade">
                      <img src="<?= get_stylesheet_directory_uri() ?>/img/portfolio/slide/img3.jpg" style="width:100%" alt="Reminder Home">
                      <div class="text tituloM">HoME</div>
                    </div>

                    </div>

                    <div style="text-align:center;display: none">
                      <span class="dot" onclick="currentSlide(1)"></span> 
                      <span class="dot" onclick="currentSlide(2)"></span> 
                      <span class="dot" onclick="currentSlide(3)"></span> 
                    </div>
                </section>
            </section>
        </section>
            
        <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
              showSlides(slideIndex += n);
            }

            function currentSlide(n) {
              showSlides(slideIndex = n);
            }

            function showSlides(n) {
              var i;
              var slides = document.getElementsByClassName("mySlides");
              var dots = document.getElementsByClassName("dot");
              if (n > slides.length) {slideIndex = 1}    
              if (n < 1) {slideIndex = slides.length}
              for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";  
              }
              for (i = 0; i < dots.length; i++) {
                  dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
            }

            var slideIndex = 1;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                  x[i].style.display = "none"; 
                }
                slideIndex++;
                if (slideIndex > x.length) {slideIndex = 1} 
                x[slideIndex-1].style.display = "block"; 
                setTimeout(carousel, 8000); // Change image every 2 seconds
            }
        </script>
    </section>
    <!-- Fim Section 2 -->
	<section id="container4" class="container">
		<h2 id="contato" class="tituloM oculta" style="width: 110px; margin: 120px auto 20px auto; color: white;">CoNTATo</h2>
		<div class="container_form oculta2">
			<form action="index.php" method="post" name="frmCadastro">
				<div class="row">
					<div class="col-25">
						<label for="lnome">Nome:</label>
					</div>
				</div>
				<div class="row">
					<div class="col-100" style="margin-top:0px;">
						<input type="text" id="lnome" name="txtNome" required placeholder="Digite seu nome...">
					</div>
				</div>
				<div class="row">
					<div class="col-25">
						<label for="lemail">E-mail:</label>
					</div>
					<div class="col-100" style="margin-top:0px;">
						<input type="email" id="lemail" name="txtEmail" required placeholder="Digite seu e-mail...">
					</div>
				</div>
				<div class="row">
					<div class="col-50">
						<label for="ltelefone">Telefone:</label>
					</div>
					<div class="col-50">
						<label for="lcelular">Celular:</label>
					</div>
					<div class="col-45" style="margin-top:0px;">
						<input type="text" id="ltelefone" name="txtTefefone" required placeholder="Digite seu telefone...">
					</div>
					<div class="col-50" style="margin-top:0px; margin-left: 5%;">
						<input type="text" id="lcelular" name="txtCelular" required placeholder="Repita seu celular...">
					</div>
				</div>
				<div class="row">
					<input type="submit" name="btnEnviar" value="Enviar">
				</div>
			</form>
		</div>
	</section>
    <!-- Fim Conteudo do Site -->
    
	<!-- Inicio Footer -->
	<footer>
		<div id="container_footer">
            <h3 class="subTitulo"  style="color: white; text-align: center; font-size: 12px; margin-top: 5px;"><?php bloginfo('name '); echo '@'.date('Y'); ?></h3>
        </div>
	</footer>
	<!-- Fim Footer -->
<script>
    // Debounce do Lodash
    debounce = function (func, whait,immediate){
        var timeout;
        return function(){
            var context = this , args  = arguments;
            var later = function (){
                timeout = null;
                if(!immediate) func.apply(context,args);  
            };
            var callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later,whait);
            if(callNow) func.apply(context,args);
        };
    };
    
    $('.scrollSuave a').click(function(e){
        e.preventDefault();
        var id = $(this).attr('href'),
         targetOffset = $(id).offset().top;
        
        $('html, body').animate({
           scrollTop: targetOffset - 130
        },500);
    });
    
    $('#logo').click(function(e){
        e.preventDefault();
        var id = $(this).attr('href'),
         targetOffset = $(id).offset().top;

        $('html, body').animate({
           scrollTop: 0 
        },500);
    });
    
    $(function(){
        $.firefly();
    });
    
    (function(){
        
        var target = $('.oculta'), target2 = $('.oculta2'),
            animationClass1 = 'exibe animated fadeInDown',
            animationClass2 = 'exibe animated fadeInLeft',
            offSet = $(window).height() * 3/4;

        function animeScroll(){
            var documentTop = $(document).scrollTop();

            target.each(function(){
                var itemTop = $(this).offset().top;

                if(documentTop > itemTop - offSet){
                    $(this).addClass(animationClass1);
                }
            });
            
            target2.each(function(){
                var itemTop = $(this).offset().top;

                if(documentTop > itemTop - offSet){
                    $(this).addClass(animationClass2);
                }
            });
        }

        animeScroll();


        $(document).scroll(debounce(function(){
            animeScroll();
            
        },200));
    }());
    
</script>
<script src="<?= get_stylesheet_directory_uri() ?>/js/jquery.firefly.js"></script>
<?  wp_footer(); ?>
</body>
</html>
