<!doctype html>
<html lang="pt-br" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Maxsuel Fernando - Analista de Sistemas, Desenvolvedor e Programador PHP">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Maxsuel Fernando - Portfólio</title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/grid.css"> 
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" href="css/style-raw.css?=<?php print time(); ?> -->
		
	<link rel="stylesheet" href="css/style-raw.css">
	<script src="js/libs/modernizr-custom.js"></script>
</head>
<body>
	<section id="intro" class="intro">	
		<div class="container16 content-intro intro-container">
			<h1>Maxsuel Fernando</h1>
			<div class="intro-efect">
				<h3 class="anim-typewriter">Desenvolvedor Front-End | Analista de Sistemas </span/h3>
			</div>
			<div class="redes-sociais">
				<a href="https://www.facebook.com/maxsuelfernandob" target="_blank">
					<img src="img/redes-sociais/facebook-logo.png" alt="facebook-logo" class="social-logo">
				</a>
				<a href="https://www.linkedin.com/in/maxsuelfernandob" target="_blank">
					<img src="img/redes-sociais/linkedin-logo.png" alt="linkedin-logo" class="social-logo">
				</a>
				<a href="https://github.com/maxsuelfernandob" target="_blank">
					<img src="img/redes-sociais/github-logo.png" alt="github-logo" class="social-logo">
				</a>
			</div>
			<a href="#contato" class="call-contato">Entrar em contato</a>
		</div>
		<a class="mouse" href="#sobre">
			<div class="scroll-downs">
  				<div class="mousey">
   					<div class="scroller"></div>
  				</div>
			</div>
		</a>	
	</section>

	<section id="sobre" class="sobre">
		<div class="container16 sobre-container">
			<div class="sc_head">
				<i class="fa fa-user fa-3x icon_section" aria-hidden="true"></i>
				<h2 class="title_section">Sobre</h2>
				<span class="clear"></span>
				<h3>Conheça um pouco sobre mim</h3>
			</div>

			<hr class="separador sl">
			
			<div class="column13">
				
				<h3 class="h3_bold">Maxsuel Fernando</h3>
				<h3 class="h3_bold"><span>Desenvolvedor Front-end |</span> <span>Analista de Sistemas</span></h3>

				<div class="texto">
					<p>Graduado em Sistemas de Informação, com habilidades em Web Design, Desenvolvimento Front-end e Suporte Técnico, venho buscando sempre novos conhecimentos na área, pois, tenho interesse em evoluir profissionalmente, com o objetivo de ascensão profissional.</p>
				</div>
				<div>
					<h3 class="h3_bold">(82) 99912-7655</h3>
					<h3 class="h3_bold">Maceió - AL</h3>
				</div>
			</div>
			<div class="column3 maxsuel_img">
				<img class="maxsuelfernando" src="img/sobre/maxsuel_fernando.jpg" alt="Maxsuel Fernando">
			</div>
		</div>
	</section>

	<section class="portfolio">
		<div class="container16">
			<div class="sc_head">
				<i class="fa fa-code fa-3x icon_section" aria-hidden="true"></i>
				<h2 class="title_section">Portfólio Web Designer</h2>
				<span class="clear"></span>
				<h3>Projetos de sites que desenvolvi</h3>
			</div>

			<hr class="separador sb">
		</div>	
		<div class="container12 text-center">
			<div class="pjt_reais">
				<h3 class="pjt_title">Projetos reais</h3>
				<div class="column4">
					<a href="portfolio/escolacreative" target="_blank">
						<img src="img/portfolio/site01.png" alt="Site 01">
					</a>
				</div>
				<div class="column4">
					<a href="portfolio/vamos-mudar-o-mundo" target="_blank">
						<img src="img/portfolio/site02.png" alt="Site 02">
					</a>
				</div>
				<div class="column4">
					<a href="portfolio/vamos-mudar-o-mundo/blog" target="_blank">
						<img src="img/portfolio/site03.png" alt="Site 03">
					</a>
				</div>
			</div>
	
			<span class="clear"></span>

			<div class="templates">
				<h3 class="pjt_title">Templates</h3>
				<div class="column3">
					<a href="portfolio/site1" target="_blank">
						<img src="img/portfolio/site04.png" alt="Site 04">
					</a>
				</div>
				<div class="column3">
					<a href="portfolio/site2" target="_blank">
						<img src="img/portfolio/site05.png" alt="Site 05">
					</a>
				</div>
				<div class="column3">
					<a href="portfolio/site3" target="_blank">
						<img src="img/portfolio/site06.png" alt="Site 06">
					</a>
				</div>
				<div class="column3">
					<a href="portfolio/site4" target="_blank">
						<img src="img/portfolio/site07.png" alt="Site 07">
					</a>
				</div>
			</div>
		</div>		
	</section>

	<section id="contato" class="contato">
		<div class="container16 contato-container">
			<div class="sc_head">
				<i class="fa fa-envelope fa-3x icon_section" aria-hidden="true"></i>
				<h2 class="title_section">Contato</h2>
				<span class="clear"></span>
				<h3>Entre em contato para solicitar um orçamento ou tirar dúvidas </h3>
			</div>

			<hr class="separador sl">

			<form id="form_contato" action="" method="post" name="form" class="formphp form" onsubmit="enviar.disabled=true;">
				
				<label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
				<input type="text" class="nao-aparece" name="leaveblank" value="">
				<label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
				<input type="text" class="nao-aparece" name="dontchange" value="http://">

				<div class="column8">
					<input type="text" name="nome" placeholder="Nome" required>
					<input type="email" name="email" placeholder="Email" required>
				</div>
				<div class="column8">
					<textarea rows="3" name="mensagem" placeholder="Mensagem" required></textarea>
				</div>
				<span class="clear"></span>
				<div class="button-form">
					<button class="btn direciona" name="enviar" type="submit">Enviar</button>
				</div>
			</form>
		</div>
	</section>

	<footer class="footer">
		<div class="container16 text-center">
			<a href="https://www.facebook.com/maxsuelfernandob" target="_blank">
				<img src="img/redes-sociais/facebook-logo.png" alt="facebook-logo" class="social-logo">
			</a>
			<a href="https://www.linkedin.com/in/maxsuelfernandob" target="_blank">
				<img src="img/redes-sociais/linkedin-logo.png" alt="linkedin-logo" class="social-logo">
			</a>
			<a href="https://github.com/maxsuelfernandob" target="_blank">
				<img src="img/redes-sociais/github-logo.png" alt="github-logo" class="social-logo">
			</a>
			
			<!-- <div class="info">
				<p>(82) 99912-7655</p>
				<p>maxsuelf94@gmail.com</p>
			</div> -->
		</div>
	</footer>

	<script src="js/libs/jquery-1.9.1.min.js"></script>
	<script src="js/libs/visibility.js"></script>
	<script src="js/script.js"></script>

</body>
</html>