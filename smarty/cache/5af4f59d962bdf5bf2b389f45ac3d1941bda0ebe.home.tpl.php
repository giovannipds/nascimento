<?php /*%%SmartyHeaderCode:2032650be25f3344782-96225179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5af4f59d962bdf5bf2b389f45ac3d1941bda0ebe' => 
    array (
      0 => '..\\views\\home.tpl',
      1 => 1354639216,
      2 => 'file',
    ),
    'fab3464b97c278f1ed4090b38682da50e62cbfa3' => 
    array (
      0 => '..\\views\\layout.tpl',
      1 => 1355429922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2032650be25f3344782-96225179',
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50ca39ae7a5e72_29823282',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ca39ae7a5e72_29823282')) {function content_50ca39ae7a5e72_29823282($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<title>Nascimento Imóveis</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<link rel="stylesheet" type="text/css" href="css/layout.css">
		<script type="text/javascript" src="http://fast.fonts.com/jsapi/f29b6c5b-0ecf-4e8e-9526-5fcb2d7dfd4a.js"></script>
		<script type="text/javascript" src="js/layout.js"></script>
		
	</head>
	<body>
		<header>
			<a href="admin" target="_blank"><img alt="Área Restrita" height="14" src="imgs/layout/cadeado.png" width="12"></a>
			<img alt="&lsquo;Lembra-te do dia de sábado&rsquo; - Êxodo 20:8" height="28" src="imgs/layout/citacao.png" width="182">
			<h1><img alt="NASCIMENTO IMÓVEIS - CRECI 34.697" height="109" src="imgs/layout/logo.png" width="443"></h1>
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
					<li><a href="">Imóveis para Alugar</a>
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
			<h2>Encontre seu Imóvel</h2>
			<form>
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
			<address>Atendimento das 8h às 18h<br>
				(54) 3055-7678<br>
				<a href="mailto:imoveis@nascimento.imb.br">imoveis@nascimento.imb.br</a><br>
				Treze de Maio, 116, sala 1<br>
				Bento Gonçalves, RS 95700-000
				<img alt="NASCIMENTO IMÓVEIS" height="" src="" width=""></address>
		</footer>
	</body>
</html><?php }} ?>