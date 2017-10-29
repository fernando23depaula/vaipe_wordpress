<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Vaipe</title>
	<link rel="stylesheet" href="css/style-paginas-internas.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<!-- <script src="https://use.fontawesome.com/e9abb40d2f.js"></script> -->
</head>
<body>
	<header>
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
		<div class="container center-important">
			<h1 class='text-center'>Escolha seu plano</h1>
		</div>
		
	</header>
	<!-- <button type="button" class="button-centralizado" id="testarAgoraMobile">Testar Agora</button> -->
	<main>

		<!-- Modal Vamos Bater um Papo-->
		<div class="modal fade" id="vamosBaterUmPapo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<p id="ajustaParaFechar"><span id="fecharModal"  class="close" data-dismiss="modal" aria-label="Close">X</span></p>
		    <div class="modal-content">
				<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button> -->
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Vamos bater um papo?</h5>
				</div>
					<div class="linhaVerde"></div>
		      	<div class="modal-body">
		      	<h5>Preencha os campos abaixo e entraremos o contato com você o quanto antes!</h5>
		        <form class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="nomeFormBaterUmPapa">Nome:</label>
							<input type="text" class="form-control" id="nomeFormBaterUmPapa" name="nomeFormBaterUmPapa" placeholder="">	
						</div>
						<div class="form-group">
							<label for="emailFormBaterUmPapa">Email:</label>
							<input type="email" class="form-control" id="emailFormBaterUmPapa" name="emailFormBaterUmPapa" placeholder="">	
						</div>
						<div class="form-group">
							<label for="cargoFormBaterUmPapa">Cargo:</label>
							<select class="form-control" id="cargoFormBaterUmPapa">
							<option value="">Selecione</option>
							<option value="">1</option>
							<option value="">2</option>
							<option value="">3</option>
							<option value="">4</option>
							<option value="">5</option>
							</select>
						</div>
						<div class="form-group">
							<label for="empresaFormBaterUmPapa">Empresa:</label>
							<input type="text" class="form-control" id="empresaFormBaterUmPapa" name="empresaFormBaterUmPapa" placeholder="">	
						</div>			  
					</div>
		        	<div class="col-sm-6">
		        		<div class="form-group">
							<label for="telefoneFormBaterUmPapa">Telefone:</label>
							<input type="text" class="form-control" id="telefoneFormBaterUmPapa" name="telefoneFormBaterUmPapa" placeholder="">	
						</div>	
						<div class="form-group">
							<label for="areaDeAtuacaoFormBaterUmPapa">Área de atuação:</label>
							<select class="form-control" id="areaDeAtuacaoFormBaterUmPapa">
							<option value="">Selecione</option>
							<option value="">1</option>
							<option value="">2</option>
							<option value="">3</option>
							<option value="">4</option>
							<option value="">5</option>
							</select>
						</div>
						<div class="form-group">
							<label for="numeroFuncionárioFormBaterUmPapa">Número de funcionários:</label>
							<select class="form-control" id="numeroFuncionárioFormBaterUmPapa">
							<option value="">Selecione</option>
							<option value="">1</option>
							<option value="">2</option>
							<option value="">3</option>
							<option value="">4</option>
							<option value="">5</option>
							</select>
						</div>
						<div class="form-group">
							<label for="comoConheceuVaipeFormBaterUmPapa">Como conheceu a Vaipe:</label>
							<select class="form-control" id="comoConheceuVaipeFormBaterUmPapa">
							<option value="">Selecione</option>
							<option value="">1</option>
							<option value="">2</option>
							<option value="">3</option>
							<option value="">4</option>
							<option value="">5</option>
							</select>
						</div>
		        	</div>
				  
					
				</form>
		      </div>
		      <div class="modal-footer">
		       <button type="submit" class="btn btn-primary">Enviar</button>
		      </div>
		    </div>
		  </div>
		</div>
		<!-- Fechamento Modal -->

		<!-- Modal Vantagens de Cada Plano -->
		
		
		<div class="modal fade" id="vantagensCadaPlano" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<p id="ajustaParaFechar"><span id="fecharModal"  class="close" data-dismiss="modal" aria-label="Close">X</span></p>
		    <div class="modal-content">
				<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button> -->
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Vantagens de cada plano</h5>
				</div>
				<div class="linhaVerde"></div>
		      	<div class="modal-body">
		      		<ul id="listaPlanos">
	        			<li>Essencial</li>
	        			<li>Completo</li>
	        			<li>Super</li>
	        		</ul>
	        		<div class="clearfix"></div>
			      	<div class="row">
				        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
				        	<div class="plano">
				        		<h5 class="tituloPlano">Termômetro de engajamento mensal</h5>
				        		<ul class="text-right">
					        		<li>Uma pergunta eNPS por mês</li>
									<li>Resultado em tempo real</li>
									<li>Comparativo de Mercado</li>
									<li>Análise por departamento, sexo e senioridade</li>
									<li>Visualização dos resultados por grupos</li>
									<li>Chat RH para responder feedbacks</li>
									<li>Nº de administradores na plataforma: ilimitado</li>
								</ul>
				        	</div>
				        </div>
				        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 row">
				        	<div class="col-4">
				        		<span class="checkPlanos align-middle"></span>
				        	</div>
				        	<div class="col-4">
				        		<span class="checkPlanos align-middle"></span>
				        	</div>
				        	<div class="col-4">
				        		<span class="checkPlanos align-middle"></span>
				        	</div>
				        </div>
			        </div>
			        <div class="row">
			        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
					        <div class="plano">
				        		<h5 class="tituloPlano">Pesquisa de clima organizacional semanal</h5>
				        		<ul class="text-right">
									<li>Uma pergunta sim ou não por semana</li>
									<li>Resultado em tempo real</li>
									<li>Comparativo de Mercado</li>
									<li>Análise por departamento, sexo e senioridade</li>
									<li>Visualização dos resultados por grupos</li>
									<li>Chat RH para responder feedbacks</li>
									<li>Nº de administradores na plataforma: ilimitado</li>
								</ul>
				        	</div>
				        </div>
				        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 row">
				        	<div class="col-4">
				        		<span class="checkPlanos align-middle"></span>
				        	</div>
				        	<div class="col-4">
				        		<span class="checkPlanos align-middle"></span>
				        	</div>
				        	<div class="col-4">
				        		<span class="checkPlanos align-middle"></span>
				        	</div>
				        </div>
		        	</div>
		        	<div class="row">
		        		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
				        	<div class="plano">
				        		<h5 class="tituloPlano">Termômetro de engajamento mensal</h5>
				        		<ul class="text-right">
									<li>53 perguntas sim ou não e a pergunta eNPS enviadas de uma única vez em questionário</li>
									<li>Resultados em resumo ou detalhado</li>
									<li>Perfil de funcionários</li>
									<li>Chat RH para responder feedbacks</li>
								</ul>
				        	</div>
				        </div>
			        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 row">
				        	<div class="col-4">
				        		<span class="checkPlanos align-middle"></span>
				        	</div>
				        	<div class="col-4">
				        		<span class="checkPlanos align-middle"></span>
				        	</div>
				        	<div class="col-4">
				        		<span class="checkPlanos align-middle"></span>
				        	</div>
				        </div>
		        	</div>
			    </div>
		     
		    </div>
		  </div>
		</div>
		<!-- Modal -->

		<section id="secaoComeceAgora" class="row container center-important">
			<div id="chamada-principal">
				<div id="bloco-verde" class="float-left"></div>
				<div id="container-bloco-controladores"  class="float-left">	
					<div id="bloco-colaboladores">
						<div id="textoLista" class="float-left">
							<p>Até 10 colaboradores é de graça ;)</p>
							<ul>
								<li><span>Termômetro de engajamento</span></li>
							</ul>
						</div>
						<div id="botaoDivisoria" class="float-right">
							<span class="divisoria"></span>
							<button id="comeceAgora"  data-toggle="modal" data-target="#vantagensCadaPlano">Comece agora!</button>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="sectionPlanos">
			<h2 class="text-center">Planos para +10 colaboradores</h2>
			<div class="linhaBranca"></div>
			<div class="container row center-important" id="containerTabelaPlanos">
					<div class="tabelaPlano col-sm-4">
						<div class="containerPlanoTable">
							<div class="blocoIconeNome">
								<p class="tituloPlano">Essencial</p>
								<div class="iconePlano"></div>
							</div>
							<div class="tabelaBloco1">
								<div class="conteudoBloco">
									<ul>
										<li><span>Termômetro de engajamento</span></li>
									</ul>
									<p>Uma pergunta eNPS por mês</p>						
								</div>
							</div>
							<div class="divisoria"></div>
							<div class="tabelaBloco2">
								<div class="conteudoBloco">
									<div class="ladoEsquerdo float-left">
										<ul>
											<li><span>Implementação:</span></li>
										</ul>
										<p>Pagamento único</p>
									</div>
									<div class="ladoDireito float-right">
										<p class="preco"><span class="topText">R$</span> <span class="upperValor">99</span>,00</p>
									</div>
								</div>
							</div>
							<div class="divisoria"></div>
							<div class="tabelaBloco3">
								<div class="conteudoBloco">
									<div class="ladoEsquerdo float-left">
										<ul>
											<li><span>Mensalidade:</span></li>
										</ul>
										<p>Sem fidelidade</p>
									</div>
									<div class="ladoDireito float-right">
										<p class="preco"><span class="topText">R$</span> <span class="upperValor">99</span>,00</p>
										<p>+</p>
										<p class="preco porColaborador"><span class="topText">R$</span> <span class="upperValor">2</span>,00<span class="topText quebra">por cada colaborador</span></p>
									</div>
								</div>
							</div>
							<button class="faleComConsultor" data-toggle="modal" data-target="#vamosBaterUmPapo">Fale com um consultor</button>
							<a href="" class="saibaMais">Saiba mais</a>
						</div>
					</div>
					<div class="tabelaPlano col-sm-4 tabelaCentral">
						<p id="queridinho">O queridinho das empresas</p>
						<div class="containerPlanoTable">
							<div class="blocoIconeNome">
								<p class="tituloPlano">Completo</p>
								<div class="iconePlano"></div>
							</div>
							<div class="tabelaBloco1">
								<div class="conteudoBloco">
									<ul>
											<li><span>Implementação:</span></li>
										</ul>
										<p>Pagamento único</p>
										<ul>
											<li><span>Pesquisa de clima organizacional:</span></li>
										</ul>
										<p>Uma pergunta sim ou não por semana</p>					
								</div>
							</div>
							<div class="divisoria"></div>
							<div class="tabelaBloco2">
								<div class="conteudoBloco">
									<div class="ladoEsquerdo float-left">
										<ul>
											<li><span>Implementação:</span></li>
										</ul>
										<p>Pagamento único</p>
									</div>
									<div class="ladoDireito float-right">
										<p class="preco"><span class="topText">R$</span> <span class="upperValor">99</span>,00</p>
									</div>
								</div>
							</div>
							<div class="divisoria"></div>
							<div class="tabelaBloco3">
								<div class="conteudoBloco">
									<div class="ladoEsquerdo float-left">
										<ul>
											<li><span>Mensalidade:</span></li>
										</ul>
										<p>Sem fidelidade</p>
									</div>
									<div class="ladoDireito float-right">
										<p class="preco"><span class="topText">R$</span> <span class="upperValor">99</span>,00</p>
										<p>+</p>
										<p class="preco porColaborador"><span class="topText">R$</span> <span class="upperValor">4</span>,00<span class="topText quebra">por cada colaborador</span></p>
									</div>
								</div>
							</div>
							<button class="faleComConsultor" data-toggle="modal" data-target="#vamosBaterUmPapo">Fale com um consultor</button>
							<a href="" class="saibaMais">Saiba mais</a>
						</div>
					</div>

					<div class="tabelaPlano col-sm-4">
						<div class="containerPlanoTable">
							<div class="blocoIconeNome">
								<p class="tituloPlano">Super</p>
								<div class="iconePlano"></div>
							</div>
							<div class="tabelaBloco1">
								<div class="conteudoBloco">
										<ul>
											<li><span>Diagnóstico inicial:</span></li>
										</ul>
										<p>Toda pesquisa enviada de uma só vez</p>
										<ul>
											<li><span>Termômetro de engajamento:</span></li>
										</ul>
										<p>Uma pergunta eNPS por mês</p>
										<ul>
											<li><span>Pesquisa de clima organizacional:</span></li>
										</ul>
										<p>Uma pergunta sim ou não por semana</p>					
								</div>
							</div>
							<div class="divisoria"></div>
							<div class="tabelaBloco2">
								<div class="conteudoBloco">
									<div class="ladoEsquerdo float-left">
										<ul>
											<li><span>Implementação:</span></li>
										</ul>
										<p>Pagamento único</p>
									</div>
									<div class="ladoDireito float-right">
										<p class="preco"><span class="topText">R$</span> <span class="upperValor">1.188</span>,00</p>
									</div>
								</div>
							</div>
							<div class="divisoria"></div>
							<div class="tabelaBloco3">
								<div class="conteudoBloco">
									<div class="ladoEsquerdo float-left">
										<ul>
											<li><span>Mensalidade:</span></li>
										</ul>
										<p>Sem fidelidade</p>
									</div>
									<div class="ladoDireito float-right">
										<p class="preco"><span class="topText">R$</span> <span class="upperValor">99</span>,00</p>
										<p>+</p>
										<p class="preco porColaborador"><span class="topText">R$</span> <span class="upperValor">4</span>,00<span class="topText quebra">por cada colaborador</span></p>
									</div>
								</div>
							</div>
							<button class="faleComConsultor" data-toggle="modal" data-target="#vamosBaterUmPapo">Fale com um consultor</button>
							<a href="" class="saibaMais">Saiba mais</a>
						</div>
					</div>
			</div>
		</section>
		<section id="historiaSucesso">
			<h2>História de sucesso</h2>
			<div class="linhaVerde"></div>
			<article class="historia">
				<h3>Vanessa Lopes - Conversion</h3>
				<div class="media">
					<img src="img/perfil.png" alt="" class="d-flex align-self-end mr-3">
					<div class="media-body align-self-center">
						<p>“A Vaipe caiu do céu! na ferramenta tem tudo a mão, os resultados são coletados em tempo real e posso extrair relatórios com as respostas! Os colaboradores tem liberdade e segurança pra opinar. Isso possibilita ter uma visão mais próxima da realidade. A plataforma da Vaipe garante isso!"</p>
						<button>Ler toda história</button>
					</div>
				</div>
			</article>
			<article class="historia">
				<h3>Juliana Marin - Lendico</h3>
				<div class="media">
					<img src="img/perfil.png" alt="" class="d-flex align-self-end mr-3">
					<div class="media-body align-self-center">
						<p>“Abrimos para os colaboradores um espaço que antes não existia, de falar de forma anônima seus anseios e suas sugestões. Conseguimos dar voz para as pessoas sem o filtro que poderia haver por parte dos líderes, por exemplo. Todos têm o mesmo espaço para contribuir para que a empresa cresça e se consolide como um bom lugar para trabalhar.”</p>
						<button>Ler toda história</button>
					</div>
				</div>
			</article>
		</section>