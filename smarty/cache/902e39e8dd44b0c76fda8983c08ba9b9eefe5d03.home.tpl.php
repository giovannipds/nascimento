<?php /*%%SmartyHeaderCode:853450f0134c6e3ca2-43486623%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '902e39e8dd44b0c76fda8983c08ba9b9eefe5d03' => 
    array (
      0 => '..\\views\\site\\home.tpl',
      1 => 1355434411,
      2 => 'file',
    ),
    '0c993d8a742590ebfedc5f80206c4e9fd21d0f15' => 
    array (
      0 => '..\\views\\site\\layout.tpl',
      1 => 1357843670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '853450f0134c6e3ca2-43486623',
  'variables' => 
  array (
    'base' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50f0134c7c7d31_95046961',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f0134c7c7d31_95046961')) {function content_50f0134c7c7d31_95046961($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<base href="http://localhost/nascimento/">
		<title>Nascimento Imóveis</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<link rel="stylesheet" type="text/css" href="css/layout.css">
		<script type="text/javascript" src="http://fast.fonts.com/jsapi/f29b6c5b-0ecf-4e8e-9526-5fcb2d7dfd4a.js"></script>
		<script type="text/javascript" src="js/layout.js"></script>
		
	</head>
	<body>
		<!-- Facebook Início -->
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=277424755621985";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<!-- Facebook Fim -->
		<header>
			<a href="admin" id="admin" target="_blank"><img alt="Área Restrita" height="14" src="imgs/layout/cadeado.png" width="12"></a>
			<img alt="&lsquo;Lembra-te do dia de sábado&rsquo; - Êxodo 20:8" height="28" id="citacao" src="imgs/layout/citacao.png" width="182">
			<h1 id="logo"><img alt="NASCIMENTO IMÓVEIS - CRECI 34.697" height="109" src="imgs/layout/logo.png" width="443"></h1>
			<nav id="menu">
				<ul>
					<li><a href="./">Home</a></li>
					<li><a href="a-imobiliaria">A Imobiliária</a></li>
					<li><a href="imoveis-a-venda/">Imóveis à Venda</a>
						<ul>
							<li><a href="imoveis-a-venda/apartamentos">Apartamentos</a></li>
							<li><a href="imoveis-a-venda/casas">Casas</a></li>
							<li><a href="imoveis-a-venda/salas-comerciais">Salas Comerciais</a></li>
							<li><a href="imoveis-a-venda/terrenos">Terrenos</a></li>
							<li><a href="imoveis-a-venda/propriedades-rurais">Propriedades Rurais</a></li>
						</ul></li>
					<li><a href="imoveis-para-alugar/">Imóveis para Alugar</a>
						<ul>
							<li><a href="imoveis-para-alugar/apartamentos">Apartamentos</a></li>
							<li><a href="imoveis-para-alugar/casas">Casas</a></li>
							<li><a href="imoveis-para-alugar/salas-comerciais">Salas Comerciais</a></li>
							<li><a href="imoveis-para-alugar/terrenos">Terrenos</a></li>
							<li><a href="imoveis-para-alugar/propriedades-rurais">Propriedades Rurais</a></li>
						</ul></li>
					<li><a href="fale-conosco">Fale Conosco</a></li>
				</ul>
			</nav>
			<form id="encontre-seu-imovel">
				<h2>Encontre seu Imóvel</h2>
				<input placeholder="Código ou palavras-chaves" type="search"><br>
				<label for="comprar"><input id="comprar" name="intencao" type="radio" value="Comprar"> Comprar</label> <label for="alugar"><input id="alugar" name="intencao" type="radio" value="Alugar"> Alugar</label><br>
				<strong>Bairros:</strong>
				<div>
					<label for="centro"><input id="centro" type="checkbox"> Centro</label><br>
					<label for="humaita"><input id="humaita" type="checkbox"> Humaitá</label><br>
					<label for="sao-roque"><input id="sao-roque" type="checkbox"> São Roque</label>
				</div>
				<strong>Tipos:</strong>
				<div>
					<label for="apartamentos"><input id="apartamentos" type="checkbox"> Apartamentos</label><br>
					<label for="casas"><input id="casas" type="checkbox"> Casas</label><br>
					<label for="terrenos"><input id="terrenos" type="checkbox"> Terrenos</label>
				</div>
				<strong>Dormitórios:</strong><br>
				<input type="text" value="0"> <input type="text" value="∞"><br>
				<strong>Área (m²):</strong><br>
				<input type="text" value="0"> <input type="text" value="∞"><br>
				<strong>Preço (R$ mil):</strong><br>
				<input type="text" value="0"> <input type="text" value="∞"><br>
				<input type="submit" value="Buscar">
			</form>
		</header>
		<article>
			
	<h2>Imóveis à Venda mais acessados</h2>
	<div>
		<h3>Apartamento</h3>
		<p>2 dormitórios — 50 e 80 m²<br />
			Juventude da Enologia, Bento Gonçalves</p>
		<p>Cód. 7566</p>
		<p>R$ 160.000,00</p>
	</div>
	<h2>Imóveis para Alugar mais acessados</h2>
	<div>
		<h3>Apartamento</h3>
		<p>2 dormitórios — 50 e 80 m²<br />
			Juventude da Enologia, Bento Gonçalves</p>
		<p>Cód. 7566</p>
		<p>R$ 160.000,00</p>
	</div>

		</article>
		<footer>
			<address><span id="atendimento">Atendimento das 8h às 18h</span><br>
				<span id="telefone-e-e-mail">(54) <strong>3055-7678</strong><br>
				<a href="mailto:imoveis@nascimento.imb.br">imoveis@nascimento.imb.br</a></span><br>
				<a id="endereco">Treze de Maio, 116, sala 1<br>
				Bento Gonçalves, RS 95700-000</a><br>
				<img alt="NASCIMENTO IMÓVEIS" height="51" id="logo-do-rodape" src="imgs/layout/logo-do-rodape.png" width="234">
				<!-- Facebook Início -->
				<div class="fb-like" data-href="https://www.facebook.com/narcejao" data-send="false" data-layout="box_count" data-width="55" data-show-faces="false"></div>
				<!-- Facebook Fim -->
			</address>
		</footer>
	</body>
</html><?php }} ?>