<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Vaipe</title>
	<link rel="stylesheet" href="css/style.min.css">
	<link rel="stylesheet" href="js/slick-1.8.0/slick/slick.css">
	<link rel="stylesheet" href="js/slick-1.8.0/slick/slick-theme.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<!-- <script src="https://use.fontawesome.com/e9abb40d2f.js"></script> -->
<script src="js/slick-1.8.0/slick/slick.min.js"></script>
<style>
	.slider {
        width: 50%;
        margin: 100px auto;
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }


    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .2;
    }
    
    .slick-active {
      opacity: .5;
    }

    .slick-current {
      opacity: 1;
    }

    .slick-slide {
    text-align: center;
    background: rgba(255,255,255,0.5);
    margin: 10px;
}
</style>
</head>
<!-- php para condicional css -->
<body  <?php //body_class( 'class-name' ); ?> >
	<header >
		<nav class="navbar navbar-expand-lg container">
			<figure>
				<a class="navbar-brand" href="#">
					<img src="img/header/logo_vaipe_branco.svg" alt="">
				</a>
			</figure>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"><i class="fa fa-bars colorBranco" aria-hidden="true"></i></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Ferramentas <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Planos</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Anonimato</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Blog</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Parceiros</a>
		      </li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <button id="entrar" class="mr-sm-2">Entrar</button>
		      <button id="testeGratisTopo" class="btn my-2 my-sm-0" type="submit"><img src="img/header/smile_face_botao" alt="smile_face_botao" alt="Comece com um teste de 7 dias grátis">Teste 7 dias</button>
		    </form>
		  </div>
		</nav>
		<!-- <h1 class='text-center'>Manifesto do anonimato</h1> -->
		<div class="row container center-important">
			<div id="topoLeft" class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<h1>Pergunte, escute,<br />melhore :)</h1>
				<p>Plataforma de pesquisa de clima<br />e engajamento de colaboradores.</p>
				<button type="button" class="smallScreen">Testar Agora</button>
				<p class="entre smallScreen">Já usa a Vaipe? <span>Entre aqui</span></p>
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" id="topoRight">
				<img src="img/header/image_header.svg" alt="">
			</div>
		</div>
	</header>
	<button type="button" class="button-centralizado" id="testarAgoraMobile">Testar Agora</button>
	<main>
	<section id="engajamento">
		<h3 class="text-center">Meça o engajamento do seu time continuamente</h3>
		<div class="linhaVerde"></div>
		<div class="row container center-important">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<div class="container-fluid"><img src="img/meca_o_engajamento_continuamente/img_pergunta_enps.svg" alt="" class="img-fluid center-important"></div>
				<div class="container-fluid"><img src="img/meca_o_engajamento_continuamente/imagem_grafico_enps.svg" alt="" class="img-fluid center-important"></div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<div class="itensPerguntas">
					<h4>1. PERGUNTE</h4>
					<p>Cadastre sua empresa e seus colaboradores direto pela plataforma para que a gente envie as perguntas diretamente no e-mail deles.</p>
				</div>
				<div class="itensPerguntas">
					<h4>2. ESCUTE</h4>
					<p>Os colaboradores recebem as perguntas de clima  semanalmente e a pergunta eNPS mensalmente. Todas elas possuem espaço para comentários! Leia o manifesto do anonimato -></p>
				</div>
				<div class="itensPerguntas">
					<h4>3. MELHORE :)</h4>
					<p>Os resultados ficam disponíveis na plataforma em tempo real, com a possibilidade de comparar entre departamento, sexo, senioridade ou grupos.</p>
				</div>
			</div>
		</div>
	</section>
	<section id="superFerramentas">
		<div class="container center-important">
			<h3 class="text-center">Super ferramentas à sua disposição</h3>
				  <div style="background: #3498db; padding: 100px; margin: 10px;">
					<div class="large-slick">
					    <div><h1>1</h1></div>
					    <div><h1>2</h1></div>
					    <div><h1>3</h1></div>
					    <div><h1>4</h1></div>
					    <div><h1>5</h1></div>
					</div>
					<div class="small-slick">
					    <div><h1>1</h1></div>
					    <div><h1>2</h1></div>
					    <div><h1>3</h1></div>
					    <div><h1>4</h1></div>
					    <div><h1>5</h1></div>
					</div>
				</div>
	
			<script>
				$(document).ready(function(){
					 $('.small-slick').slick({
         slidesToShow: 3,
         slidesToScroll: 1,
         dots: true,
         centerMode: true,
         focusOnSelect: true,
         arrows: true,
         asNavFor: '.large-slick'
     });
				});
			</script>
			<p>Que tal bater um papo sobre clima?</p>
			<button class="faleComConsultor button-centralizado">Fale com um consultor</button>
		</div>
	</section>
	<section id="prontoParaAcabarComClimao" class="row container center-important">
		<h3>Pronto para acabar com o climão</h3>
		<div class="container-fluid">
			<div class="linhaVerde"></div>
		</div>
		<!-- <div id="linhaClimao"> -->
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
				<div class="blocoRoxo">
					<div class="icone">
						<img src="img/acabar_com_climao/icone_0_a_10.svg" class="center-important img-fluid" alt="">
					</div>
					<button class="darNotaCadastrar button-centralizado">Dar uma nota para meu chefe</button>
					<p>	Enviamos o convite para o responsável pela sua empresa. Basta você dar a sua nota de 0 a 10! Se preferir, garantimos seu anonimato!</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
				<div class="blocoRoxo">
					<div class="icone">
						<img src="img/acabar_com_climao/icone_cadastro.svg" alt="">
					</div>
					<button class="darNotaCadastrar button-centralizado">Cadastrar minha empresa</button>
					<p>Conte com a gente para te ajudar a engajar o seu time com dados e indicadores de RH!</p>
				</div>
			</div>
		<!-- </div> -->
	</section>
	<section id="quemAprova">
		<div class="row container center-important">
			<h3 class="text-center">Quem aprova a Vaipe:</h3>
			<div class="container-fluid">
				<div class="linhaBranca"></div>
			</div>
			<div class="row" id="linhaQuemAprovaCentraliza">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<div class="quemAprovaPerfil" id="perfil1">
						<div class="media mobileNone">
							<img src="img/quem_aprova/vanessa_foto.svg" alt="" class="d-flex align-self-end mr-3">
							<div class="media-body align-self-top">
								<p>“A Vaipe caiu do céu! na ferramenta tem tudo a mão, os resultados são coletados em tempo real e posso extrair relatórios com as respostas!”</p>
								<p>Vanessa Lopes</p>
								<p>Conversion</p>
							</div>
						</div>
						<!-- Mobile -->
						<div class="media desktopNone">
							<img src="img/quem_aprova/vanessa_foto.svg" alt="" class="d-flex align-self-top mr-3">
							<div class="media-body align-self-top">
								<p>“A Vaipe caiu do céu! na ferramenta tem tudo a mão, os resultados são coletados em tempo real e posso extrair relatórios com as respostas!”</p>
								<p>Vanessa Lopes</p>
								<p>Conversion</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<div class="quemAprovaPerfil" id="perfil2">
						<div class="media mobileNone  margin-left-media">
							<img src="img/quem_aprova/juliana_Foto.svg" alt="" class="d-flex align-self-end mr-3"  id="desktop">
							<div class="media-body align-self-top">
								<p>“Abrimos para os colaboradores um espaço que antes não existia, de falar de forma anônima seus anseios e suas sugestões”</p>
								<p>Juliana Marin</p>
								<p>Lendico</p>
							</div>
						</div>
						<!-- Mobile -->
						<div class="media desktopNone">
							<div class="media-body align-self-top" >
								<p>“Abrimos para os colaboradores um espaço que antes não existia, de falar de forma anônima seus anseios e suas sugestões”</p>
								<p>Juliana Marin</p>
								<p>Lendico</p>
							</div>
							<img src="img/quem_aprova/juliana_Foto.svg" alt="" class="d-flex align-self-top ml-3" id="mobile">
						</div>
					</div>
				</div>
			</div>
			<!-- <ul id="listaEmpresas">
				<li><img src="img/quem_aprova/logo-conversion.svg" alt=""></li>
				<li><img src="img/quem_aprova/logo-clickbus.svg" alt=""></li>
				<li><img src="img/quem_aprova/lendico_logo.svg" alt=""></li>
				<li><img src="img/quem_aprova/iugu_logo.svg" alt=""></li>
				<li><img src="img/quem_aprova/incompanny_logo.svg" alt=""></li>
				<li><img src="img/quem_aprova/gama_logo.svg" alt=""></li>
			</ul> -->
		</div>
	</section>
	<section id="prontoParaAcabarComClimao" class="row container center-important">
		<h3>Dúvidas?</h3>
		<div class="container-fluid">
			<div class="linhaVerde"></div>
		</div>
		<!-- <div id="linhaClimao"> -->
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
				<div class="blocoRoxo ajusteBlocoDuvidas">
					<div class="icone">
						<img src="img/duvidas/icone_pulga_atras_da_orelha_duvidas.svg" class="center-important" alt="">
					</div>
					<h4>Está com a pulga atrás da orelha</h4>
					<p class="duvidasP"><span>Como funciona</span> a ferramenta de clima da Vaipe?</p>
					<p class="duvidasP"><span>O que é eNPS</span> (employee Net Promoter Score)?</p>
					<p class="duvidasP"><span>Por que eu devo usar</span> a plataforma da Vaipe?</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
				<div class="blocoRoxo ajusteBlocoDuvidas">
					<div class="icone">
						<img src="img/duvidas/icone_desabafar.svg" alt="">
					</div>
					<h4>Quer desabafar</h4>
					<p class="duvidasP">Escreva para a gente e divida aquele segredinho, ou tire suas dúvidas! Temos especialistas pra te ajudar no <span>fale@vaipe.com.br </span></p>
				</div>
			</div>
		<!-- </div> -->
	</section>
	</main>
	<footer>
		<div id="footer1" class="container-fluid">
			<div class="container row" id="itens-lista">
				<div class="col-xs-12 col-sm-6 col-md-3">
					<h3 class="titulosRodapeListas">Páginas</h3>
					<ul>
						<li><a href="">Home</a></li>
						<li><a href="">Quem Somos</a></li>
						<li><a href="">Como Funciona</a></li>
						<li><a href="">Soluçoes</a></li>
						<li><a href="">Planos</a></li>
						<li><a href="">Anonimato</a></li>
						<li><a href="">Suporte</a></li>
						<li><a href="">Termos e Condições</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<h3 class="titulosRodapeListas">Redes Sociais</h3>
					<ul>
						<li><a href="">Facebook</a></li>
						<li><a href="">Instagram</a></li>
						<li><a href="">Linkedin</a></li>
						<li><a href="">Blog</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<h3 class="titulosRodapeListas">Contato</h3>
					<div>
						<p>
							+55 11 4420-3172<br />
							fale@vaipe.com.br
						</p>
						<p>
							Vaipe Tecnologia e Corretagem de Seguros SA<br />
							Rua Pais Leme, 215, Torre Office, Sala 1215<br />
							Pinheiros, São Paulo - SP<br />
							CEP 05424-150
						</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<h3 class="titulosRodapeListas"></h3>
					<ul>
						<li><a href=""></a></li>
						<li><a href=""></a></li>
						<li><a href=""></a></li>
						<li><a href=""></a></li>
						<li><a href=""></a></li>
						<li><a href=""></a></li>
						<li><a href=""></a></li>
						<li><a href=""></a></li>
					</ul>
				</div>
			</div>			
		</div>		
		<div id="footer2" class="container-fluid">
			<div class="container row" id="itens-texto">
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<p>
						A Vaipe é uma plataforma de pesquisa de clima e engajamento de funcionários. Consideramos que empresas de alto impacto são construídas por colaboradores engajados e satisfeitos. Por isso, temos a missão de democratizar por meio de tecnologia as melhores práticas de Gente e Gestão: facilitamos a vida dos gestores e colaboradores no desenvolvimento de</p>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<p>
						engajamento de todos membros das organizações.
						Ou seja, nós desenvolvemos soluções para desenvolver pessoas e fornecemos dados para construir uma cultura de alta performance no seu time, sempre perguntando, escutando e melhorando. A nossa metodologia de pesquisa de clima e termômetro de engajamento é</p>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<p>
						contínua, anônima, em tempo real e comparada ao mercado. Assim os líderes, 
						colaboradores e RHs podem aprimorar sua comunicação e dar #AdeusClimão. Logo, para que isso aconteça, acreditamos que todas as pessoas que fazem parte de uma organização, não importa o cargo, idade, gênero, cor ou credo, precisam ser ouvidas.</p>
				</div>
			</div>			
		</div>		
	</footer>
</body>
</html>